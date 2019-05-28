<?php 
	if(isset($_GET['updateId'])){
		$deleteUpdate = $update_table->deleteData('update_id', $_GET['updateId']);
		if($deleteUpdate == true){
			echo "<script>alert('Offer has been Deleted');document.location='update'</script>";
		}
	}
?>