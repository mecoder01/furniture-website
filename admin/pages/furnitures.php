<?php 
// requiring the deleteUpdate file for delete features
	require '../model/deleteFurniture.php';
	// joining the data from the database table
	$selectFurnitures = $furniture_table->joiningId('category_table', 'category_id');
	// creating an array for data pass
	$furniture_array = [
		'selectFurnitures' => $selectFurnitures,
		'gen_table' => $gen_table
	];
	// setting the title name 
	$titleName = 'Furnitures';
	// providing the path for contents page
	$contents = funcTemplate('../templates/furniture_templates.php', $furniture_array);
?>