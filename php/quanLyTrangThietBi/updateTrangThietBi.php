<?php
//nhan du lieu tu form
$maso = $_POST['maso'];
$tenthietbi = $_POST['tenthietbi'];
$soluong= $_POST['soluong'];
$ngaynhapve= $_POST['ngaynhapve'];
$ngaybaohanh= $_POST['ngaybaohanh'];
$xuatsu= $_POST['xuatsu'];
$tinhtrang= $_POST['tinhtrang'];
$id = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE trangthietbi SET maso = '$maso', tenthietbi = '$tenthietbi', soluong = $soluong,ngaynhapve = '$ngaynhapve', ngaybaohanh = '$ngaybaohanh', xuatsu = '$xuatsu', tinhtrang = '$tinhtrang' WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewTrangThietBi.php");

};



?>