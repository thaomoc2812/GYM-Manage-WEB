<?php
//nhan du lieu tu form
$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$vitri = $_POST['vitri'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';

if (!preg_match("/^[0-9]{10}$/", $sdt)) {
    echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}



$search_khach = "SELECT * FROM nhanvien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
$q=1;
echo "Số điện thoại đã tồn tại. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;

};

$update_sql = "UPDATE nhanvien SET ten = '$ten', diachi = '$diachi', sdt = '$sdt', vitri = '$vitri' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewNhanVien.php");

};



?>