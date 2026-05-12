<?php
$str = "Hello World";
// String length
echo "Length: " . strlen($str) . "<br>";
// Word count
echo "Words: " . str_word_count($str) . "<br>";
//Reverse String
echo"Reversed:". strrev($str) . "<br>";
// Replace word
echo "Replaced: " . str_replace("World", "PHP", $str) . "<br>";
?>
