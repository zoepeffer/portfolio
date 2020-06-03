<?php
require_once("inc/functions/string_functions.inc.php");
require_once("inc/functions/date_time_functions.inc.php");


require_once("inc/controller/controller.php");


if(!isset($_GET["action"]))
{
	$_GET["action"] = "about";
}

$controller = new Seitensteuerung(); 
echo $controller->selectPage($_GET["action"]);


?>