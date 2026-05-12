<?php
#to know about foreacch loop
#create an array
$student=array(
'name'=>'suren',
'address'=>'Duhabi',
'email'=>'abc@example.com',
'age'=>23
);
//to read all the elements from the above array
foreach($student as $key=>$value){
echo $value;
echo "<br/>";
}
 ?>
