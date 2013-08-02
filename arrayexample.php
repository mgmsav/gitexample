<?php
  
  $record =array('first_name' => 'keith', 'last_name' => 'williams');
  print_r($record);

  $records = array();
  $records[] = $record;
  $record['first_name'] = 'Noam';
  $record['last_name'] = 'Lustiger';
  $records[] = $record;
  $record['first_name'] = 'Mark';
  $record['last_name'] = 'Gold';
  $records[] = $record;
  print_r($records); 

?>
