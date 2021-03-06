<?php


class SearchModel{

    private $conn = null;

    public function __construct(){ //permet de se connecter avec la BD
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $this->conn = new PDO("mysql:host=$servername;dbname=tli", $username, $password,    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    function getPathosByKeyword($keyword){

        $keyword = $keyword."%";
        $stmt = $this->conn->prepare("
        SELECT distinct patho.* FROM keywords,keysympt,symptome,symptpatho,patho 
        WHERE keywords.idK = keysympt.idK
        AND keysympt.idS = symptome.idS
        AND symptome.idS = symptpatho.idS
        AND symptpatho.idP = patho.idP
        AND keywords.name LIKE :keyword
        LIMIT 20");
        $stmt->execute(['keyword'=>$keyword]); 
        $data = $stmt->fetchAll();
        return $data;
    
    }

}