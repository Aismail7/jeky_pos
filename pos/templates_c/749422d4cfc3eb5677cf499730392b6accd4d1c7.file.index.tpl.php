<?php /* Smarty version Smarty-3.1.11, created on 2017-07-28 22:11:34
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2005978d2f2b44744-17354765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1501254680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005978d2f2b44744-17354765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5978d2f2c23711_32989013',
  'variables' => 
  array (
    'code' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5978d2f2c23711_32989013')) {function content_5978d2f2c23711_32989013($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<title>JEJU POS | Jeky Jumansyah Point Of Sales</title>
	<link rel="stylesheet" type="text/css" href="design/css/login.css" media="screen" />
</head>

<body>
	<div id="login">
		<?php if ($_smarty_tpl->tpl_vars['code']->value=='1'){?>
			<span style='color: red; align='center''>Username dan Password tidak ditemukan.</span>
		<?php }?>
		<h1>LOGIN USER</h1>
		<form method="POST" action="index.php?module=login&act=submit">
		<fieldset id="inputs">
			<input id="username" type="text" name="userName" placeholder="Username" autofocus required>
			<input id="password" type="password" name="userPassword" placeholder="Password" required>
		</fieldset>
		<fieldset id="actions">
			<input type="submit" id="submit" value="Log in">
		</fieldset>
		</form>
	</div>
	<p align="center">Copyright @ Jeky Jumansyah Point of Sale</p>
	<p align="center"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 &copy; pandawascript.com</p>

</body>
</html><?php }} ?>