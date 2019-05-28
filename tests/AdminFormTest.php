<?php 
	class AdminFormTest extends \PHPUnit_Framework_TestCase
	{
		function testEmptyFullname(){
			//admin array having full_name value empty
			$adminValue = [
				'full_name' => '',
				'email' => 'superadmin@example.com',
				'username' => 'admin',
				'password' => 'admin'
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyEmail(){
			//admin array having email value empty
			$adminValue = [
				'full_name' => 'Super admin',
				'email' => '',
				'username' => 'admin',
				'password' => 'admin'
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyUsername(){
			//admin array having username value empty
			$adminValue = [
				'full_name' => 'Super admin',
				'email' => 'superadmin@example.com',
				'username' => '',
				'password' => 'admin'
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyPassword(){
			//admin array having password value empty
			$adminValue = [
				'full_name' => 'Super admin',
				'email' => 'superadmin@example.com',
				'username' => 'admin',
				'password' => ''
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testEmptyAll(){
			//admin array having all value empty
			$adminValue = [
				'full_name' => '',
				'email' => '',
				'username' => '',
				'password' => ''
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertFalse($rowCheck);
		}
		function testFullField(){
			//admin array having all value filled
			$adminValue = [
				'full_name' => 'Super admin',
				'email' => 'superadmin@example.com',
				'username' => 'admin',
				'password' => 'admin'
			];
			// values send to testAdminForm function
			$rowCheck = testAdminForm($adminValue);
			//testing with boolean value
			$this->assertTrue($rowCheck);
		}
	}
?>