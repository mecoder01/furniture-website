<?php 
	require '../model/submitFurniture.php';
	$selectCategories = $category_table->selectAll();
	
	if (isset($_GET['furnitureId'])) {
			$furniture = $furniture_table->select('furniture_id', $_GET['furnitureId']);
			$fetchFurniture = $furniture->fetch();
			$furniture_array = [
				'fetchFurniture' => $fetchFurniture,
				'selectCategories' => $selectCategories
			];
		}else {
			$furniture_array = [
				'selectCategories' => $selectCategories
			];
		}

		$titleName = 'Furniture Modification';
		$contents = funcTemplate('../templates/saveFurniture_templates.php', $furniture_array);
?>