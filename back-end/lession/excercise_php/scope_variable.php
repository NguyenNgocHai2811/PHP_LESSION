<?php 



// sử dụng biến global

function sum(){
global $a,$b;
$a=10;
$b =20;
return $a*$b;
}
$sum = sum();
echo "$sum";
echo "$a";
?>