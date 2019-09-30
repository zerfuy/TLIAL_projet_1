<?php
/* Smarty version 3.1.33, created on 2019-09-30 15:52:49
  from 'C:\wamp64\www\tlial_test\TLIAL_projet_1\TLIAL_projet_1_Smarty\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9224d1634d16_63335564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29fe28c053cbc2d297cdee530b742ecc5f3086dc' => 
    array (
      0 => 'C:\\wamp64\\www\\tlial_test\\TLIAL_projet_1\\TLIAL_projet_1_Smarty\\templates\\defaut.tpl',
      1 => 1569858768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9224d1634d16_63335564 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<title> Ca pique mais c'est bon ! </title>
</head>
<body>

<div id="Sidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="?action=defaut" id="linkAccueil">Accueil</a>
  <a href="?action=connexion" id="linkConnexion">Connexion</a>
  <a href="?action=inscription" id="linkinscription">Inscription</a>
  <a href="?action=information" id="linkInformations">Information</a> 
</div>

<main id="main">
  <div id="menubar">
    <span  id="openMenuBtn" onclick="openNav()">&#9776; Menu</span>
  </div>
  <div>

    <div id="headContainer">
        <div id="tri1">
            <h2>Tri par types : </h2>
            <div class="grid-container">
                <label>Catégorie : </label>
                <select id="typesDiv" onchange="SearchUpdate()">
                    <option>opt1...</option>
                </select>
              </div>
        </div>

        <div id="tri2">
            <h2>Recherche par mots clés : </h2>
            <div class="grid-container">
                <input type="text" id="motCle" onkeyup="SearchUpdate();">
                
            </div>
            <div class="row">
                <div class="column">
                    <h2>Suggestions : </h2>
                    <div id="suggestionsDiv" class="column">
                    </div>
                </div>
                
                <div class="column">
                    <h2>Mots clés activés : </h2>
                    <div id="activeKeyWordsDiv" class="column">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
  </div>
  <div id="mainsection">
    <div id="PathosDiv" class="column">
    </div>
    <div id="mainContainer">
    </div>
  </div>
</main>
  
<footer>
  <div class="row">
    <a> sample </a>
  </div>
</footer>

<?php echo '<script'; ?>
 src="js/navMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/accueil.js"><?php echo '</script'; ?>
>
   
</body>
</html> <?php }
}
