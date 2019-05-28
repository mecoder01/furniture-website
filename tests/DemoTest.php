<?php 
	require 'functions/functionsTesting.php';
	class DemoTest extends \PHPUnit_Framework_TestCase
	{		
		function testUsernameInvalid()
		{
		//login array having username value empty
			$usernameRow= [
				'username' => '',
				'password' => 'testpassword'
			];
			// values send to testLoginForm function
			$rowCheck = testLoginForm($usernameRow);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testPasswordInvalid()
		{
		//login array having password value empty
			$usernameRow= [
				'username' => 'testusername',
				'password' => ''
			];
			// values send to testLoginForm function
			$rowCheck = testLoginForm($usernameRow);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyField()
		{
		//login array having empty value in field names
			$usernameRow= [
				'username' => '',
				'password' => ''
			];
			// values send to testLoginForm function
			$rowCheck = testLoginForm($usernameRow);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testAllForm()
		{
		//login array having both values in field names
			$usernameRow= [
				'username' => 'testusername',
				'password' => 'testpassword'
			];
			// values send to testLoginForm function
			$rowCheck = testLoginForm($usernameRow);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}
	}
?>