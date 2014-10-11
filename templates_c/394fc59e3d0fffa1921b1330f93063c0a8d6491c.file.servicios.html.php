<?php /* Smarty version Smarty-3.1.16, created on 2014-06-28 12:58:12
         compiled from "./templates/servicios.html" */ ?>
<?php /*%%SmartyHeaderCode:7338951195336b5ce3ce267-74416467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '394fc59e3d0fffa1921b1330f93063c0a8d6491c' => 
    array (
      0 => './templates/servicios.html',
      1 => 1403953088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7338951195336b5ce3ce267-74416467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5336b5ce402a85_27372087',
  'variables' => 
  array (
    'servicios' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336b5ce402a85_27372087')) {function content_5336b5ce402a85_27372087($_smarty_tpl) {?><input type="text" id="buscador" class="inputs-text" name="buscador" ng-change="buscar(abuscar)" ng-model="abuscar" placeholder="BUSCA AQUÍ TU SERVICIO..."/>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?>
		<a class="servicio" href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" attr-busqueda="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value['nombre'], 'UTF-8');?>
" busqueda>
			<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h2>
			<img src="../assets/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="Servicio técnico <?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" title="Servicio técnico <?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
"/>
			<article>
				<p><?php echo $_smarty_tpl->tpl_vars['item']->value['resumen'];?>
</p>
			</article>
		</a>
	<?php }?>
<?php } ?><?php }} ?>
