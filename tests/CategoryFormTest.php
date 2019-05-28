\<?php 
	class CategoryFormTest extends \PHPUnit_Framework_TestCase
	{
		function testCategoryName(){
			//category array having category_name value empty
			$categoryValue = [
				'category_name' => ''
			];
			// values send to testCategoryForm function
			$rowCheck = testCategoryForm($categoryValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		} 
		function testCategory(){
			//category array having category_name value filled
			$categoryValue = [
				'category_name' => 'validate category'
			];
			// values send to testCategoryForm function
			$rowCheck = testCategoryForm($categoryValue);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}
	}
 ?>
