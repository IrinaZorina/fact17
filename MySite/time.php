<?php
$time = date ("G");
if ($time >= 8 && $time < 19) {
	$time = "day";}
else {
	$time = "night";
}
?>