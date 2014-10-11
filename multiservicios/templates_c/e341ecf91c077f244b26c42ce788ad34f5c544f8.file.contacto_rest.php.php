<?php /* Smarty version Smarty-3.1.16, created on 2014-09-13 12:28:41
         compiled from "./templates/rest/contacto_rest.php" */ ?>
<?php /*%%SmartyHeaderCode:93702021541418edd684c3-03373796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e341ecf91c077f244b26c42ce788ad34f5c544f8' => 
    array (
      0 => './templates/rest/contacto_rest.php',
      1 => 1410604108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93702021541418edd684c3-03373796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541418edef0653_38129735',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541418edef0653_38129735')) {function content_541418edef0653_38129735($_smarty_tpl) {?><?php if (!is_callable('smarty_function_sendmail')) include '/opt/lampp/htdocs/libs/plugins/function.sendmail.php';
?><?php echo smarty_function_sendmail(array('datos'=>$_GET['datos']),$_smarty_tpl);?>
<?php }} ?>
