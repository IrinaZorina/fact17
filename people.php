<?php

class people
{
public $name;
public $age = 15;

public function go(){
    return ++$this->age;
    return "name $this->name";
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

}
}