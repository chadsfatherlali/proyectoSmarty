<?php /* Smarty version Smarty-3.1.16, created on 2014-07-05 11:43:00
         compiled from "./templates/telefonos.html" */ ?>
<?php /*%%SmartyHeaderCode:440019122535247bebb6c42-68513048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ea188d2b019e110666d58b1d7e26b5faae3851' => 
    array (
      0 => './templates/telefonos.html',
      1 => 1404553372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440019122535247bebb6c42-68513048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535247bebd3013_32700167',
  'variables' => 
  array (
    'poblaciones' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535247bebd3013_32700167')) {function content_535247bebd3013_32700167($_smarty_tpl) {?><div class="bloque bloques-telefono">	
	<ul class="telefonos">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['poblaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    		<li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['item']->value['telefono'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['pueblo'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['item']->value['telefono'];?>
</span></a></li>
  		<?php } ?>
	</ul>
</div>	<?php }} ?>
