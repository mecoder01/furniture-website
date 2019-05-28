<?php
	// connecting database as file name: database_connect.php
	require '../../database/database_connect.php'; 
	require '../../classes/FurnitureDatabaseTable.php';	
	require '../../classes/furnituretablegenerator.php';	
	require '../../functions/functionTemplate.php'; 
	$category_table = new FurnitureDatabaseTable('category_table'); //creating category table object
	$furniture_table = new FurnitureDatabaseTable('furniture_table'); //creating furniture table object
	$enquiry_table = new FurnitureDatabaseTable('enquiry_table'); //creating enquiry table object
	$admin_table = new FurnitureDatabaseTable('admin_table'); //creating admin table object
	$update_table = new FurnitureDatabaseTable('update_table'); //creating admin table object
	$gen_table = new FurnitureTableGenerator();
?>