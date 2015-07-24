<?php

	require_once ('./libs/Autoload.class.php');

	/*spl_autoload_extensions(".php,.class.php");
	set_include_path(get_include_path() . PATH_SEPARATOR . '/libs/');*/

	spl_autoload_register('autoload');

	error_reporting(E_ALL & ~E_NOTICE);


	$numA = $_POST['numA'];
	$sign = $_POST['sign'];
	$numB = $_POST['numB'];


	$obj = new Factory($sign);
	$result = $obj->factory()->getResult($numA,$numB);

	echo $result;














?>