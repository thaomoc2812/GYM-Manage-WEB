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

if (!$maso || !$tenthietbi || !$soluong|| !$ngaynhapve|| !$ngaybaohanh|| !$xuatsu|| !$tinhtrang )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

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
    
$addsql = "INSERT INTO trangthietbi
(maso,tenthietbi,soluong,ngaynhapve,ngaybaohanh,xuatsu,tinhtrang) VALUES ('$maso','$tenthietbi',$soluong, '$ngaynhapve','$ngaybaohanh','$xuatsu','$tinhtrang')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    //in thong bao thanh cong
    //header("Location: viewTrangThietBi.php");
    echo "<h1>Thêm thành công</h1>";

};

?>
