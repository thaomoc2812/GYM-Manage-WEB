<?php
//nhan du lieu tu form
$tengoitap = $_POST['tengoitap'];
$thoigian = $_POST['thoigian'];
$donvi= $_POST['donvi'];
$gia= $_POST['gia'];
$id = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE goitap SET tengoitap = '$tengoitap', thoigian = $thoigian, donvi = '$donvi',gia = $gia WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewGoiTapStaff.php");

};



?>