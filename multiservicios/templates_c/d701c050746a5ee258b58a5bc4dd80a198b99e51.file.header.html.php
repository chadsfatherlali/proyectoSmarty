<?php /* Smarty version Smarty-3.1.16, created on 2014-05-24 13:21:46
         compiled from "./templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1064589448531b10fca146b0-12540684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd701c050746a5ee258b58a5bc4dd80a198b99e51' => 
    array (
      0 => './templates/header.html',
      1 => 1400930495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064589448531b10fca146b0-12540684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531b10fca1eb62_08981071',
  'variables' => 
  array (
    'servicios' => 0,
    'menuheader' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b10fca1eb62_08981071')) {function content_531b10fca1eb62_08981071($_smarty_tpl) {?><!doctype html>
<html lang="es" ng-app="App">
<head>
	<meta charset="UTF-8" />
	<title>Asistecnic Multiservicios - <?php echo $_smarty_tpl->tpl_vars['servicios']->value[(($tmp = @$_GET['template'])===null||$tmp==='' ? 'index' : $tmp)]['title'];?>
</title>

	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['servicios']->value[(($tmp = @$_GET['template'])===null||$tmp==='' ? 'index' : $tmp)]['descripcion'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['servicios']->value[(($tmp = @$_GET['template'])===null||$tmp==='' ? 'index' : $tmp)]['keywords'];?>
" />

	<link rel="stylesheet" type="text/css" href="../assets/stylesheets/screen.css">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
</head>
<body ng-controller="controladorPrincipal">

<header>
	<a href="/">
		<img id="logo" src="../assets/images/logo.jpg" alt="Asistecnic - multiservicios" />
	</a>
	<nav>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuheader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</a>
  		<?php } ?>
	</nav>
</header>

<div class="wrapper"><?php }} ?>
