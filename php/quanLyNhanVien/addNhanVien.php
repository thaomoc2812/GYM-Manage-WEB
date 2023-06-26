<?php
//nhan du lieu tu form
$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$vitri = $_POST['vitri'];

//ket noi csdl
require_once '../connect.php';



$addsql = "INSERT INTO nhanvien
(ten, diachi, sdt,vitri) VALUES ('$ten','$diachi','$sdt','$vitri')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    header("Location: viewNhanVien.php");

};



?>