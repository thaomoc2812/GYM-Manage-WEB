<?php

$id = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM trangthietbi WHERE id = $id";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: viewTrangThietBiStaff.php");
};