<?php
// xaaydungj hmaf kiểm tra số ngyên chẵn

// function check_even($n){
//     if($n%2==0 && $n>0){
//         echo "số chẵn";
//     }
//     else
//     echo "số lẻ";
// }

// check_even(2);
// end funtion check-even


// tạo funtion trả về true false;
// function check_even2($n){
//     if($n%2==0 && $n>0){
//         return true;
//     }
//     else
//    return false;
// }

// if(check_even2(1)){
//     echo "là số chẵn";
// }
// else{
//     echo "là số lẻ";
// }


$myList = array(
    0=>array(
    'id'=>1,
    'description'=>"toi la nguoi toi khong phai la cho"),
    1=>array(
        'id'=>2,
        'description'=>"toi la cho toi khog phai la nguoi"
    ),
    2=>array(
        'id'=>3,
        'description'=>"toi la cho toi khog phai la nguoi"
    ),
    3=>array(
        'id'=>4,
        'description'=>"toi la cho toi khog phai la nguoi"
    ),
    4=>array(
        'id'=>5,
        'description'=>"toi la cho toi khog phai la nguoi"
    ),
    
);

//tao funtion lay id cua mot bai bao trong mang

 function get_id_newpapers($id)
 {
    global $myList ;
    if(array_key_exists($id,$myList)){
        return $myList[$id];
    }
    return false;
    
 }
 //hàm hiển thị mảng
 function showArray($ar){
    echo " <pre>";
    print_r($ar);
    echo " <pre>";
 }

 $item = get_id_newpapers(0);
showArray($item);

 
?>