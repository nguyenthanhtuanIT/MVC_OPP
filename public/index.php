<?php 
	$controller = isset($_GET['controller'])? $_GET['controller'].'login' : 'login' ;
	$action = isset($_GET['action'])?$_GET['action']: 'getUser' ;
	require_once('controller/login.php');
	$usercontroller = new $controller();
	$usercontroller->$action();
 ?>