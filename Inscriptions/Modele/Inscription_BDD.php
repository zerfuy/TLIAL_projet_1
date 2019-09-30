<?php
	Function ADD_User($PDO, $login,$name,$firstname,$password)
	{

		$query = $PDO->prepare("INSERT INTO USERS VALUES (DEFAULT, :login, :name, :firstname, :password)");//DEFAULT:incrémantation des users, TLI"Base de données", je veux insérer dans la table USERS des info "name,....." 
		$query->bindValue(':login', $login, PDO::PARAM_STR);//affecter la valeur de login à la table USERS
		$query->bindValue(':password', $password, PDO::PARAM_STR);
		$query->bindValue(':name', $name, PDO::PARAM_STR);
		$query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->execute();
    }

?>