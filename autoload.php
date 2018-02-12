<?php
DEFINE('ENVIRONMENT', 'STAGE'); //set this to 'DEV' for debug messaging, or to 'STAGE'|'LIVE' for minimum output 

//supported(PHP 5 >= 5.3.0, PHP 7)
spl_autoload_extensions(".php");

spl_autoload_register(function($className) {

	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	require_once $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR. 'classes' . DIRECTORY_SEPARATOR . $className . '.php';

});
?>