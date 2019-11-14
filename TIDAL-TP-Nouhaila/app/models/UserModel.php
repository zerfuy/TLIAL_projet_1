<?php


class UserModel{

    private $conn = null;

    public function __construct(){ //permet de se connecter avec la BD
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $this->conn = new PDO("mysql:host=$servername;dbname=tli", $username, $password,    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    function login($login,$password){
        $user = null;

        $stmt = $this->conn->prepare("SELECT id_User, password FROM users WHERE login=:user");
        $stmt->execute(['user'=>$login]); 
        $user = $stmt->fetch();
        $hashedPass = $user['password'];
        if(password_verify($password, $hashedPass)){
            return $user;
        }
    }

    function register($login,$pass,$fname,$lname){
        
        if (!preg_match("/^[-|a-zA-Z ]*$/",$login) || strlen($login) < 3) return null;
        if (!preg_match("/^[-|a-zA-Z ]*$/",$fname) || strlen($fname) < 3) return null;
        if (!preg_match("/^[-|a-zA-Z ]*$/",$lname) || strlen($lname) < 3) return null;
        if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[?\/<~#`!@$%^&*()+=}|:\";\',>{ -])/",$pass)) return 2;
        $hash = password_hash($pass, PASSWORD_DEFAULT); 
        
        // Add verif de doublons

        $stmt = $this->conn->prepare("SELECT id_User,firstname FROM users WHERE login=:user");
        $stmt->execute(['user'=>$login]); 
        $user = $stmt->fetch();
        if($user){
            return '1';
        }

        $query = "INSERT INTO users(login,password,firstname,name) VALUES(:login,:pass,:fname,:lname)";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute([
            'login'=>$login,
            'pass'=>$hash,
            'fname'=>$fname,
            'lname'=>$lname
        ]);
        // echo "result : $result";
        if($result){
            $stmt = $this->conn->prepare("SELECT id_User,firstname FROM users WHERE login=:user");
            $stmt->execute(['user'=>$login]); 
            $user = $stmt->fetch();
            return $user;
        }else{
            return 0;
        }
    }


}