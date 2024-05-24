<?php
//create a array
$myArray = array();

for($i = 1; $i <150 ; $i++){
    if($i%2==0){
        $myArray[]=$i;
    }
}
    
foreach($myArray as $item){
    echo $item;
    echo "<br/>";
}



?>