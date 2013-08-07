<?php
 $colors = array('first' => 'red', 'second' => 'green');
 $shapes = array('first' => 'square', 'second' => 'circle');
 
 print_r($colors);
 echo '<br>';
 print_r($shapes); 
 $combine = array_combine($colors, $shapes);
 echo '<br>';
 print_r($combine);
 
$merge = array_merge($colors, $shapes);
 echo '<br>';
 print_r($merge);

 $merge = array_merge($colors, $combine);
 echo '<br>';
 print_r($merge);

?>
