<?php 
	if(isset($_POST['login'])) //when login form is submitted 
	{
		// getting data by connecting with database
		$adminStmt = $admin_table->select('username', $_POST['username']);
		if($adminStmt->rowCount() > 0)
		{
			// fetching the data from the database
			$user = $adminStmt->fetch();
			// verifying the passwrord
			if (password_verify($_POST['password'], $user['password'])) 
			{
				// session started for super admin to loggedin 
				$_SESSION['sessUsername'] = $user['username'];
				if($user['admin_role'] == 'super admin')
				{
					$_SESSION['sessSuperAdmin'] = $user['admin_id'];
					header('Location:furnitures');
				}
				else{
					// session used for other admin to loggedin
					$_SESSION['sessAdmin'] = $user['admin_id'];
					header('Location:furnitures');
				}
			}
			else echo 'Password failed';
		}
		else echo 'Username or password may be incorrect';
	}
?> 