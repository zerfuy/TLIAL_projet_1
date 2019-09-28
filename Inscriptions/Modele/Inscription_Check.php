<?php
	Function Check_User($PDO, $login)
	{
//<<<<<<< Updated upstream
		$sth = $PDO->prepare("SELECT id_User FROM USERS WHERE Login = :login");//cherche les utilisateurs qui ont le même login dns la table USERS? :login"/ LE LOGIN QUE FAIT ENTRER
		$sth -> bindValue(':login', $login, PDO::PARAM_STR);//affecter la valeur à USER ex root? $login que j'ai fait entrer récupéré par le controller
//=======
		//$sth = $PDO->prepare("SELECT ID_User FROM User WHERE Login = :valeur");
		//$sth -> bindValue(":valeur",$login,PDO::PARAM_STR);
//>>>>>>> Stashed changes
		$res = $sth -> execute();//execution de la requete, $res= résultat de la requête

		if($res == TRUE)
		{
			$data = $sth->fetch(PDO::FETCH_ASSOC);//$data récupérer la valeur du login de l'utilisateur
	
			if(!$data)
			{
				return FALSE;//tableau vide ca veut dire que j lai pas fait entrer dans login
			}
			else
			{
				return TRUE;
			}
		}
	}
?>