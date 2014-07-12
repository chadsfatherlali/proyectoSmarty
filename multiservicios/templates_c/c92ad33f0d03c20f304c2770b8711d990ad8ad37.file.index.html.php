<?php /* Smarty version Smarty-3.1.16, created on 2014-06-28 12:49:38
         compiled from "./templates/poblaciones/index.html" */ ?>
<?php /*%%SmartyHeaderCode:34733765453a55c5cda44b7-12639211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c92ad33f0d03c20f304c2770b8711d990ad8ad37' => 
    array (
      0 => './templates/poblaciones/index.html',
      1 => 1403952576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34733765453a55c5cda44b7-12639211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a55c5cda6a63_01054779',
  'variables' => 
  array (
    'poblaciones' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a55c5cda6a63_01054779')) {function content_53a55c5cda6a63_01054779($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('arg'=>"poblaciones"), 0);?>


<div class="bloque bloque-contenido">
	<h1>Servicio técnico <?php echo $_smarty_tpl->tpl_vars['poblaciones']->value[$_GET['template']]['pueblo'];?>
, telf: <?php echo $_smarty_tpl->tpl_vars['poblaciones']->value[$_GET['template']]['telefono'];?>
</h1>
	
	<div id="mapa" attr-pueblo="<?php echo $_smarty_tpl->tpl_vars['poblaciones']->value[$_GET['template']]['pueblo'];?>
" mapa></div>
	
	<p>Prestamos servicio técnico, reparación en la población de <strong><?php echo $_smarty_tpl->tpl_vars['poblaciones']->value[$_GET['template']]['pueblo'];?>
</strong> nos desplazamos para su mayor comidad, atendemos las 24 Horas y servicio de urgencias.</p>
	
	<?php echo $_smarty_tpl->getSubTemplate ("servicios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
