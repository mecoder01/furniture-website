<?php
	if (isset($_POST['submit'])) {
		extract($_POST);
		unset($_POST['submit']);
		$field_empty = "";

		if ($fullname == "" || $email == "" || $telephone == "" || $enquiry == "") 
			$field_empty .= "<script>alert('Fields cannot be empty');</script>";
		if (empty($field_empty)) {
			$contactArray = [
				'enquiry_id' => $_POST['enquiry_id'],
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email'],
				'telephone' => $_POST['telephone'],
				'enquiry' => $_POST['enquiry'],
				// 'handled_by' => $_POST['handled_by'],
				'handled_complete' => $_POST['handled_complete']
			];
			$enquiryVar = $enquiry_table->insertData($contactArray);
			if ($enquiryVar == true) {
				echo "<script>alert('Enquiry Sent');</script>";
			}else{
				echo "<script>alert('Sorry! ERROR sending enquiry');</script>";
			}
		}else{
			echo $field_empty;
		}
	}

	$titleName = 'Contact';
	$contents = funcTemplate('../templates/contact_templates.php', []);
	$class_name = "home";
?>