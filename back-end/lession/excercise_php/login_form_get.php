<?php
if(isset($_GET['login'])){
   $username = $_GET['username'];
   $password = $_GET['password'];


   echo "username = $username  <br> password = $password ";
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
    <form action="" method="get">
        <h1>Đăng nhập</h1>
        UserName <input type="text" name="username"> <br>
        Password <input type="password" name ="password"> <br>
        <input type="submit" name="login" id="" value="gửi">
        <a href="?mom = phan&password=2010&login=gui">click here</a>
    </form>
    
</body>
</html>