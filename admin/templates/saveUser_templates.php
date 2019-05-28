<section class="right">
	<h2>Save User</h2>
	<form action="" method="POST">
		<input type="hidden" name="admin_id" value="<?php if(isset($_GET['adminId'])) echo $fetchAdmin['admin_id']; ?>" />

		<label>Full Name:</label>
		<input type="text" name="full_name" value="<?php if(isset($_GET['adminId'])) echo $fetchAdmin['full_name']; ?>" />

		<label>Email:</label>
		<input type="email" name="email" value="<?php if(isset($_GET['adminId'])) echo $fetchAdmin['email'] ?>" />

		<label>Username:</label>
		<input type="text" name="username" value="<?php if(isset($_GET['adminId'])) echo $fetchAdmin['username'] ?>" />	

		<label>Password:</label>
		<input type="password" name="password" />

		<label>Admin role:</label>
		<select name="admin_role">
			<option value="super admin">Super Admin</option>
			<option value="admin">Admin</option>
		</select>
		
		<input type="submit" name="submit" value="Save User" />
		
	</form>
	
</section>