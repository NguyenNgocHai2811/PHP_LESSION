<?php
//add element have key default
// create a array with name, email
$information = array(
    'name' => "nguyen ngoc hai",
    'email' => "nguyenngochai@gmail.com"
);

// add phone number to information array
$information['phone_number'] = '0976198658';

//add elenment have key not default

$listPrime = array(2,3,5,7,11,13);
$listPrime[] = 26;

echo "<pre>"; 
print_r($listPrime);
print_r($information);
echo "</pre>";
?>