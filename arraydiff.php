<?php
$array1 = array("a" => "green", "red", "blue", "red", "pink");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);
?>
