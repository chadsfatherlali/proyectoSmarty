<?
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.seo.php
 * Type:     function
 * Name:     seo
 * Purpose:  assign a value to a template variable for seo
 * -------------------------------------------------------------
 */

function smarty_function_seo($params, $smarty) {
	include("../multiservicios/configs/rutas.php");

    $seoreturn = (isset($_GET["template"]) && !empty($_GET["template"]))
    ? @$servicios[$_GET["template"]]
    : $servicios["index"];

    $seoreturn = (!empty($seoreturn))? $seoreturn : $servicios["index"];

    $smarty->assign("seo", $seoreturn);
}
?>