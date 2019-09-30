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
		"inscription" => "templates/Inscription_Formulaire.tpl",
		"connexion" => "templates/connexion.tpl",
	);

	function __construct($smarty,$action){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}

	function processAction($action){
		$ret = "templates/defaut.tpl";
		if(isset(Router::mapTpl[$action])){
				$ret = Router::mapTpl[$action];
		}

		return $ret;



}

?>
