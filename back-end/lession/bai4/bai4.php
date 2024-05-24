<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $gioBatDau = isset($_POST['giobatdau'])  ? $_POST['giobatdau'] : 0;
    $gioKetThuc = isset($_POST['gioketthuc']) ? $_POST['gioketthuc'] : 0;
    $sum =0;
    for($i=$gioBatDau ; $i<$gioKetThuc ; $i++){
        $tien =0;
        if($gioBatDau>=10 && $gioKetThuc<=17){
           $tien=20000;
        }
        else{
           $tien =45000;
        }
        $sum += $tien;
    }
    ?>
<form action="#" method = "post">
        <table >
            <tr>
                <th colspan="3" class="label">TÍNH TIỀN KARAOKE</th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td><input type="text" name="giobatdau" value="<?php echo "$gioBatDau"; ?>"></td>
                <td class="cot-3">(h)</td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td><input type="text" name="gioketthuc" value="<?php echo "$gioKetThuc"; ?>"></td>
                <td class="cot-3">(h)</td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td><input type="text" name="tinhtien"class="tinhtien" value="<?php echo "$sum"; ?>" readonly></td>
                <td class="cot-3">(VNĐ)</td>
            </tr>
            
            <tr>
                <td colspan="3" class="hang-6"><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
        
    </form>
   
</body>
</html>