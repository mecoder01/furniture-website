<?php
	if (isset($_SESSION['sessAdmin']) || isset($_SESSION['sessSuperAdmin'])) {?>
	<h2><br>Now You Are In Admin Section.</h2>
	<?php }else { ?>
		<h2>LOGIN</h2>
		<form action="" method="POST">
			<label>Username:</label>
			<input type="text" name="username"><br><br>
			
			<label>password:</label>
			<input type="Password" name="password"><br><br>
			<input type="Submit" name="login" value="Login" id="regis">	
		</form>
<?php } ?>