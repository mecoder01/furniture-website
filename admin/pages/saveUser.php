<?php 
	require '../model/submitUser.php';
	if (isset($_GET['adminId'])) {
		$admin = $admin_table->select('admin_id', $_GET['adminId']);
		$fetchAdmin = $admin->fetch();
		$admin_array = [
			'fetchAdmin' => $fetchAdmin
		];
	}else{
		$admin_array = [];
	}
	$titleName = 'User Modification';
	$contents = funcTemplate('../templates/saveUser_templates.php', $admin_array);
?>