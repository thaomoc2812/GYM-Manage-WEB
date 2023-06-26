<?php

$id = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM phongtap WHERE id = $id";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: viewPhongTap.php");
};