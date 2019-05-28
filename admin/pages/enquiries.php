<?php 
	if(isset($_GET['enquiryId'])){
		$updateDatas = [
			'enquiry_id' => $_GET['enquiryId'],
			'handled_by' => $_SESSION['sessUsername'],
			'handled_complete' => 'yes'
		];
		$updateEnquiries = $enquiry_table->updateData($updateDatas, 'enquiry_id');
		if($updateEnquiries == true){
			echo "<script>alert('Updated');document.location='enquiries';</script>";
		}
	}
	$selectEnquiries = $enquiry_table->selectAll();
	$enquiry_array = [
		'selectEnquiries' => $selectEnquiries,
		'gen_table' => $gen_table
	];
	$titleName = 'Enquiries';
	$contents = funcTemplate('../templates/enquiry_templates.php', $enquiry_array);
?>