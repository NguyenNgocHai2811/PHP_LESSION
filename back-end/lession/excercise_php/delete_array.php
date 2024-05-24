<?php
// có ba cách xóa mảng


// tạo một mảng có trường email, tên, và ID\

$myArray = array(
    1=>array(
        'id'=>123,
        'name'=>"nguyễn Ngọc Hải",
        'email'=>"nguyenngochai2322@gmail.com"
    ),
    2=>array(
        'id'=>1234,
        'name'=>"nguyễn Thành Lâm",
        'email'=>"nguyenthanhlam@gmail.com"
    )
);

echo "<pre>";
print_r($myArray);
echo "</pre>";
// add một đối tượng vào mảng

$myArray[3] =  array(
    'id'=> 1234,
    'name'=>"nguyễn bo ba",
    'email'=>"babo@gmail.com"
);       
echo "<pre>";
print_r($myArray);
echo "</pre>";


// xóa một phần tử vào mảng

unset($myArray[1]);
unset($myArray[2]['email']);

echo "<pre>";
print_r($myArray);
echo "</pre>";
?>

