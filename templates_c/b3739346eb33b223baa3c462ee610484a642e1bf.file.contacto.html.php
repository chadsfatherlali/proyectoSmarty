<?php /* Smarty version Smarty-3.1.16, created on 2014-07-12 13:46:52
         compiled from "./templates/contacto.html" */ ?>
<?php /*%%SmartyHeaderCode:1786271405336ab3f5d9802-58971219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3739346eb33b223baa3c462ee610484a642e1bf' => 
    array (
      0 => './templates/contacto.html',
      1 => 1405165585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1786271405336ab3f5d9802-58971219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5336ab3f786533_91668132',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336ab3f786533_91668132')) {function content_5336ab3f786533_91668132($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("telefonos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="bloque bloque-contenido quienes-contacto">
	<h1>Formulario de contacto por favor rellene los campos y nosotros nos pondremos en contacto con usted.</h1>
	<form id="formularioDeContacto" class="formulario-de-contacto" name="formContacto" ng-submit="submit()">
		<input type="text" name="nombre" placeholder="Inserte su nombre" ng-model="user.nombre" solotexto />
		<input type="text" name="telefono" placeholder="Inserte su télefono de contacto" ng-model="user.telefono" telefono />
		<input type="text" name="email" placeholder="Correo electrónico" ng-model="user.email" email />
		<textarea name="mensaje" placeholder="Escriba su mensaje..." ng-model="user.mensaje" vacio ></textarea>
		<input type="submit" value="Enviar" ng-click="enviarInfo($event)"/>
	</form>
	
	<p class="highligths">* Si buscas un servicio en concreto mira todos nuestro servicios disponibles a continuación.</p>

	<?php echo $_smarty_tpl->getSubTemplate ("servicios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
