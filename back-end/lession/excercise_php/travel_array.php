<?php
// code create a array
$myArray = array(1,2,3,4,5,6,7,8,9,10,11,12);

foreach($myArray as $item)
{
    echo $item;
    echo "<br>";
}


//create 3 objects students and traverse them

$myArray1 = array(
    1=>array(
        'masv'=>4551050053,
        'name'=>"nguyen ngoc hai",
        'birthday'=>"28/11/2004"
    ),
    2=>array(
        'masv'=>4551050054,
        'name'=>"nguyen ngoc hai",
        'birthday'=>"28/11/2004"
    )
);
foreach($myArray1 as $item){
    print_r($item);
}
?>