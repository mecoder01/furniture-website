<?php 
	//testing functions for login form page
	function testLoginForm($loginCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty username
		if ($loginCheck['username'] == "") {
			$rowCheck =false;
		}//checking with empty password
		if ($loginCheck['password'] == "") {
			$rowCheck =false;
		}
		return $rowCheck; // returning the value of $rowCheck
	}
	//testing functions for category form page	
	function testCategoryForm($categoryCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty category_name
		if ($categoryCheck['category_name'] == "") {
			$rowCheck =false;
		}
		return $rowCheck; // returning the value of $rowCheck
	}
	//testing functions for furniture form page	
	function testFurnitureForm($furnitureCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty furniture_name
		if ($furnitureCheck['furniture_name'] == "") {
			$rowCheck =false;
		}//checking with empty description
		if ($furnitureCheck['description'] == "") {
			$rowCheck =false;
		}//checking with empty furniture_price
		if ($furnitureCheck['furniture_price'] == "") {
			$rowCheck =false;
		}
		return $rowCheck; // returning the value of $rowCheck

	}
	//testing functions for update form page	
	function testUpdateForm($updateCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty title
		if ($updateCheck['title'] == "") {
			$rowCheck =false;
		}//checking with empty start_date
		if ($updateCheck['start_date'] == "") {
			$rowCheck =false;
		}//checking with empty end_date
		if ($updateCheck['end_date'] == "") {
			$rowCheck =false;
		}//checking with empty description
		if ($updateCheck['description'] == "") {
			$rowCheck =false;
		}
		return $rowCheck; // returning the value of $rowCheck
	}
	//testing functions for contact form page	
	function testEnquiryForm($enquiryCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty full_name
		if ($enquiryCheck['fullname'] == "") {
			$rowCheck = false;
		}//checking with empty email
		if ($enquiryCheck['email'] == "") {
			$rowCheck = false;
		}//checking with empty telephone
		if ($enquiryCheck['telephone'] == "") {
			$rowCheck = false;
		}//checking with empty enquiry
		if ($enquiryCheck['enquiry'] == "") {
			$rowCheck = false;
		}
		return $rowCheck; // returning the value of $rowCheck
	}
	//testing functions for admin form page
	function testAdminForm($adminCheck){
		$rowCheck = true; //initializing with boolean value
		//checking with empty full_name
		if ($adminCheck['full_name'] == "") {
			$rowCheck = false;
		}//checking with empty email
		if ($adminCheck['email'] == "") {
			$rowCheck = false;
		}//checking with empty username
		if ($adminCheck['username'] == "") {
			$rowCheck = false;
		}//checking with empty password
		if ($adminCheck['password'] == "") {
			$rowCheck = false;
		}
		return $rowCheck; // returning the value of $rowCheck
	}
?>