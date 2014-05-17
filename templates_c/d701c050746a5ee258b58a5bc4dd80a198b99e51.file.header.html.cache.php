<?php /* Smarty version Smarty-3.1.16, created on 2014-03-22 13:55:52
         compiled from "./templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1423055451532d88580c3035-96097866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd701c050746a5ee258b58a5bc4dd80a198b99e51' => 
    array (
      0 => './templates/header.html',
      1 => 1395487387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423055451532d88580c3035-96097866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuheader' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532d8858104230_53374519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532d8858104230_53374519')) {function content_532d8858104230_53374519($_smarty_tpl) {?><header>
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
</header><?php }} ?>
