<?
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.comprimirhtml.php
 * Type:     function
 * Name:     comprimirhtml
 * Purpose:  compress html ouput
 * -------------------------------------------------------------
 */

function smarty_function_comprimirhtml($params) {
	function sanitize_output($buffer) {
	    $search = array(
	         "/\>[^\S ]+/s",
	         "/[^\S ]+\</s",
	         "/(\s)+/s",
	    );
	     
	    $replace = array(
	         ">",
	         "<",
	         "\\1",
	    );

	    $buffer = preg_replace($search, $replace, $buffer);

	    return ($buffer);
    }

	if($params["estado"] == "inicio") {
		ob_start("sanitize_output");
	}else{
		ob_end_flush();
	}
}
?>