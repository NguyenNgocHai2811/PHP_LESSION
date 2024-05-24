<?php
//kiem tra form có được submit chưa bằng cachs ử dụng biến server
function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "<pre>";
}

// để xử lí lỗi này thì sử dụng if của biến servers

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "username = $username <br> password = $password ";
}
else
echo "vui lòng không để trống";
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
        <h1>Đăng nhập</h1>
        UserName <input type="text" name="username"> <br>
        Password <input type="password" name ="password"> <br>
        <input type="submit" name="login" id="" value="gửi">
    </form>
</body>
</html>