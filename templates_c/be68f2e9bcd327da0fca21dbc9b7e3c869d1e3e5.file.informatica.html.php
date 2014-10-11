<?php /* Smarty version Smarty-3.1.16, created on 2014-06-21 11:52:04
         compiled from "./templates/servicio-tecnico/informatica.html" */ ?>
<?php /*%%SmartyHeaderCode:1267072472538089cdeda545-52767778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be68f2e9bcd327da0fca21dbc9b7e3c869d1e3e5' => 
    array (
      0 => './templates/servicio-tecnico/informatica.html',
      1 => 1403344322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267072472538089cdeda545-52767778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538089ce0d7479_70109708',
  'variables' => 
  array (
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538089ce0d7479_70109708')) {function content_538089ce0d7479_70109708($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido">
	<h1><?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['title'];?>
.</h1>
	
	<div id="imgcontent">
		<img src="../assets/images/<?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['img'];?>
">
	</div>

	<section>
		<article>
			<p>Nuestro servicio técnico informático, presta un servicio profesional y adaptado a sus necesidades.</p>
			<p>El servicio técnico prestado por nuestros profesionales, es de los más competitivos del mercado, ofreciendo a nuestros clientes una asistencia única y personalizada, dentro de nuestro servicio técnico ofrecemos:</p>
			
			<ol>
				<li><span>Mantenimiento de ordenador portátiles y de sobremesa.</span></li>
				<li><span>Recuperación de datos.</span></li>
				<li><span>Formateo de discos duros.</span></li>
				<li><span>Limpieza de virus, spam y troyanos.</span></li>
				<li><span>Instalación de software.</span></li>
				<li><span>Realizamos y mantenemos sitios web.</span></li>
			</ol>
		</article>
	</section>
	
	<?php echo $_smarty_tpl->getSubTemplate ("servicios-poblaciones.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
