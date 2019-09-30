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
		"Inscription_Formulaire" => "templates/Inscription_Formulaire.tpl",
		"Inscription_Echouer" => "templates/Inscription_Echouer.tpl",
		"Inscription_Reussie" => "templates/Inscription_Reussie.tpl",
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
