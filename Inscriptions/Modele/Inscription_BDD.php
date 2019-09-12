<?php
	Function ADD_User($PDO, $login,$name,$firstname,$password)
	{
		print($login);
		print($name);
		print($firstname);
		print($password);
		$querry = $PDO->prepare("INSERT INTO USERS VALUES (id_user, :login, :name, :firstname, :password)");
		$query->bindValue(':login', $login, PDO::PARAM_STR);
		$query->bindValue(':password', $password, PDO::PARAM_STR);
		$query->bindValue(':name', $name, PDO::PARAM_STR);
		$query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->execute();

?>