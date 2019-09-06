<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<title>Incription</title>
	</head>
	<body>

		<div id="Sidenav1" class="sidenav">
 			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="./index.php" id="linkAccueil">Accueil</a>
		  	<a href="./Connexion.php" id="linkConnexion">Connexion</a>
		  	<a href="./Informations.php" id="linkInformations">Informations</a> 
		</div>

  		<div id="menubar">
    		<span  id="openMenuBtn" onclick="openNav()">&#9776; Menu</span>
  		</div>
	        <div id="Inscription">
	            <h2>Inscription </h2>
	            <form method="POST">
	            	<label for="name">Nom : </label>
	            	<input type="text" name="Name" id="Name">
	            	<label for="firstname">Prénom : </label>
	            	<input type="text" name="Firstname" id="Firstname">
	            	<label for="Login">Nom d'utilisateur : </label>
	            	<input type="text" name="Login" id="Login">
	            	<label for="name">Mot de Passe : </label>
	            	<input type="Passe" name="Password" id="Password">	            		            	
	            </form>
	        </div>
	</body>
</html>