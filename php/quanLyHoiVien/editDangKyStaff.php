<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "UPDATE dangkygoitap SET trangthai = N'Đã xác nhận' WHERE id = $nvid";

if (mysqli_query($conn, $edit_sql))
{

    header("Location: viewDangKyStaff.php");
};
?>