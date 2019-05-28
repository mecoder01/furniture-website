<section class="right">		
	<h2>Users</h2>
	<?php if(isset($_SESSION['sessSuperAdmin'])){ ?>
		<a class="new" href="saveUser">Add new User</a>
	<?php } ?>
	<?php
		$gen_table->setTableHeadings(['S.N.', 'Full Name', 'Email', 'Username' ,'Role', 'Action']);
		$serialNum = 1;
		foreach ($selectUsers as $selectUsersRow) {
			if(isset($_SESSION['sessSuperAdmin'])){
				$userAction = '<a href="saveUser&adminId='. $selectUsersRow['admin_id']. '">Edit</a>|
				<form method="POST" action="">
				<input type="hidden" name="admin_id" value="'.$selectUsersRow['admin_id'] . '" />
				<input type="submit" name="deleteUser" value="Delete" />
				</form>';
			}else{
				$userAction = "Cannot be edited";
			}

			$gen_table->addTableRow([
				$serialNum++, 
				$selectUsersRow['full_name'],
				$selectUsersRow['email'],
				$selectUsersRow['username'],
				$selectUsersRow['admin_role'],
				$userAction
			]);
		}
		$gen_table->getTable();
	?>
</section>