<?php /* Smarty version Smarty-3.1.16, created on 2014-07-12 11:22:18
         compiled from "./templates/quienes-somos.html" */ ?>
<?php /*%%SmartyHeaderCode:6200715055336abc4a35271-84741855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58f27f1749b550b42479508c3ed03a47783c74d' => 
    array (
      0 => './templates/quienes-somos.html',
      1 => 1403953688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6200715055336abc4a35271-84741855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5336abc4b7ea61_05291991',
  'variables' => 
  array (
    'servicios' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336abc4b7ea61_05291991')) {function content_5336abc4b7ea61_05291991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido quienes-somos">
	<article>
		<h1>Quienes somos</h1>
		
		<img src="../assets/images/tecnico.jpg" alt="Servicio técnico Madrid, Tolefo y poblaciones" title="Servicio técnico Madrid, Tolefo y poblaciones" />
		<p><strong>Asistecnic - Multiservicios</strong>: Es una empresa especializada en prestar servicio de reparaciones, mantenimiento en diversos campos técnicos de la vida cotidiana tanto en el hogar como en el trabajo.</p>
		<p>Nuestro servicios sumamente variados no permite brindar un servico único y exclusivo a todos nuestros clientes de la mejor forma posible con gente cualificada y devidamente entreda en su campo.</p>
		<p>Los técnicos de asistecnic, están dispuestos a dar un servico personalizado dependiendo del tipo de actividad a desarrollar, de una manera profesional y ŕapida para el cumplimiento de su tarea.</p>
		<p>Nuestro equipo brinda servicio a domicilio y servicio especializado las 24 horas los 7 días de la semana, nuestro servicio a domicilio esta siempre a su dispoción para su comodidad en donde nuestros técnicos evaluaran la reparación a ser posible realizarla en lugar mismo de la incidencia caso contrario procederán al traslado a nuestro taller centralizado para poder resolver su problema técnico.</p>
		<p>Una ves detectado el problema nuestros técnicos procederan a comunicarse con usted informandole detalladamente del proceso a realizar, del tiempo estimado en la reparación y de los recursos necesarios para llevar a cabo el trabajo también a modo de presupuesto el informe del coste del mismo.</p>
		<p>Dentro de nuestro servicios especializados disponemos de:</p>
	</article>
	
	<ul>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">* Servicio técnico <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</strong>.</a></li>
			<?php }?>
		<?php } ?>
	</ul>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
