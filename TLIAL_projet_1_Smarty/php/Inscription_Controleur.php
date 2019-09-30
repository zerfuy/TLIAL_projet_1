<?php

	require '../lib/smarty-3.1.33/libs/Smarty.class.php';
	require '../lib/router/Router.class.php';
	require '../lib/checkers/checkers.php';


	include('../lib/bd/Inscription_Connexion_BDD.php');
	include('../lib/checkers/Inscription_Check.php');
	include('../lib/login/Inscription_BDD.php');
	
	$Name = $_POST['Name'];

	$Name = $_POST['Name'];
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];
	$Mail = $_POST['Email'];

	$PDO = Connexion_BDD();
	//ADD_User($PDO,$Login,$Name,$FirstName,$Pass);
	$res = Check_User($PDO,$Login);

	if($res == FALSE)
	{
		ADD_User($PDO,$Login,$Name,$FirstName,$Mail,$Pass);
		header('Location: Vue/Inscription_Reussie.php');
	}
	else
	{
		header('Location: Vue/Inscription_Echouer.php');
	}
?>

