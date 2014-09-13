<?php /* Smarty version Smarty-3.1.16, created on 2014-06-21 11:45:18
         compiled from "./templates/servicios-poblaciones.html" */ ?>
<?php /*%%SmartyHeaderCode:1369531551538078aa90b1c2-10467299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc6f8ced9b8155542a3edd387c769cb757a751d' => 
    array (
      0 => './templates/servicios-poblaciones.html',
      1 => 1403343915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1369531551538078aa90b1c2-10467299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538078aa942070_87395733',
  'variables' => 
  array (
    'poblaciones' => 0,
    'item' => 0,
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538078aa942070_87395733')) {function content_538078aa942070_87395733($_smarty_tpl) {?><h3>Servicio técnico poblaciones:</h3>

<ul id="link-poblaciones">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['poblaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['pueblo']!="Otras Poblaciones"&&$_smarty_tpl->tpl_vars['item']->value['pueblo']!="Central") {?>
			<li><a href="../poblaciones/<?php echo $_smarty_tpl->tpl_vars['item']->value['pueblo'];?>
"><strong>*</strong> <?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['nombre'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['pueblo'];?>
</strong>.</a></li>
		<?php }?>
	<?php } ?>
</ul><?php }} ?>
