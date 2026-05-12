<?php
#two dimension array
$student=array(
  array('name'=>'hari','age'=>23),
  array('name'=>'suresh','age'=>22),
  array('name'=>'gita','age'=>21)
);
//to get atructure of array
//echo "<pre/>";
//print_r($student);
#to rad all the elements from the array
foreach($student as $item){
  echo $item['name'];
  echo '<br/>';
}
 ?>
