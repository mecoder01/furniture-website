<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		unset($_POST['submit']);
		$field_empty = "";
		
		if ($full_name == "" || $email == "" || $username == "" || $password == "")
			$field_empty .= "<script>alert('Fields cannot be empty');</script>";	

		if (empty($field_empty)) {
			$adminArray = [
				'admin_id' => $_POST['admin_id'],
				'full_name' => $_POST['full_name'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT),
				'admin_role' => $_POST['admin_role']
			];
			$saveUser = $admin_table->saveData($adminArray, 'admin_id');
			if ($saveUser == true) {
				echo "<script>alert('User has been saved.');document.location='users';</script>";
			}else{
				echo "<script>alert('Error: User Not Saved');document.location='users';</script>";
			}
		}else{
			echo $field_empty;
		}
	}
?>