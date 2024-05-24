<?php
// xaaydungj hmaf kiểm tra số ngyên chẵn

function check_even($n){
    if($n%2==0 && $n>0){
        echo "số chẵn";
    }
    else
    echo "số lẻ";
}

check_even(2);
// end funtion check-even


// tạo funtion trả về true false;
function check_even2($n){
    if($n%2==0 && $n>0){
        return true;
    }
    else
   return false;
}

if(check_even2(1)){
    echo "là số chẵn";
}
else{
    echo "là số lẻ";
}
?>