<?php
if(isset($_POST['bt-login'])){
    if(!empty($_POST['username'])){
        $username = $_POST['username'];
        echo $username . "<br>";
    }
    if(!empty($_POST['password'])){
        $password = $_POST['password'];
        echo $password;
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
        username: <input type="text" name="username" value="<?php if(!empty($username)) echo $username ?>"> <br>
        password : <input type="password" name="password" id=""> <br>
        <br>
        <input type="submit" name="bt-login" id="">
    </form>
</body>
</html>