<?php

class cars
{
    public $speed;
    public $color;
    public $power;
    public function go()
    {
        echo "Go to cars page!";
    }
    public function left(){
        echo "Cars left!";
    }
    public function right(){
        echo "Cars right!";
    }
    public function __construct($speed, $color, $power){
        $this->speed = $speed;
        $this->color = $color;
        $this->power = $power;
    }
}