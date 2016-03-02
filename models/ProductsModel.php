<?php 
/**
 * Model for prodacts table
 * 
 */
 
 /**
  * Получаем последние добавленные товары
  * 
  * @param integer $limit Кол товаров для выводв
  * @return array масив товаров
  */
  function getLastProducts($limit = null) {
  	$sql = 'SELECT * 
 			FROM products 
 			ORDER BY id DESC';
 	if($limit) {
 		$sql .= " LIMIT $limit";
 	}		
 	$rs = mysql_query($sql);
 	return createSmartyRsArray($rs);
  } 
