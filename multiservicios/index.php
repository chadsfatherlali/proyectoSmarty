<?php
 /**
 * Asistecnic Application
 * @package Asistecnic-application
 */

require '../libs/Smarty.class.php';

$template = (isset($_GET["template"]))
? $_GET["template"] . ".html"
: "index.html";

$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = (isset($_GET["debugger"]) && $_GET["debugger"] == 1)? true : false;
$smarty->caching = false;
//$smarty->cache_lifetime = 120;
$smarty->left_delimiter = "{{"; 
$smarty->right_delimiter = "}}";

// $smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
// $smarty->assign("FirstName",array("John","Mary","James","Henry"));
// $smarty->assign("LastName",array("Doe","Smith","Johnson","Case"));
// $smarty->assign("Class",array(array("A","B","C","D"), array("E", "F", "G", "H"),
//       array("I", "J", "K", "L"), array("M", "N", "O", "P")));

// $smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
//       array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

// $smarty->assign("option_values", array("NY","NE","KS","IA","OK","TX"));
// $smarty->assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
// $smarty->assign("option_selected", "NE");

include("configs/rutas.php");
include("configs/poblaciones.php");

$smarty->assign("poblaciones", $poblaciones);
$smarty->assign("menuheader", array_reverse($menuheader));
$smarty->assign("servicios", $servicios);
$smarty->display($template);
