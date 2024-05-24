<?php
//tinh tong phan tu tu 1 toi n trong 

//cach 1 ;
$n=3;
$sum=0;
// for($i=1 ; $i<$n ; $i++){
//     if($i%2==0){
//         $sum+=$i;
//     }
// }

// //cach 2;
// $sum1 = ($n*($n+1))/2;

// //bai 2;
// for($i=1 ; $i<$n ; $i++){
//     if($i%3==0){
//         $sum1+=($i/3);
// }
// }

// //bai 3;
// for($i=1 ; $i<3 ; $i++){
//     $index = $i;
//    $l =(float) $index/++$index;
//    $sum+=$l;
//    echo"<br>";
// }
// echo $sum;

//bai 4;
 function phuongTrinhBacHai($a , $b , $c){
    $delta = ($b*$b)-4*$a*$c;
    if($delta>0){
        $x1 = (-$b + sqrt($delta))/2 * $a;
        $x2 = (-$b - sqrt($delta))/2 * $a;
        return "x1 = " .$x1 . " x2 = " .$x2  ;
    }
    else if($delta<0){
        return "phuong trinh vo nghiem";
    }
    else{
        return -$b/2*$a;
    }
}

    $nghiem = phuongTrinhBacHai(1,2,3);
    echo "$nghiem";
    echo "<br>";
   echo  phuongTrinhBacHai(4,-5,12);
    echo "<br>";
    echo phuongTrinhBacHai(1,-5,6);

 

