<?php
require_once '../../connect.php';

$sdt = $_GET['user'];
$idgoitap = $_GET['sid'];
$ngaybatdau = $_POST['ngaybatdau'];

if (!$ngaybatdau )
    {
        echo "Vui lòng nhập ngày bắt đầu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r = mysqli_fetch_assoc($query))
{
    $idhoivien =$r['id'];
    
};

$search_goitap = "SELECT * FROM goitap WHERE (id = '$idgoitap')";
$query_goitap = mysqli_query($conn, $search_goitap);
$g = mysqli_fetch_assoc($query_goitap);
$gia = $g['gia'];
$tengoitap = $g['tengoitap'];
$ngayketthuc = $ngaybatdau;

if($g['donvi'] == 'buổi')
{
    $ngayketthuc = date('Y-m-d',strtotime('+'.$g['thoigian'].'day',strtotime($ngayketthuc)));

}
if($g['donvi'] == 'tháng')
{
    $ngayketthuc = date('Y-m-d',strtotime('+'.$g['thoigian'].'month',strtotime($ngayketthuc)));

}


$add_sql="INSERT INTO dangkygoitap (idhoivien,idgoitap,tengoitap,ngaybatdau,ngayketthuc,gia,trangthai) VALUES ($idhoivien,$idgoitap,'$tengoitap','$ngaybatdau','$ngayketthuc',$gia, N'Chưa được xác nhận')";

if(mysqli_query($conn, $add_sql))
{
  header("Location: viewCacGoiTapDaDangKy.php?user=$sdt");
}


?>
