<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		unset($_POST['submit']);
		$field_empty = "";

		if ($title == "" || $start_date == "" || $end_date == "" || $description == "" 	)
			$field_empty .= "<script>alert('Fields cannot be empty');</script>";	

		if (empty($field_empty)) {
			$tempName = $_FILES['images']['name'];
			
			$updateArray = [
				'update_id' => $_POST['update_id'],
				'title' => $_POST['title'],
				'start_date' => $_POST['start_date'],
				'end_date' => $_POST['end_date'],
				'description' => $_POST['description'],
				'images' => $tempName
			];
			$saveUpdate = $update_table->saveData($updateArray, 'update_id');
			
			$targetDest = '../../images/furniture/' . basename($_FILES["images"]["name"]);
			if (!file_exists($targetDest)) {
				$tempName = $_FILES['images']['tmp_name'];
				if(move_uploaded_file($tempName, $targetDest)){
					if ($saveUpdate == true) {	
						echo "<script>alert('Offer has been saved.');document.location='update';</script>";
					}else{
						echo "<script>alert('Error: Offer Not Saved');document.location='update';</script>";
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