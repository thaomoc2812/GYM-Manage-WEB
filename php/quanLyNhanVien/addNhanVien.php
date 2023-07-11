<?php
//nhan du lieu tu form
$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$vitri = $_POST['vitri'];

//ket noi csdl
require_once '../connect.php';

if (!$ten || !$diachi || !$sdt || !$vitri)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


$addsql = "INSERT INTO nhanvien
(ten, diachi, sdt,vitri) VALUES ('$ten','$diachi','$sdt','$vitri')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    header("Location: viewNhanVien.php");

};



?>