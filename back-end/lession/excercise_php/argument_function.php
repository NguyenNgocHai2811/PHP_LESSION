<?php
 

 //tao một function để tạo input text và nhiều cái inputs

 function create_input_text($username, $value , $options = array()){
    $username = func_get_arg(0);
    $value = func_get_arg(1);
    $options = func_get_arg(2);

    //kiểm tra xem mản có phải rỗng không
    if(!empty($options)){
        $id = $options['id'];
        $class = $options['class'];
    }


    $input_html ="<input type='text' name = {$username}' value ='{$value}' id ='{$id}' class = '{$class}' /> ";
    echo $input_html;
 }

 //gọi hàm tạo nhiều inputs
for($i =0 ; $i<10 ; $i++){
    create_input_text("username", "", array('id'=>"id", 'class'=>"input_user"));
    echo "<br>";    
}
 
?>

