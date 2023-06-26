<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$nghenghiep= $_POST['nghenghiep'];
$diachi= $_POST['diachi'];
$sdt = $_POST['sdt'];
$id = $_POST['sid'];


//ket noi csdl
require_once '../../connect.php';



$update_sql = "UPDATE hoivien SET hoten = '$hoten', ngaysinh = '$ngaysinh', sdt = '$sdt',nghenghiep = '$nghenghiep', diachi = '$diachi' WHERE id = $id";

$addsql = "INSERT INTO hoivien (hoten,ngaysinh,sdt,nghenghiep,diachi) VALUES ('$hoten','$ngaysinh','$sdt','$nghenghiep','$diachi')";

//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    echo "<h1>Cập nhật thành công</h1>";

}



else{ 

    //thuc thi cau lenh them
    if(mysqli_query($conn, $addsql)){
        echo "<h1>Cập nhật thành công</h1>";

    };

}


?>