


<?php
//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once '../connect.php';







$search_sql = "SELECT * FROM taikhoan WHERE 
(sdt = '$sdt')
";


$result = mysqli_query($conn, $search_sql);
$q=0;


while ($r = mysqli_fetch_assoc($result))
{
    $key = $r['sdt'] ;
    if  ($sdt == $key)
    {
        echo "<h1>Số điện thoại này đã tồn tại</h1>";
        $q++;
        break;
    }


};

if($q==0)
{
    $addsql = "INSERT INTO taikhoan(sdt,matkhau) VALUES ('$sdt','$matkhau')";
    if( mysqli_query($conn, $addsql)){
    
        echo "<h1>Tạo tài khoản thành công</h1>";
    
    };
}



 
    ?>


