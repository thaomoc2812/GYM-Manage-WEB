<?php
//nhan du lieu tu form
$tengoitap = $_POST['tengoitap'];
$thoigian = $_POST['thoigian'];
$donvi= $_POST['donvi'];
$gia= $_POST['gia'];


//ket noi csdl
require_once '../connect.php';

if (!$tengoitap || !$thoigian || !$donvi || !$gia )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


$addsql = "INSERT INTO goitap
(tengoitap,thoigian,donvi,gia) VALUES ('$tengoitap',$thoigian,'$donvi',$gia)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    //header("Location: viewGoiTap.php");
    echo "<h1>Thêm thành công</h1>";

};

?>
