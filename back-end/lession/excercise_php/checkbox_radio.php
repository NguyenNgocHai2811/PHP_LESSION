<?php
    if(isset($_POST['bt_login'])){
        if(isset($_POST['rules'])){
            $rule = $_POST['rules'];
            echo $rule;
        }
        else{
            echo "vui lòng cọn điều khoản";
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
    <h1>ĐĂNG KÍ</h1>
    <p style="width: 400px;height: 200px; overflow: scroll;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit esse sapiente dolorem aliquid distinctio ut, quas optio ullam nesciunt doloribus, fuga veritatis quia eum suscipit voluptatum sint corrupti, totam voluptate.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit officia praesentium suscipit dolor pariatur provident veritatis sapiente consequuntur quos soluta, ut reiciendis facilis et ab rem eius in omnis autem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi minus voluptatum cumque ut non sapiente, asperiores provident officia rerum facere vel nulla reiciendis perferendis reprehenderit tenetur commodi laboriosam. Quos.
    </p>
    <input type="checkbox" name="rules">
    tôi chấp nhận với các điều khoản: 
    <br>
    <br>
    
    <input type="submit" name="bt_login" value="gửi">
    </form>
</body>
</html>