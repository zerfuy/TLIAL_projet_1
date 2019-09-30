<?php

session_start();
    $host = '127.0.0.1';
    $dbname = 'TLI';
    $user = 'user_write';
    $pass = 'write';
    $charset = 'utf8mb4';
  
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $bdd = new PDO($dsn, $user, $pass);
    $message=''; //test connexion
//$bdd = new PDO('mysql:host=127.0.0.1;dbname=phpmyadmin', 'phpmyadmin', 'tp');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   //var_dump($_POST); // test debug 
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id_user'];
         $_SESSION['login'] = $userinfo['login'];
         $_SESSION['email'] = $userinfo['email'];
         $_SESSION['name'] = $userinfo['name'];
         $_SESSION['first_name'] = $userinfo['first_name'];
         
            
        // header("Location: profil.php?id=".$_SESSION['id']);
          
  	    $message = '<p>Bienvenue '.$userinfo['login'].', 
  			vous êtes maintenant connecté!</p>
  			<p>Cliquez <a href="./index.php">ici</a> 
  			pour revenir à la page d accueil</p>';  
	   }
	 
   $requser->CloseCursor();
   }
    else 
    {
         $erreur = "Mauvais mail ou mot de passe !";
    }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
	
}
?>
<html>
   <head>
      <title>Page de connexion</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>
