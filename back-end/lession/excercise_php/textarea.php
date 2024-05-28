<?php
if(isset($_POST['bt-comment'])){
    if(empty($_POST['comment'])){
        echo "vui lòng dien vao";
    }
    else{
        $comment = $_POST['comment'];
        echo $comment;
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
        <h1>BÌNH LUẬN</h1>
        <textarea name="comment" id="" cols="50" rows="20"></textarea> <br>

        <input type="submit" value="gui" name="bt-comment">
    </form>
</body>
</html>