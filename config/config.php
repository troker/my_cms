<?php
/**
* Файл настроек
*
*/
//-----------------------------------------------------------------------------------------
//> Константы для обращения к контроллеру-----------------------
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<-------------------------------------------------------------

//> Используем шаблонизатор-------------------------------------
$template = 'default';

//path to template filles (*.tpl)
define('TemplatePrefix', '../vieus/' . $template . '/');
define('TemplatePostfix', '.tpl');

//path to web template fille
define('TemplateWebPath', 'templates/' . $template . '/');
//<--------------------------------------------------------------

//> Smarty init--------------------------------------------------
// put full path to Smarty.class.php
require('../library/smarty-3.1.29/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/smarty-3.1.29/configs/');

$smarty->assign('temlateWebPath', TemplateWebPath);
//<---------------------------------------------------------------
