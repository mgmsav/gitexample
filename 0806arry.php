<?php
 function input ($text){
  echo '<br/>' .'<br/>' .'<u>' . $text . '</u>' . ' <br/>';
 }

 $colors = array('first' => 'red', 'second' => 'green');
 $shapes = array('first' => 'square', 'second' => 'circle');
 $seasons = array('winter' => 'cold', 'summer' => 'hot');
 input('printing the colors array  ');
 print_r($colors);
 input('Printing the shapes array  ');
 print_r($shapes); 
 $combine = array_combine($colors, $shapes);
 input('Combined the arrays and set colors on the left as the key and shapes on the right as the value');
 print_r($combine);
 
 $merge = array_merge($colors, $shapes);
 input('Merge will over write the parameters that have the same key the second parameter will show ');
 print_r($merge);

 $merge = array_merge($colors, $combine);
 input('Merging will not do anything because no keys are the same');
 print_r($merge);
 
 $new_array = array_merge($seasons, $shapes);
 input('Merging will not do anything because no keys are the same');
 print_r($new_array);
 asort($new_array);
 input('Asort will sort in alphabetical  order of values');
 print_r($new_array);

?>

