<?php

	include('Modele/Inscription_Connexion_BDD.php');
	include('Modele/Inscription_Check.php');
	include('Modele/Inscription_BDD.php');
	$Name = $_POST['Name'];
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];

	$PDO = Connexion_BDD();
	//$DATA = Check_User($PDO);
	ADD_User($PDO,$Login,$Name,$FirstName,$Pass);
	//$sth = $PDO->prepare('INSERT INTO USERS VALUES ("0", "test_login", "test", "test", "test")');
	//$res = $sth -> execute();

?>

