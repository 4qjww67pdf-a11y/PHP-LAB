<?php
//manual numeric index (key)
$num[1]=2;
$num[2]=6;
$num[4]=8;
echo $num[4];
echo "<br/>";
echo $num[1];
//manual non numeric(string)index(key)
echo "<br/>";
$student['name']='Hari';
$student['address']='Biratnagar';
echo $student['name'];
//to know arrays key and its  value
echo "<pre/>";
print_r($student);
 ?>
