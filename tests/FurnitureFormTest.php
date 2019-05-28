<?php 
	class FurnitureFormTest extends \PHPUnit_Framework_TestCase
	{
		function testEmptyEnqFullname(){
			//furniture array having furniture_name value empty
			$furnitureValue = [
				'furniture_name' => '',
				'description' => 'This is description.',
				'furniture_price' => '122333'
			];
			// values send to testFurnitureForm function
			$rowCheck = testFurnitureForm($furnitureValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptydescription(){
			//furniture array having description value empty
			$furnitureValue = [
				'furniture_name' => 'Corner sofa',
				'description' => '',
				'furniture_price' => '122333'
			];
			// values send to testFurnitureForm function
			$rowCheck = testFurnitureForm($furnitureValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyPrice(){
			//furniture array having furniture_price value empty
			$furnitureValue = [
				'furniture_name' => 'Corner sofa',
				'description' => 'This is description',
				'furniture_price' => ''
			];
			// values send to testFurnitureForm function
			$rowCheck = testFurnitureForm($furnitureValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyField(){
			//furniture array having all value empty
			$furnitureValue = [
				'furniture_name' => '',
				'description' => '',
				'furniture_price' => ''
			];
			// values send to testFurnitureForm function
			$rowCheck = testFurnitureForm($furnitureValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testFullField(){
			//furniture array having all value filled
			$furnitureValue = [
				'furniture_name' => 'Corner sofa',
				'description' => 'This is description',
				'furniture_price' => '122333'
			];
			// values send to testFurnitureForm function
			$rowCheck = testFurnitureForm($furnitureValue);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}		
	}
?>