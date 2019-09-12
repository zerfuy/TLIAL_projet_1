<?php

	include('Modele/Inscription_Connexion_BDD.php');
	include('Modele/Inscription_Check.php');
	include('Modele/Inscription_BDD.php');
	$Name = $_POST['Name'];
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];

	$PDO = Connexion_BDD();
	$USER = ADD_User($PDO,$Login,$Name,$FirstName,$Pass);
	print_r($USER);

?>

