<?php
//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];
$confirm = $_POST['confirm'];


//ket noi csdl
require_once 'connect.php';

if (!$sdt || !$matkhau )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (!preg_match("/^[0-9]{10}$/", $sdt)) {
        echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


    if ($confirm != $matkhau )
    {
        echo "Xác nhận mật khẩu chưa khớp. <a href='javascript: history.go(-1)'>Trở lại</a>";
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
(sdt,matkhau) VALUES ('$sdt','$matkhau')";



if($q==0)
{
    if(mysqli_query($conn, $addsql)){
        //in thong bao thanh cong
        echo "<h1>Đăng ký thành công</h1>";
    
    };
}
