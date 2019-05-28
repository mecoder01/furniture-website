<?php 
	class EnquiryFormTest extends \PHPUnit_Framework_TestCase
	{
		function testEmptyEnqFullname(){
			//enquiry array having fullname value empty
			$enquiryValue = [
				'fullname' => '',
				'email' => 'forexample@example.com',
				'telephone' => '+1223334444',
				'enquiry' => 'this is enquiry'
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		} 
		function testEmptyEnqEmail(){
			//enquiry array having email value empty
			$enquiryValue = [
				'fullname' => 'Test Example',
				'email' => '',
				'telephone' => '+1223334444',
				'enquiry' => 'this is enquiry'
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyEnqTelephone(){
			//enquiry array having telephone value empty
			$enquiryValue = [
				'fullname' => 'Test Example',
				'email' => 'forexample@example.com',
				'telephone' => '',
				'enquiry' => 'This is enquiry.'
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyEnqEnquiry(){
			//enquiry array having enquiry value empty
			$enquiryValue = [
				'fullname' => 'Test Example',
				'email' => 'forexample@example.com',
				'telephone' => '+1223334444',
				'enquiry' => ''
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyEnqAll(){
			//enquiry array having all value empty
			$enquiryValue = [
				'fullname' => '',
				'email' => '',
				'telephone' => '',
				'enquiry' => ''
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testFullEnqAll(){
			//enquiry array having all value filled
			$enquiryValue = [
				'fullname' => 'Test Example',
				'email' => 'forexample@example.com',
				'telephone' => '+1223334444',
				'enquiry' => 'This is enquiry.'
			];
			// values send to testEnquiryForm function
			$rowCheck = testEnquiryForm($enquiryValue);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}

	}
 ?>
