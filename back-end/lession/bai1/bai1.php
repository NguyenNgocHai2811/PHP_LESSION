<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<form action="#" method="post">
        User name <input type="text" name="user-name"> <br>
        Password <input type="password" name="password"> <br>
        <input type="submit">
    </form>
   
<?php
$userName = isset($_POST['user-name']) ? $_POST['user-name'] : 0;
$password = isset( $_POST['password']) ? $_POST['password'] :0;

if($userName=="admin" && $password== "123456"){
    echo "<div>welcome to the admin</div>";
}
else{
    echo "nhap sai user name hoặc password";
}
?>
</body>
</html>