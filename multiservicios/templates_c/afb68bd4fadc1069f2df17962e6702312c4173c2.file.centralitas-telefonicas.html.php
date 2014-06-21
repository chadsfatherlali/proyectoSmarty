<?php /* Smarty version Smarty-3.1.16, created on 2014-05-24 13:31:48
         compiled from "./templates/servicio-tecnico/centralitas-telefonicas.html" */ ?>
<?php /*%%SmartyHeaderCode:29876727353808324560911-17965219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb68bd4fadc1069f2df17962e6702312c4173c2' => 
    array (
      0 => './templates/servicio-tecnico/centralitas-telefonicas.html',
      1 => 1400930589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29876727353808324560911-17965219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53808324631bc3_23895117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53808324631bc3_23895117')) {function content_53808324631bc3_23895117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido">
	<h1><?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['title'];?>
.</h1>
	
	<div id="imgcontent">
		<img src="../assets/images/<?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['img'];?>
">
	</div>

	<section>
		<article>
			<p>Una buena centralita telefónica puede llegar a ser la columna vertebral de su empresa. Una conexión correcta asegura que todas las llamadas entrantes y salientes llegan a la persona correcta. También hace que todo sea más llevadero durante los períodos con más trabajo, crece con su negocio y le ofrece características técnicas que mejoran el sistema telefónico.</p>
			<p>La mejor centralita para regular el tráfico telefónico en una empresa específica lo puede determinar un número de factores, como el tamaño del negocio y el número de estaciones de trabajo. Uno de los modelos a continuación ofrece la ventaja oculta perfecta para las comunicaciones de su negocio.</p>
		</article>
	</section>
	
	<?php echo $_smarty_tpl->getSubTemplate ("servicios-poblaciones.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
