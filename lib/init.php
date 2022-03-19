<?php
include_once("dbi.php");
session_start();
$filename=basename($_SERVER['PHP_SELF'],".php");

$controller='controller/'.$filename.'_controller.php';
if(file_exists($controller))
{
	include_once("$controller");
}

?>
