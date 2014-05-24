<?php /* Smarty version Smarty-3.1.16, created on 2014-05-17 13:56:09
         compiled from "./templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1064589448531b10fca146b0-12540684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd701c050746a5ee258b58a5bc4dd80a198b99e51' => 
    array (
      0 => './templates/header.html',
      1 => 1400327758,
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
    'seo' => 0,
    'menuheader' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b10fca1eb62_08981071')) {function content_531b10fca1eb62_08981071($_smarty_tpl) {?><?php if (!is_callable('smarty_function_seo')) include '/opt/lampp/htdocs/libs/plugins/function.seo.php';
if (!is_callable('smarty_function_comprimirhtml')) include '/opt/lampp/htdocs/libs/plugins/function.comprimirhtml.php';
?><?php echo smarty_function_seo(array(),$_smarty_tpl);?>

<?php echo smarty_function_comprimirhtml(array('estado'=>"inicio"),$_smarty_tpl);?>

<!doctype html>
<html lang="es" ng-app="App">
<head>
	<meta charset="UTF-8" />
	<title>Asistecnic Multiservicios - <?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</title>

	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['descripcion'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['keywords'];?>
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
