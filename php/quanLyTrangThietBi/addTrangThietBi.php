<?php
//nhan du lieu tu form
$maso = $_POST['maso'];
$tenthietbi = $_POST['tenthietbi'];
$soluong= $_POST['soluong'];
$ngaynhapve= $_POST['ngaynhapve'];
$ngaybaohanh= $_POST['ngaybaohanh'];
$xuatsu= $_POST['xuatsu'];
$tinhtrang= $_POST['tinhtrang'];

//ket noi csdl
require_once '../connect.php';



$addsql = "INSERT INTO trangthietbi
(maso,tenthietbi,soluong,ngaynhapve,ngaybaohanh,xuatsu,tinhtrang) VALUES ('$maso','$tenthietbi',$soluong, '$ngaynhapve','$ngaybaohanh','$xuatsu','$tinhtrang')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    //in thong bao thanh cong
    //header("Location: viewTrangThietBi.php");
    echo "<h1>Thêm thành công</h1>";

};

?>
