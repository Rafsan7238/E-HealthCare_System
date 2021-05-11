<?php

class VisitSummaryTest extends /PHPUnit/Framework/TestCase
{

	protected $visitSummary;

	public function setUp()
	{
		$this->visitSummary = new /App/Classes/VisitSummary;
	}


	public function testPatientID()
	{
		$this->visitSummary->setPatientID(5);

		$this->assertEquals($this->visitSummary->getPatientID(), 5);

	}

	public function testBloodPressure()
	{
		$this->visitSummary->setBloodPressure('120/80');

		$this->assertEquals($this->visitSummary->getBloodPressure(), '120/80');
	}

	public function testBloodSugar()
	{
		$this->visitSummary->setBloodSugar('06');

		$this->assertEquals($this->visitSummary->getBloodSugar(), '06');
    }

	public function testWeight()
	{
		$this->visitSummary->setWeight(80);

		$this->assertEquals($this->visitSummary->getWeight(), 80);
    }

    public function testBodyTemp()
	{
		$this->visitSummary->setBodyTemp(98);

		$this->assertEquals($this->visitSummary->getBodyTemp(), 98);
    }

    public function testFailedSubmission()
    {
        $this->assertEquals($this->visitSummary->submitSummary(), FALSE);
    }

    public function testMedPrescription()
	{
		$this->visitSummary->setMedPrescription('Take Napa tablet 2 times per day.');

		$this->assertEquals($this->visitSummary->getMedPrescription(), 'Take Napa tablet 2 times per day.');
    }

    public function testVisit()
	{
		$this->visitSummary->visit('20/05/2021');

		$this->assertEquals($this->visitSummary->getVisitDate(), '20/05/2021');
    }

    public function testSuccessSubmission()
    {
        $this->assertEquals($this->visitSummary->submitSummary(), TRUE);
    }
	
}