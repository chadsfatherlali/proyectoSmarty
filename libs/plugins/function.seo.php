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
	include("../multiservicios/configs/seo.php");
    $seoreturn = (isset($_GET["template"]) && !empty($_GET["template"]))
    ? @$seo[$_GET["template"]]
    : $seo["index"];

    $seoreturn = (!empty($seoreturn))? $seoreturn : $seo["index"];

    $smarty->assign("seo", $seoreturn);
}
?>