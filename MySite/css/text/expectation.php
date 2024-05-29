<?php

$expectation = 'Хотелось бы освоить данный курс. В дальнейшем продолжить учится програмированию на языке PHP. Ну, а если расматривать еще дальше то конечно работать на данном языке.';


$array_expectation = explode(" ", $expectation);
 for ($i=0; $i < count($array_expectation) ; $i++ ) { 
  
  if ($i%2 == 0) {
    $array_expectation[$i] = "<span style = 'color: red'>$array_expectation[$i]</span>";
  } else { $array_expectation[$i]="<span style = 'color: green'>$array_expectation[$i]</span>";}

 } 

 $string_color = implode (' ' ,$array_expectation);
 echo $string_color;

