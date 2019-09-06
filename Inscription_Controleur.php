<?php

	include('Inscription_Modèle_Connexion_BDD.php')
	$Name = $_POST['Name'];
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];

	$PDO = Connexion_BDD();
	var_dump($PDO);

?>

