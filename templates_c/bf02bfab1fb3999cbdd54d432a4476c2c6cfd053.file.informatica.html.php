<?php /* Smarty version Smarty-3.1.16, created on 2014-05-24 13:29:40
         compiled from "./templates/servicios/informatica.html" */ ?>
<?php /*%%SmartyHeaderCode:1643189788538082a4c9bf84-12590509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf02bfab1fb3999cbdd54d432a4476c2c6cfd053' => 
    array (
      0 => './templates/servicios/informatica.html',
      1 => 1400930973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1643189788538082a4c9bf84-12590509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538082a4d6c839_87989565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538082a4d6c839_87989565')) {function content_538082a4d6c839_87989565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
