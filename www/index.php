<?php

include_once '../config/config.php'; 			//Seting init
include_once '../config/db.php';	 			//DB init
include_once '../library/mainFunction.php'; 	//Main function

//> Определяем контроллер И обработчик-----
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
//<----------------------------------------

loadPage($smarty, $controllerName, $actionName);

//d($GLOBALS);