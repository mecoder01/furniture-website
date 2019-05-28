<?php
	require '../model/deletecategory.php';

	$selectCategories = $category_table->selectAll();
	$category_array = [
		'selectCategories' => $selectCategories,
		'gen_table' => $gen_table
	];
	$titleName = 'Categories';
	$contents = funcTemplate('../templates/category_templates.php', $category_array, $selectCategories);
?>