<?php
/* Smarty version 3.1.33, created on 2019-09-12 16:53:41
  from 'C:\wamp64\www\TLIAL_projet_1\TLIAL_projet_1_Smarty\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a7815414044_23062944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fedc6a0d6422cf2d88b2146497d94e0c645a7f29' => 
    array (
      0 => 'C:\\wamp64\\www\\TLIAL_projet_1\\TLIAL_projet_1_Smarty\\templates\\defaut.tpl',
      1 => 1568307217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a7815414044_23062944 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h2>Tri par caractéristiques : </h2>
            <div class="grid-container" id="sortingPrice">
                <label>Catégorie : </label>
                <select>
                    <option>opt1...</option>
                </select>
              </div>
        </div>

        <div id="tri2">
            <h2>Recherche par mots clés : </h2>
            <div class="grid-container">
                <input type="text" id="motCle" onkeyup="keyWordSearchUpdate();">
                
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
