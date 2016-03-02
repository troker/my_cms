<?php

/**
 * CategoryController.php
 * 
 * Контроллер страницы категорий
 */  

//include model
include_once '../models/CatigoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Creating category page
 * 
 * @param object $smarty
 */
function indexAction($smarty) {
	$catId = isset($_GET['id']) ? $_GET['id'] : null;
	if(!$catId) exit();

	$rsCategory = getCatById($catId);
}