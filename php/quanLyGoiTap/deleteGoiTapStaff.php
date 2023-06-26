<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM goitap WHERE id = $nvid";

if (mysqli_query($conn, $delete_sql))
{

    header("Location: viewGoiTapStaff.php");
};

?>