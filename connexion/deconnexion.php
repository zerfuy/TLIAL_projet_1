<?php
session_start();
session_destroy();
$titre="Déconnexion";
include("includes/accueil.php");//page d'accueil


if ($id==0) erreur(ERR_IS_NOT_CO);

?>

