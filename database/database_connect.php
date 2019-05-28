<?php
//connection to the database named as 'furniture_database' 
	$pdo = new PDO('mysql:dbname=furniture_database;host=localhost','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>