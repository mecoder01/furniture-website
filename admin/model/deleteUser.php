<?php 
	if(isset($_POST['deleteUser'])){
		$deleteUser = $admin_table->deleteData('admin_id', $_POST['admin_id']);
		if($deleteUser == true){
			echo "<script>alert('User has been Deleted');document.location='users'</script>";
		}
	}
?>