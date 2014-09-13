<?php /* Smarty version Smarty-3.1.16, created on 2014-06-28 13:11:49
         compiled from "./templates/servicio-tecnico/antenistas.html" */ ?>
<?php /*%%SmartyHeaderCode:7495618853a55635812be2-61002595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4721bf29ee6378313ca9c94bdac1a581bdc84901' => 
    array (
      0 => './templates/servicio-tecnico/antenistas.html',
      1 => 1403953898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7495618853a55635812be2-61002595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a55635a04c67_78435256',
  'variables' => 
  array (
    'servicios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a55635a04c67_78435256')) {function content_53a55635a04c67_78435256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido">
	<h1><?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['title'];?>
.</h1>
	
	<div id="imgcontent">
		<img src="../assets/images/<?php echo $_smarty_tpl->tpl_vars['servicios']->value[$_GET['template']]['img'];?>
">
	</div>

	<section>
		<article>
			<p>Nuestro personal técnico ofrece un servicio técnico profesional con antenistas cualificados y autorizados.</p>
			<p>Con cualquier servicio efectuamos un mantenimiento preventivo para evitar cualquier avería o reparación posterior.</p>
			<p>Reparamos, instalamos y orientamos todo tipo de antenas de televisión:</p>

			<ol>
				<li><span>Individuales.</span></li>
				<li><span>Colectivas.</span></li>
				<li><span>Parabólicas.</span></li>
				<li><span>Vía satélite.</span></li>
				<li><span>Cable.</span></li>
				<li><span>TDT (televisión digital terrestre).</span></li>
				<li><span>Motorizadas.</span></li>
			</ol>
		</article>
	</section>
	
	<?php echo $_smarty_tpl->getSubTemplate ("servicios-poblaciones.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
