<?php
/**
 * Основные функции
 */
//-----------------------------------------------------------------------------------------
/**
 * Фрмирование запрашиваемой ст
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработчика
 */
function loadPage($smarty, $controllerName, $actionName = 'index') 
{
	include_once PathPrefix . $controllerName . PathPostfix;

	$function = $actionName . 'Action'; 
	$function($smarty);
}

/**
 * template load
 * 
 * @param object $smarty обект шаблонизатора
 * @param string $templateName название файла шаблона
 */ 
function loadTemplate($smarty, $templateName) 
{
	$smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки останавливает работу скрипта выводя значение переменной $value
 * 
 * @param variant $value переменная для вывода ее на ст
 */
function d($value = null, $die = 1) 
{
	echo 'Debug: <br><pre>';
	print_r($value);
	echo '</pre>';

	if ($die) die;
}

/**
 * Перобразовует результат $rs в array
 * 
 * @param resurse $re шдентификатор выполненного запроса
 * @return array масив данных
 */
function createSmartyRsArray($rs) {
	if(!$rs) return false;

	$smartyRs = array();
	while ($row = mysql_fetch_assoc($rs)) {
		$smartyRs[] = $row;
	}
	return $smartyRs;
}
