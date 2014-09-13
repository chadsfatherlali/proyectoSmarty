<?php /* Smarty version Smarty-3.1.16, created on 2014-05-24 13:30:09
         compiled from "./templates/servicios/centralitas-telefonicas.html" */ ?>
<?php /*%%SmartyHeaderCode:10003197585336b37e158943-65277227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67d10162dd7fc38e389743ff595bf59cbb019250' => 
    array (
      0 => './templates/servicios/centralitas-telefonicas.html',
      1 => 1400930589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10003197585336b37e158943-65277227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5336b37e294c12_73104830',
  'variables' => 
  array (
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336b37e294c12_73104830')) {function content_5336b37e294c12_73104830($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
