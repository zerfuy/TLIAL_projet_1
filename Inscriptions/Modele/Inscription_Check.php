<?php
	Function Check_User($PDO, $login)
	{
		$sth = $PDO->prepare("SELECT id_User FROM USERS WHERE Login = :login");
		$sth -> bindValue(':login', $login, PDO::PARAM_STR);
		$res = $sth -> execute();

		if($res == TRUE)
		{
			$data = $sth->fetchall();
			return $data;
		}
	}
?>