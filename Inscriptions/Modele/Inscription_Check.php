<?php
	Function Check_User($PDO, $login)
	{
		$sth = $PDO->prepare("SELECT id_User FROM USERR WHERE Login = :valeur");
		$sth ->( binValue(":valeur",$login,PDO::PARAM_STR)
		$res = $sth -> execute();

		if($res == TRUE)
		{
			$data = $sth->fetchall();
			return $data;
		}
	}
?>