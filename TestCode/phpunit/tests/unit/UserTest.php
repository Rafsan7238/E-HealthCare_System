<?php

class UserTest extends /PHPUnit/Framework/TestCase
{

	protected $user;

	public function setUp()
	{
		$this->user = new /App/Classes/User;
	}


	public function testName()
	{
		$this->user->setName('Billy Garret');

		$this->assertEquals($this->user->getName(), 'Billy Garret');

		$this->user->setName('Adam Smith');

		$this->assertEquals($this->user->getName(), 'Adam Smith');

	}

	public function testGender()
	{
		$this->user->setGender('male');

		$this->assertEquals($this->user->getGender(), 'male');
	}

	public function testAge()
	{
		$this->user->setAge(25);

		$this->assertEquals($this->user->getAge(), 25);

		$this->user->setAge(28);

		$this->assertEquals($this->user->getAge(), 28);
	}

	public function testAddress()
	{
		$this->user->setAddress('Dhaka, Bagladesh');

		$this->assertEquals($this->user->getAddress(), 'Dhaka, Bangladesh');

		$this->user->setAddress('Chittagong, Bagladesh');

		$this->assertEquals($this->user->getAddress(), 'Chittagong, Bangladesh');
	}

	public function testEmail()
	{
		$this->assertEquals($this->user->setEmail('abcd.com'), FALSE);
		$this->assertEquals($this->user->setEmail('abcd@gmail.com'), TRUE);

		$this->assertEquals($this->user->getEmail(), 'abcd@gmail.com');
	}

	public function testContactNumber()
	{
		$this->assertEquals($this->user->setContactNumber('123456'), FALSE);
		$this->assertEquals($this->user->setContactNumber('01711222222'), TRUE);

		$this->assertEquals($this->user->getEmail(), '01711222222');

		$this->assertEquals($this->user->setContactNumber('01711222221'), TRUE);

		$this->assertEquals($this->user->getEmail(), '01711222221');
	}

	public function testFailedRegister()
	{
		$this->assertEquals($this->user->register(), FALSE);
	
	}

	public function testPassword()
	{
		$this->assertEquals($this->user->setPassword('1234'), FALSE);
		$this->assertEquals($this->user->setPassword('abcd1234'), TRUE);

		$this->assertEquals($this->user->getPassword(), 'abcd1234');
	}

	public function testSuccessRegister()
	{
		$this->assertEquals($this->user->register(), TRUE);	
	}

	public testLogin()
	{
		$this->assertEquals($this->user->login('smith@gmail.com', '123456'), FALSE);
		$this->assertEquals($this->user->login('abcd@gmail.com', 'abcd1234'), TRUE);
	}
	
}