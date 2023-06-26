<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM hoivien WHERE id = $nvid";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: viewHoiVien.php");
};
?>