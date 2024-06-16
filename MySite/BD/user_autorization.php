<?php

class User {
	public $name;
	public $password;
	
 public function __construct($name, $password)
 {
	$this->name = $name;
	$this->password = $password;
 }

 public function name (){
	$name =isset($_POST['name'])? $_POST['name']: ' ';
	return $name;}
 public function password (){
	$password =isset($_POST['password'])? $_POST['password']: ' ';
	return $password;}
	
}