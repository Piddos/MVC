<?php

	//session_start
	session_start();
	// Function autoload
	function __autoload($class_name){
		if(file_exists(strtolower($class_name).".class.php")){
			require_once strtolower($class_name).".class.php";
		} 
		if(file_exists(strtolower($class_name).".php")){
			require_once strtolower($class_name).".php";
		} 
		if(file_exists(strtolower($class_name).".controller.php")){
			require_once strtolower($class_name).".controller.php";
		} 
	}
	
	// Include config and file
	include "config/config.php";
	// Use  namespace
	use \controllers;
	// Check some condition
	if(count($_GET)==0){
		header("Location: ".PATH."/index.php?controller=user&action=login");
	} 
	// Code
	$controller = "controllers\\{$_GET['controller']}";
	$control = new $controller();
	//
	if(isset($_GET['result'])){
		$control->resolve_result($_GET['result']);
	}
	$control->resolve_action($_GET['action']);

	session_commit();

?>	



