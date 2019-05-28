<?php 
// requiring the deleteUpdate file for delete features
	require '../model/deleteUpdate.php';
	// selecting data of database tables
	$selectUpdates = $update_table->selectAll();
	// creating an array for data pass
	$update_array = [
		'gen_table' => $gen_table,
		'selectUpdates' => $selectUpdates
	];
	// setting the title name 
	$titleName = 'Special Offer Updates';
	// providing the path for contents page
	$contents = funcTemplate('../templates/updates_templates.php', $update_array);
?>