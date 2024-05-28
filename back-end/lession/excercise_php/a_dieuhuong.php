<!-- lay du lieu tu the a -->

<?php


if(isset($_GET['mod'])){
    $mod = $_GET['mod'];
}
if(isset($_GET['action'])){
    $act = $_GET['action'];
}
if(isset( $_GET['cart_id'])){
    $cart_id = $_GET['cart_id'];
}

if(!(empty($cart_id) && empty($act) && empty($mod))){
echo "module: " . $mod . "<br>" . "action: " . $act . "<br>" ."cart: " . $cart_id . "<br>" ;
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
    <a href="?mod=product&action=main&cart_id=1">sanPham</a>
</body>
</html>