<?php
/* Smarty version 3.1.33, created on 2019-09-12 13:06:04
  from 'C:\wamp64\www\TLI-master\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a42bcafc360_86530690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e00659e680306a3d5a842e2e81df0354408b69b' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI-master\\templates\\register.tpl',
      1 => 1568126417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a42bcafc360_86530690 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>

	<h1>Register</h1>
	<span>or <a href="?action=login">login here</a></span>

	<form action="../lib/login/register.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="Your desired password" name="password">
		<input type="password" placeholder="Confirm your password" name="password_confirm">
		<input type="submit">

	</form>

</body>
</html>
<?php }
}
