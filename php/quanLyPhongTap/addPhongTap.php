<?php
//nhan du lieu tu form
$mp = $_POST['maphong'];
$tp = $_POST['tenphong'];
$sl= $_POST['soluong'];

//ket noi csdl
require_once '../connect.php';



$addsql = "INSERT INTO phongtap
(maphong,tenphong,soluong) VALUES ('$mp','$tp',$sl)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    //header("Location: viewPhongTap.php");
    echo "<h1>Thêm thành công</h1>";

};



?>