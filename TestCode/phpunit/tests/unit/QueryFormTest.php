<?php

class QueryFormTest extends /PHPUnit/Framework/TestCase
{

	protected $queryForm;

	public function setUp()
	{
		$this->queryForm = new /App/Classes/QueryForm;
	}


	public function testName()
	{
		$this->queryForm->setName('Billy Garret');

		$this->assertEquals($this->queryForm->getName(), 'Billy Garret');

	}

	public function testEmail()
	{
		$this->assertEquals($this->queryForm->setEmail('abcd.com'), FALSE);
		$this->assertEquals($this->queryForm->setEmail('abcd@gmail.com'), TRUE);

		$this->assertEquals($this->queryForm->getEmail(), 'abcd@gmail.com');
	}

	public function testContactNumber()
	{
		$this->assertEquals($this->queryForm->setContactNumber('123456'), FALSE);
		$this->assertEquals($this->queryForm->setContactNumber('01711222222'), TRUE);

		$this->assertEquals($this->queryForm->getEmail(), '01711222222');
	}

	public function testFailedSendQuery()
	{
		$this->assertEquals($this->queryForm->sendQuery(), FALSE);
	
	}

	public function testQuery()
	{
		$this->queryForm->setQuery('This is a query');

		$this->assertEquals($this->queryForm->getQuery(), 'This is a query');
	}

	public function testSuccessSendQuery()
	{
		$this->assertEquals($this->queryForm->sendQuery(), TRUE);
	}
	
}