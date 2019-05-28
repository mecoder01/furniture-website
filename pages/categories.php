<?php
	$furnitureQuery = $furniture_table->select('category_id', $_GET['category_id']);
	$categoryQuery = $category_table->selectAll();

	$category_array=[
		'category_table'=> $category_table,
		'furnitureQuery'=> $furnitureQuery,
		'categoryQuery'=>$categoryQuery
	];

	$titleName = 'Category';
	$contents = funcTemplate('../templates/category_templates.php', $category_array);
	$class_name = "admin";
?>