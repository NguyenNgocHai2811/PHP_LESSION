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
    $chieuDai = isset($_POST['chieudai']) ? $_POST['chieudai'] :0;
    $chieuRong = isset($_POST['chieurong']) ? $_POST['chieurong']:0;

    $dienTich = $chieuDai*$chieuRong;
    ?>
    <form action="#" method = "post">
        <table >
            <tr>
                <th colspan="3" class="label">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="chieudai" value="<?php echo "$chieuDai"; ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="chieurong" value="<?php echo "$chieuRong" ;?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Diện tích</td>
                <td><input type="text" name="dientich" value="<?php echo "$dienTich"; ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            
            <tr>
                <td colspan="3" class="hang-6"><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
        
    </form>
   
</body>
</html>