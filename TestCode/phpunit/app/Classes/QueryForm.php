<?php

namespace App/Classes;

class QueryForm
{
	private $name = NULL;
    private $contact_number = NULL;
    private $email = NULL;
    private $query = NULL;
    private $remarks = NULL;
    

	public function setName($name_)
	{
		$this->name = trim($name_);

	}

	public function getName()
	{
		return $this->name;
	}

	public function setEmail($email_)
	{
		if(filter_var($email_, FILTER_VALIDATE_EMAIL)){
			$this->email = $email_;
			return TRUE;
		}

			return FALSE;

	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setContactNumber($contactNumber)
	{
		$pattern = "/^(01)[0-9]{9}$/";

		if(preg_match($pattern, $contactNumber)){
			$this->contact_number = $contactNumber;
			return TRUE;
		}

		return FALSE;

	}

	public function getContactNumber()
	{
		return $this->contact_number;
	}

	public function setQuery($query_)
	{
		$this->query = $query_;
	}

	public function getQuery()
	{
		return $this->query;
	}

	public function sendQuery()
	{
		if($name!=NULL && $contact_number!=NULL && $email!=NULL && $query!=NULL){
			return TRUE
		}

		return FALSE;

	}

	private function readQuery()
	{
		if(sendQuery()){
            return $this->query;
        }

		return FALSE;

	}

    private function adminRemark($remarks_)
    {
        if(readQuery()){
            $this->remarks = $remarks_;
        }
    }

}