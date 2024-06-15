<?php

class animals
{
    public $name;
    public $foodtype;
    public function eat(){
        echo "Eat animal!";
    }
    public function name()
    {
      echo 'Animal name!';
    }
    public function __construct($name, $foodtype){
        $this->name = $name;
        $this->foodtype = $foodtype;
    }


}