<?php
require_once '../../connect.php';

$sdt = $_GET['user'];
$idgoitap = $_GET['sid'];
$ngaybatdau = $_POST['ngaybatdau'];

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r = mysqli_fetch_assoc($query))
{
    $idhoivien =$r['id'];
    
};
$add_sql="INSERT INTO dangkygoitap (idhoivien,idgoitap,ngaybatdau,trangthai) VALUES ($idhoivien,$idgoitap,'$ngaybatdau', N'Chưa được xác nhận')";

if(mysqli_query($conn, $add_sql))
{
  header("Location: viewCacGoiTapDaDangKy.php?user=$sdt");
}


?>