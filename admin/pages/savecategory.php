<?php 
	require '../model/submitcategory.php';
	if(isset($_GET['categoryId'])){
		$category = $category_table->select('category_id', $_GET['categoryId']);
		$fetchCategory = $category->fetch();
		$category_array = [
			'fetchCategory'=> $fetchCategory
 		];
	}else{
		$category_array = [];
	}

	$titleName = 'Category Modification';
	$contents = funcTemplate('../templates/savecategory_templates.php', $category_array);
?>