<?php

	include('Modele/Inscription_Connexion_BDD.php');
	include('Modele/Inscription_Check.php');
	include('Modele/Inscription_BDD.php');
	$Name = $_POST['Name'];//récupére les valeurs saisi dans le formulaire et les met dans les variables
	$FirstName = $_POST['FirstName'];
	$Login = $_POST['Login'];
	$Pass = $_POST['Pass'];

	$PDO = Connexion_BDD();
	//ADD_User($PDO,$Login,$Name,$FirstName,$Pass);
	$res = Check_User($PDO,$Login);

	if($res == FALSE)
	{
		ADD_User($PDO,$Login,$Name,$FirstName,$Pass);
		header('Location: Vue/Inscription_Reussie.php');
	}
	else
	{
		header('Location: Vue/Inscription_Echouer.php');
	}
?>

