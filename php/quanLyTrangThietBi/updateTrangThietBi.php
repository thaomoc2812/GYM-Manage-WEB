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

$search = "SELECT * FROM trangthietbi WHERE (maso = '$maso') ";

$query = mysqli_query($conn, $search);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
    if($r0['tenthietbi'] != $tenthietbi)
    {
        $q = 1;
    }
    
};
if($q == 1)
{
    echo "Mã số thiêt bị đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}


$update_sql = "UPDATE trangthietbi SET maso = '$maso', tenthietbi = '$tenthietbi', soluong = $soluong,ngaynhapve = '$ngaynhapve', ngaybaohanh = '$ngaybaohanh', xuatsu = '$xuatsu', tinhtrang = '$tinhtrang' WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewTrangThietBi.php");

};



?>