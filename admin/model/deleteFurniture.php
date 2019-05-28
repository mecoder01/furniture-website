<?php 
	if(isset($_POST['deleteFurniture'])){
		$deleteFurniture = $furniture_table->deleteData('furniture_id', $_POST['furniture_id']);
		if($deleteFurniture == true){
			echo "<script>alert('Furniture has been Deleted');document.location='furnitures'</script>";
		}
	}
?>