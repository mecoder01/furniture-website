<?php 
	if(isset($_POST['submit'])){
		extract($_POST);
		unset($_POST['submit']);
		$field_empty = '';
		if ($category_name == '') 
			$field_empty .= "<script>alert('Fields cannot be empty');</script>";
		
		if(empty($field_empty)){
			$categoryArray = [
				'category_id' => $_POST['category_id'],
				'category_name' => $_POST['category_name']
			];
			$saveCategory = $category_table->saveData($categoryArray, 'category_id');
			if($saveCategory == true){
				echo "<script>alert('Category has been saved.');document.location='categories';</script>";
			}else{
				echo "<script>alert('Error: Category Not Saved');document.location='categories';</script>";
			}
		}else{
			echo $field_empty;
		}
	}
?>