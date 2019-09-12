<?php
	Function Check_User($PDO, $login,$name,$firstname,$password)
	{
		$sth = $PDO->prepare("INSERT INTO USERS VALUES (id_user,$login,$name,$firstname,$password)");
		$res = $sth -> execute();

		if($res == TRUE)
		{
			$data = $sth->fetchall();
			return $data;
		}
	}
?>