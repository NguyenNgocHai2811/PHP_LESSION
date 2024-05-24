<?php
// create a array empty
$myArray = array();

//use key when array has signature 
// add value to array empty
$myArray['name'] = "what the fuck";
$myArray['lop'] = "k45 CNTT";
$myArray['tuoi'] = 20;
// create a array with keys and values specified
$myArray1 = array('name'=> 'nguyen ngoc hai', 'id'=> 123 , 'namSinh'=> 2004);


// use without key when array liner not signature
$array = array(1,2,3,4,5,6,7,7,8,9,9,123);

echo "<pre";
    print_r($myArray1);
    print_r($myArray);
    print_r($array);
echo "</pre>";
?>