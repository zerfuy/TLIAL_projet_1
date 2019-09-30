<?php
	Function Connexion_BDD()//la fonction retourne $pdo
	{
		$dbname = 'TLI';//nom de la base de données
		$host = '127.0.0.1';//serveur"localhost"
		$user = 'user_write';//utilisateur
		$pass = 'write';//mot de passe
		$charset = 'utf8mb4';//acceptation de n'importe quel caractère

		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";//on précise quel base de données et quel serveur
		$pdo = new PDO($dsn, $user, $pass);//pour se connecter à la BD, il faut LES 4 PARAMETRES

		return $pdo;
	}
?>