<?php

namespace App/Classes;

class VisitSummary
{
	private $summaryID;
    public static $count = 0;
    private $patientID = NULL;
    protected $bloodPressure = NULL;
    protected $bloodSugar = NULL;
    protected $weight = NULL;
    protected $bodyTemp = NULL;
    protected $medicalPrescription = NULL;
    protected $visitDate = NULL;
    
    public VisitSummary()
    {
        $this->summaryID = ++$count;
    }

	public function setPatientID($PID)
	{
		$this->patientID = $PID;

	}

	public function getPatientID()
	{
		return $this->patientID;
	}

	public function setBloodPressure($BP)
	{
        $this->bloodPressure = $BP;
	}

	public function getBloodPressure()
	{
		return $this->bloodPressure;
	}

	public function setBloodSugar($blood_sugar)
	{
		$this->bloodSugar = $blood_sugar;
	}

	public function getBloodSugar()
	{
		return $this->bloodSugar;
	}

	public function setWeight($weight_)
	{
		$this->weight = $weight_;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setBodyTemp($body_temp)
	{
		$this->bodyTemp = $body_temp;
	}

	public function getBodyTemp()
	{
		return $this->bodyTemp;
	}

    public function setMedPrescription($medPres)
    {
        $this->medicalPrescription = $medPres;
    }

    public function getMedPrescription()
    {
        return $this->medicalPrescription;
    }

    public function visit($visit_date)
    {
        $this->visitDate = $visit_date;
    }

    public function getVisitDate()
    {
        return $this->visitDate;
    }

    public function submitSummary()
    {
        if($patientID!=NULL && $bloodPressure!=NULL && $bloodSugar!=NULL && $weight!=NULL && $bodyTemp!=NULL && $medicalPrescription!=NULL && $visitDate!=NULL)
        {
            return TRUE;
        }

        return FALSE;

    }

    private function getSummary()
    {
        public $summary = array($summaryID, $patientID, $bloodPressure, $bloodSugar, $weight, $bodyTemp, $medicalPrescription, $visitDate);
        return $summary;
    }

}