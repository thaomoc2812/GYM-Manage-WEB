<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$sdt= $_POST['sdt'];
$diachi= $_POST['diachi'];
$nghenghiep= $_POST['nghenghiep'];
$matkhau= $_POST['matkhau'];


//ket noi csdl
require_once '../connect.php';
if (!$hoten || !$ngaysinh || !$sdt || !$diachi|| !$nghenghiep|| !$matkhau )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
    $q=1;
    echo "<h1>Số điện thoại đã tồn tại</h1>";
    
};

$addsql = "INSERT INTO hoivien
(hoten,ngaysinh,sdt,diachi,nghenghiep,matkhau) VALUES ('$hoten','$ngaysinh','$sdt', '$diachi','$nghenghiep','$matkhau')";



if($q==0)
{
    if(mysqli_query($conn, $addsql)){
        //in thong bao thanh cong
        //header("Location: view.php");
        echo "<h1>Thêm thành công</h1>";
    
    };
}


?>
