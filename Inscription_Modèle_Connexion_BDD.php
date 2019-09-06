<?php
	Function Connexion_BDD()
	{
		$dbname = 'TLI';
		$host = '127.0.0.1';
		$user = 'user_write';
		$pass = 'write';
		$charset = 'utf8mb4';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$pdo = new PDO($dsn, $user, $pass)

		return $pdo;
	}
?>