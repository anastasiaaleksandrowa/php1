<?php
$a = 1;
$b = 2;

$a = $a + $b; 
$b = $a - $b; 
$a = $a - $b; 

echo "a=$a, b=$b"; 

var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>