<?php
/**
 * Модель для работы с катигориями
 * 
 */

/**
 * Получить дочерние категории для $catId
 * 
 * @param integer $catId ID категории
 * @return array масив дочерних категорий
 */
function getChildrenForCat($catId) {
	$sql = 'SELECT * 
 			FROM categories 
 			WHERE 
 			parent_id =' . $catId;

 	$rs = mysql_query($sql);
 	return createSmartyRsArray($rs);		
}

/**
 * Получить главныые категории с подкатегориями
 * 
 * @return array массив катигорий
 */
 function getAllMainCatsWithChildren() {
 	$sql = 'SELECT * 
 			FROM categories 
 			WHERE parent_id = 0';

 	$rs = mysql_query($sql);

 	$smartyRs = array();
 	while($row = mysql_fetch_assoc($rs)) {
 		$rsChildren = getChildrenForCat($row['id']);

 		if($rsChildren) {
 			$row['children'] = $rsChildren;
 		}
 		$smartyRs[] = $row;
 	}
 	return $smartyRs;
 } 

