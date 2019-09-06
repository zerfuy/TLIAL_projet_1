<?php

	include('Inscription_Modèle_Connexion_BDD.php');
	include('Inscription_Check.php');
	$Name = $_POST['Name'];
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];

	$PDO = Connexion_BDD();
	$DATA = Check_User($PDO);

	var_dump($DATA);

?>

