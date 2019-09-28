<?php
    function index(){
        $dbname = 'TLI';//nom de la base de données
		$host = '127.0.0.1';//serveur"localhost"
		$user = 'root';//utilisateur
		$pass = '';//mot de passe
		$charset = 'utf8mb4';//acceptation de n'importe quel caractère

		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";//on précise quel base de données et quel serveur
		$pdo = new PDO($dsn, $user, $pass);//pour se connecter à la BD, il faut LES 4 PARAMETRES
        
        $query = $pdo->query('SELECT * FROM `patho`')->fetchAll();
        $arrayData  = array();
        foreach ($query as $row) {
            array_push($arrayData, $row);
        }
        return $arrayData;
    } 
        
?>