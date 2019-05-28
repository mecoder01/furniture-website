<?php
// selectWithLimit
	$furnitureQuery = $furniture_table->selectWithLimit('view', 'enable', 10);
	$categoryQuery = $category_table->selectAll();
	$furniture_array=[
		'category_table'=> $category_table,
		'furnitureQuery'=> $furnitureQuery,
		'categoryQuery'=> $categoryQuery
	];

	$titleName = 'Furniture Details';
	$contents = funcTemplate('../templates/furniture_templates.php', $furniture_array);
	$class_name = "admin";
?>