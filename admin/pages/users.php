<?php 
	require '../model/deleteUser.php';
	$selectUsers = $admin_table->selectAll();
	$user_array = [
		'gen_table' => $gen_table,
		'selectUsers' => $selectUsers
	];

	$titleName = 'User Display';
	$contents = funcTemplate('../templates/users_templates.php', $user_array);
?>