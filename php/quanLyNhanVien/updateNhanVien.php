<?php
//nhan du lieu tu form
$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$vitri = $_POST['vitri'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE nhanvien SET ten = '$ten', diachi = '$diachi', sdt = '$sdt', vitri = '$vitri' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewNhanVien.php");

};



?>