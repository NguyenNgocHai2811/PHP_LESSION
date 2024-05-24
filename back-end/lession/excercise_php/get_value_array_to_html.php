<?php

$information_sinhVien = array(
    1=>array(
        'id'=>123,
        'name'=>"nguyen ngoc hai",
        'email'=>"nguyenngochai2322@gmail.com"
    ),
    2=>array(
        'id'=>1233,
        'name'=>"nguyen thành lâm",
        'email'=>"nguyenthahlam@gmail.com"
    ),
    3=>array(
        'id'=>1234,
        'name'=>"nguyen thị kim phận",
        'email'=>"nguyenthikimphan@gmail.com"
    ),
    4=>array(
        'id'=>12345,
        'name'=>"nguyen ngoc son",
        'email'=>"nguyenngocson@gmail.com"
        )


);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là bảng sinh viên</h1>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $stt=0;
            foreach($information_sinhVien as $item)
            {
                $stt++;
            ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                </tr>
                <?php
            
            }
            ?>
        </tbody>
    </table>
</body>
</html>