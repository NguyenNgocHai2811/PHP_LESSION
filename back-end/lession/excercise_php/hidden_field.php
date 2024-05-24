<?php
// hàm hiển thị mảng

function showArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
//tài khoản của user 
$account_user = array(
    'username' => "admin",
    'password' => "123"
);
//tạo một mảng để lưu lỗi

$error = array();

if (isset($_POST['login'])) {
    // kiểm tra username có để trống không
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống dòng đăng nhập";
    } else {
        $username = $_POST['username'];
    }
    // kiểm tra password có trống không
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống Password";
    } else {
        $password = $_POST['password'];
    }
    // kiểm tra thông tin có trong đúng không
    if (empty($error)) {
        if ($username == $account_user['username'] && $password == $account_user['password']) {
            $redict_to = $_POST['rediect_to'];
            echo "$redict_to";
        } else {
            $error['login'] = "tên đăng nhập và mật khẩu không chính xác";
        }
    }
    if (!empty($error)) {
        showArray($error);
    }
    
}

?>

<!-- các bước để kiểm tra dữ liệu hãy sử dụng các thuật toán sau -->
<!-- 
    bước 1 kiểm tra dữ liệu
    bước 2  gán dữ liệu
    bước 3 kiếm tra login
    bước 4 chuyển hướng
    thông bos lỗi đăng nhập
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Đăng nhập</h1>
        UserName <input type="text" name="username"> <br>
        Password <input type="password" name="password"> <br>
        <input type="hidden" name="rediect_to" value="meo.php">
        <input type="submit" name="login" id="" value="gửi">
        <a href="?mom = phan&password=2010&login=gui">click here</a>
    </form>

</body>

</html>