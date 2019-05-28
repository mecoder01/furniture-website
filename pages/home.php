<?php
	$offerQuery = $update_table->selectAll();
	$offer_array=[
		'offerQuery' => $offerQuery
	];

	$titleName = 'Home';
	$contents = funcTemplate('../templates/home_templates.php', $offer_array);
	$class_name = "home";
?>