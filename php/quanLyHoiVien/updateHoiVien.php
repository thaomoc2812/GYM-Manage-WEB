<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];
$nghenghiep = $_POST['nghenghiep'];
$mavantay = $_POST['mavantay'];
$loaithanhvien = $_POST['loaithanhvien'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE hoivien SET hoten = '$hoten', ngaysinh = '$ngaysinh', sdt = '$sdt', diachi = '$diachi',nghenghiep = '$nghenghiep',mavantay = '$mavantay',loaithanhvien = '$loaithanhvien' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewHoiVien.php");

};



?>