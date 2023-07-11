<?php
//nhan du lieu tu form
$mp = $_POST['maphong'];
$tp = $_POST['tenphong'];
$sl= $_POST['soluong'];

//ket noi csdl
require_once '../connect.php';

if (!$mp || !$tp || !$sl )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

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
    
$addsql = "INSERT INTO phongtap
(maphong,tenphong,soluong) VALUES ('$mp','$tp',$sl)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    //header("Location: viewPhongTap.php");
    echo "<h1>Thêm thành công</h1>";

};



?>