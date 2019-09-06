<?php
	Function Check_User($PDO/*, $login*/)
	{
		$str = $PDO->prepare("SELECT * FROM patho");
		$res = $sth -> execute();

		if($res == TRUE)
		{
			$data = $sth->fetchall();
			return $data;
		}
	}
?>