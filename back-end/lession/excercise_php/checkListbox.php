<?php
if(isset($_POST['bt-login'])){
    if(!empty($_POST['cat'])){

        foreach($_POST['cat'] as $item){
            echo $item. '<br>';
        }

        // cach 2 dung implode để phân cách

        $list_array = implode(',', $_POST['cat']);
        echo $list_array;

    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <h1>DANH MỤC</h1>
    Thể Thao <input type="checkbox" name="cat[]" value="sport"> <br>
    Du Lịch  <input type="checkbox" name="cat[]" value="travel"> <br>

    <input type="submit" name="bt-login" value="gui">
</form>
</body>
</html>