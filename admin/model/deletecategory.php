<?php 
	if(isset($_POST['deleteCategory'])){
		$deleteCategory = $category_table->deleteData('category_id', $_POST['category_id']);
		if($deleteCategory == true){
			echo "<script>alert('Category Deleted');document.location='categories'</script>";
		}
	}
?>