<?php /* Smarty version Smarty-3.1.16, created on 2014-06-28 13:08:48
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1809792376531afe53a43825-66786859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386e744df7e9238f7ec52b4ceb835215e0b2a942' => 
    array (
      0 => './templates/index.html',
      1 => 1403953645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809792376531afe53a43825-66786859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531afe53b0b701_94046278',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531afe53b0b701_94046278')) {function content_531afe53b0b701_94046278($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido">
	<h1>Servicio técnico Madrid, Toledo y poblaciones.</h1>

	<article>
		<p><strong>Asistecnic - Multiservicios</strong>: ofrecemos servicio de mantenimiento, reparación, y restauración tanto de electrodmésticos, equipos insdustriales, aparatología de rehabilitación.</p>
		<p>Ofrecemos servcios de urgencias las 24 horas, nuestro servicio es profesional y garantizado, nuestros precios son los más competitivos.</p>
	</article>

	<?php echo $_smarty_tpl->getSubTemplate ("servicios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
