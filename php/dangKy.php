<?php
//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once 'connect.php';

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


?>
