<?php
//nhan du lieu tu form
$mp = $_POST['maphong'];
$tp = $_POST['tenphong'];
$sl = $_POST['soluong'];
$id = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';

$search = "SELECT * FROM phongtap WHERE (maphong = '$mp') ";

$query = mysqli_query($conn, $search);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
    if($r0['tenphong'] != $tp)
    {
        $q = 1;
    }
    
};
if($q == 1)
{
    echo "Mã phòng đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$update_sql = "UPDATE phongtap SET maphong = '$mp', tenphong = '$tp', soluong = $sl WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewPhongTap.php");

};



?>