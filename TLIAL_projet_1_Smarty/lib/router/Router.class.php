<?php
/*
	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/

class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"defaut" => "templates/defaut.tpl",
		"inscription" => "templates/inscription.tpl",
		"connexion" => "templates/connexion.tpl",
	);

	function __construct($smarty,$action){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}

	function processAction(){
		$ret = "templates/defaut.tpl";

		return $ret;
	}



}

?>