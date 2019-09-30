<?php
/* Smarty version 3.1.33, created on 2019-09-30 15:28:37
  from 'C:\wamp64\www\tlial_test\TLIAL_projet_1\TLIAL_projet_1_Smarty\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d921f25bbcee4_88493949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a3112c801ed5259bfe1a3df97f0dda2d48684f4' => 
    array (
      0 => 'C:\\wamp64\\www\\tlial_test\\TLIAL_projet_1\\TLIAL_projet_1_Smarty\\templates\\connexion.tpl',
      1 => 1569854686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d921f25bbcee4_88493949 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>
	
	<h1>Login</h1>
	<span>or <a href="?action=register">register here</a></span>

	<form action="../lib/login/login.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="submit">

	</form>

</body>
</html>
<?php }
}
