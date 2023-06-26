<?php
//nhan du lieu tu form
$mp = $_POST['maphong'];
$tp = $_POST['tenphong'];
$sl = $_POST['soluong'];
$id = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE phongtap SET maphong = '$mp', tenphong = '$tp', soluong = $sl WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewPhongTap.php");

};



?>