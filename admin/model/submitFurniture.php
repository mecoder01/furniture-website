<?php 
// extracting the value after submitting the data entry
	if (isset($_POST['submit'])){
		extract($_POST); 
		unset($_POST['submit']); // the submit field value is unset
		$field_empty = ""; //initializing the value for field_empty variable
// checking and alerting the user if they input empty value
		if ($furniture_name == "" || $description == "" || $furniture_price == ""  ) 
			$field_empty .= "<script>alert('Fields cannot be empty');</script>";
		if (empty($field_empty)) {	
			$imgTemp = $_FILES['images']['imgName'];
			// array for furniture attribute
			$furnitureArray = [
				'furniture_id' => $_POST['furniture_id'],
				'furniture_name' => $_POST['furniture_name'],
				'description' => $_POST['description'],
				'furniture_price' => $_POST['furniture_price'],
				'view' => $_POST['view'],
				'furniture_details' => $_POST['furniture_details'],
				'category_id' => $_POST['category_id'] ,
				'images' => $imgTemp
			];
			// getting the data from the saveData database
			$saveFurniture = $furniture_table->saveData($furnitureArray, 'furniture_id');

			$imgDestination = '../../images/furniture/' . basename($_FILES['images']['imgName']);
			if (!file_exists($imgDestination)) {
				$tempName = $_FILES['images']['temp_img'];
				if (move_uploaded_file($tempName, $imgDestination)) {
					// boolean testing through conditional statement
					if ($saveFurniture == true){
						// alerting the user by prompting the message at top of the page
						echo "<script>alert('Furniture has been saved.');document.location='furnitures';</script>";
					}else{
						echo "<script>alert('Error: Furniture Not Saved');document.location='furnitures';</script>";
					}
				}
			}else{
				echo "<script>alert('File already exists.');</script>";
			}
		}else{
				echo $field_empty;
		}
	}
?>