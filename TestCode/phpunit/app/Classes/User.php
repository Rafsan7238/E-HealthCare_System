<?php

namespace App/Classes;

class User
{
	public $name = NULL;
    protected $gender = NULL;
    protected $age = NULL;
    protected $address = NULL;
    protected $contact_number = NULL;
    protected $email = NULL;
    private $username = NULL;
    private $password = NULL;
	public static $count = 0;
	private $uid;

	public User(){
		$this->uid = ++$count;
	}

	public function setName($name_)
	{
		$this->name = trim($name_);

	}

	public function getName()
	{
		return $this->name;
	}


	public function setGender($gender_)
	{
		$this->gender = $gender_;

	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setAge($age_)
	{
		$this->age = $age_;
	}

	public function getAge()
	{
		return $this->age;
	}


	public function setAddress($address_)
	{
		$this->address = $address_;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setEmail($email_)
	{
		if(filter_var($email_, FILTER_VALIDATE_EMAIL)){
			$this->email = $email_;
			$this->username = $email_;
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

	public function setPassword($password_)
	{
		if(strlen($password_)>=6){
			$this->password = $password_;
			return TRUE;
		}

		return FALSE;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function register()
	{
		if($name!=NULL && $gender!=NULL && $age!=NULL && $address!=NULL && $contact_number!=NULL && $email!=NULL && $username!=NULL && $password!=NULL){
			return TRUE
		}

		return FALSE;

	}

	public function login($id, $pass)
	{
		if($id===$this->username && $pass===$this->password){
			return TRUE;
		}

		return FALSE;

	}

}