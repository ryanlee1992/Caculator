<?php
	// require_once ('./libs/Caculator.class.php');
	// require_once ('./libs/Factory.class.php');
	// require_once ('./libs/Add.class.php');
	// require_once ('./libs/Minus.class.php');
	// require_once ('./libs/Multiply.class.php');
	// require_once ('./libs/Divide.class.php');
	require_once ('./libs/Autoload.class.php');

	spl_autoload_register('autoload');

	error_reporting(E_ALL & ~E_NOTICE);


	$numA = $_POST['numA'];
	$sign = $_POST['sign'];
	$numB = $_POST['numB'];


	$obj = new Factory($sign);
	$result = $obj->factory()->getResult($numA,$numB);

	// echo $numA;
	// echo $numB;
	// echo $sign;
	echo $result;














?>