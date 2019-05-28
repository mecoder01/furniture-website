<?php 
	require '../model/submitUpdate.php';
	if (isset($_GET['updateId'])) {
		$update = $update_table->select('update_id', $_GET['updateId']);
		$fetchUpdate = $update->fetch();
		$offer_array = [
			'fetchUpdate' => $fetchUpdate
		];
	}else{
		$offer_array = [];
	}
	$titleName = 'Offer Modification';
	$contents = funcTemplate('../templates/saveUpdate_templates.php', $offer_array);
?>