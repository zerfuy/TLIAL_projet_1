<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="../../css/style.css" rel="stylesheet" type="text/css" />
		<title>Incription</title>
	</head>
	<body>
	    <div id="Inscription">
	    	<h2>Inscription </h2>
	        <form method="POST" action="../Inscription_Controleur.php">
	            <label for="name">Nom : </label>
	            <input type="text" name="Name" id="Name" required="">
	           	<label for="FirstName">Prénom : </label>
	            <input type="text" name="FirstName" id="FirstName" required="">
	            <label for="Login">Nom d'utilisateur : </label>
	            <input type="text" name="Login" id="Login" required="">
	            <label for="name">Mot de Passe : </label>
	           	<input type="Password" name="Pass" id="Pass" required="">
	           	<input type="email" name="Email" id="Email" required="">	           	
	            <input type="submit" name="Send" id="Send">	            		            	
	        </form>
	    </div>
	</body>
</html>