<?php
/**
* Контроллер главной ст
*
*/

include_once '../models/CatigoriesModel.php';
include_once '../models/ProductsModel.php';

//-----------------------------------------------------------------------------------------
function testAction() {
	echo 'IndexController.php -> testAction';
}

/**
 * Formation the main of page
 * 
 * @param object $smarty template
 */
function indexAction($smarty) {

	$rsCategries = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts(16);

	$smarty->assign('pageTitle', 'The main page!!!');
	$smarty->assign('rsCategries', $rsCategries);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
}