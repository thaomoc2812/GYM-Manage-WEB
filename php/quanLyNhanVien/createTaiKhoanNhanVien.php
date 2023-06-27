


<?php
//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once '../connect.php';







$search_sql = "SELECT * FROM nhanvien WHERE 
(sdt = '$sdt')
";


$result = mysqli_query($conn, $search_sql);
$q=0;


while ($r = mysqli_fetch_assoc($result))
{
    $key = $r['sdt'] ;
    if  ($sdt == $key)
    {
        $q++;
    }


};

if($q == 0)
{
    echo "<h1>Chưa có nhân viên này trong danh sách</h1>";
}

else
{
    $addsql = "UPDATE nhanvien SET matkhau = '$matkhau' WHERE sdt = $sdt";
    if( mysqli_query($conn, $addsql)){
    
        echo "<h1>Tạo tài khoản thành công</h1>";
    
    };
}



 
    ?>


