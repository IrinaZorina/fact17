<?php
//include 'people.php';
//include 'person.php';
//$tom = new People("Tom", 23);
////$tom -> name = 'Tom';
////$tom ->age = 18;
//var_dump($tom);
//echo '<br>';
//$bob = new People("Bob", 25);
////$bob -> name = 'Bob';
////$bob -> age = 17;
//var_dump($bob);
//$bob ->go();
//$age_new = $bob ->go()   ;
//echo $age_new;
//echo '<hr>';
//
//$same = new person ('Same', 26);
//$same ->surname = 'Smith';
//var_dump($same);

echo '<hr>';
include 'cars.php';
$bmw = new cars('high', 'blue', 'high');
var_dump($bmw);
echo '<br>';
$kia = new cars('medium', 'yellow', 'medium');
var_dump($kia);
echo '<br>';
$opel = new cars('low','red','low');
var_dump($opel);
echo '<br>';
echo '<hr>';

include 'animals.php';
include 'hameleon.php';
$bear = new animals('Bear','omnivorous');
var_dump($bear);
echo '<br>';
$wolf = new animals('Wolf','predator');
var_dump($wolf);
echo '<br>';
$hameleon = new hameleon('hameleon','herbivorous');
$hameleon->color = "Green";
$hameleon->changecolor("blue");
var_dump($hameleon);

echo '<hr>';

include 'strings.php';
$string = new strings('string');