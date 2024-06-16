<?php

class Authorization {
	public $hostname;
	public $username;
	public $password;
	public $dbname;
	
	public function __construct($hostname, $username, $password, $dbname)
	{
		$this->hostname=$hostname;
		$this->username=$username;
		$this->password=$password;
		$this->dbname=$dbname;
	}

	public function go(){
		$connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
		return $connection;			
	}
	public function utf8(){
		return mysqli_set_charset(mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname), 'utf8');
	}

}