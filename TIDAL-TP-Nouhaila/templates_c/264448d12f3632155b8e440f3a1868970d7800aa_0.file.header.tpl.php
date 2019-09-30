<?php
/* Smarty version 3.1.33, created on 2019-09-30 12:32:36
  from 'C:\wamp64\www\TLIAL_projet_1\TIDAL-TP-Nouhaila\app\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d91f5e451a989_96525010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264448d12f3632155b8e440f3a1868970d7800aa' => 
    array (
      0 => 'C:\\wamp64\\www\\TLIAL_projet_1\\TIDAL-TP-Nouhaila\\app\\views\\header.tpl',
      1 => 1569845631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d91f5e451a989_96525010 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/public/css/style.css" rel="stylesheet" type="text/css" />
<title> Ca pique mais c'est bon ! </title>
</head>
<body>
<div id="Sidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.php" id="linkAccueil">Accueil</a>
  <a href="../Connexion.php" id="linkConnexion">Connexion</a>
  <a href="../Informations.php" id="linkInformations">Informations</a> 
  <a href="./filter">Pathologie</a> 
</div>
<div id="menubar">
    <span  id="openMenuBtn" onclick="openNav()">&#9776; Menu</span>
  </div><?php }
}
