<?php

class hameleon extends animals
{
    public $color;
    public function changecolor($color)
    {
     echo "Color change!";
     $this->color = $color;
    }
}