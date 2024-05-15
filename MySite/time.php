<?php
$time = date ("G");
if ($time >= 8 && $time < 18) {
	$time = "day";}
else {
	$time = "night";
}
?>