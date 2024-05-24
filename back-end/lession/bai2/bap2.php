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
    $diemhk1 = isset($_POST['diemhk1']) ? (float)$_POST['diemhk1'] : 0 ;
    $diemhk2 = isset($_POST['diemhk2']) ? (float)$_POST['diemhk2'] : 0;

    // Tính điểm trung bình
    $diemtrungbinh = ($diemhk1 + $diemhk2) / 2;

    // Xác định kết quả
    $ketqua = ($diemtrungbinh >= 5) ? "Đạt" : "Không đạt";

    // Xác định xếp loại học lực
    if ($diemtrungbinh >= 8) {
        $xeploai = "Giỏi";
    } elseif ($diemtrungbinh >= 6.5) {
        $xeploai = "Khá";
    } elseif ($diemtrungbinh >= 5) {
        $xeploai = "Trung bình";
    } else {
        $xeploai = "Yếu";
    }
    ?>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu từ form
    $diemToan =  isset($_POST['diemToan']) ?(float)$_POST['diemToan']: 0;
    $diemLy = isset($_POST['diemLy'])?(float)$_POST['diemLy']:0;
    $diemHoa =isset($_POST['diemHoa'])? (float)$_POST['diemHoa'] : 0;
    $diemChuan = isset($_POST['diemChuan'])? (float)$_POST['diemChuan']:0;    
    // diem tong
    $tongdiem = (float) ($diemToan+$diemLy+$diemHoa);

    if($tongdiem>=$diemChuan){
        $ketquathi = "dat";
    }
    else{
        $ketquathi ="khong dat";
    }
}
?>

<form  action="#" method="post">
        <table >
            <tr>
                <th colspan="3" class="label">KẾT QUẢ HỌC TẬP</th>
            </tr>
            <tr>
                <td>Điểm HK1</td>
                <td><input type="text" name="diemhk1" value="<?php echo $diemhk1; ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Điểm HK2</td>
                <td><input type="text" name="diemhk2" value="<?php echo $diemhk2; ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Điểm trung bình</td>
                <td><input type="text" name="diemtrungbinh" value="<?php echo number_format($diemtrungbinh, 2); ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td><input type="text" name="ketqua" value="<?php echo $ketqua; ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Xếp loại học lực</td>
                <td><input type="text" name="xeploaihocluc" value="<?php echo $xeploai; ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td colspan="3" class="hang-6"><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <div> <br></div>
    <form action="#" method="post">
        <table >
            <tr>
                <th colspan="3" class="label">KẾT QUẢ THI ĐẠI HỌC</th>
            </tr>
            <tr>
                <td>Toán</td>
                <td><input type="text" name="diemToan" value="<?php echo $diemToan; ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Lý</td>
                <td><input type="text" name="diemLy" value="<?php echo $diemLy; ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Hóa</td>
                <td><input type="text" name="diemHoa" value="<?php echo $diemHoa ?>"></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Điểm chuẩn</td>
                <td><input type="text" name="diemChuan" value="<?php echo $diemChuan; ?>" ></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Tổng điểm</td>
                <td><input type="text" name="tongdiem" value="<?php echo $tongdiem ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td>Kết quả thi</td>
                <td><input type="text" name="ketquathi" value="<?php echo $ketquathi; ?>" readonly></td>
                <td class="cot-3"></td>
            </tr>
            <tr>
                <td colspan="3" class="hang-6"><input type="submit" name="submit" value="Xem kết quả"></td>
            </tr>
        </table>
    </form>
   

   
</body>
</html>
