<?php 
	class UpdateFormTest extends \PHPUnit_Framework_TestCase
	{
		function testEmptyTitle(){
			//Update array having title value empty
			$updateValue = [
				'title' => '',
				'start_date' => '2019-5-10',
				'end_date' => '2019-05-20',
				'description' => 'This is description.'
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyStartDate(){
			//Update array having start_date value empty
			$updateValue = [
				'title' => 'Bed',
				'start_date' => '',
				'end_date' => '2019-05-20',
				'description' => 'This is description.'
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyEndDate(){
			//Update array having end_date value empty
			$updateValue = [
				'title' => 'Bed',
				'start_date' => '2019-05-10',
				'end_date' => '',
				'description' => 'This is description.'
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyDescription(){
			//Update array having description value empty
			$updateValue = [
				'title' => 'Bed',
				'start_date' => '2019-05-10',
				'end_date' => '2019-05-20',
				'description' => ''
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyAllField(){
			//Update array having all value empty
			$updateValue = [
				'title' => '',
				'start_date' => '',
				'end_date' => '',
				'description' => ''
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testFullAllField(){
			//Update array having all value filled
			$updateValue = [
				'title' => 'Bed',
				'start_date' => '2019-05-10',
				'end_date' => '2019-05-20',
				'description' => 'This is description.'
			];
			// values send to testUpdateForm function
			$rowCheck = testUpdateForm($updateValue);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}
	}
?>