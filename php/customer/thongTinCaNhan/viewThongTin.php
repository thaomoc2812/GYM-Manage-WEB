<?php

require_once '../../connect.php';
$sdt = $_GET['user'];
$view_sql = "SELECT * FROM hoivien WHERE sdt = '$sdt'";

$result = mysqli_query($conn, $view_sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand text-warning" href="#">GYM Workout</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="../home.php?user=<?php echo $sdt ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="../goiTap.php?user=<?php echo $sdt ?>">Gói tập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="../phanHoi.php?user=<?php echo $sdt ?>">Phản hồi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning active-main" href="../thongTinCaNhan/viewThongTin.php?user=<?php echo $sdt ?>">Thông tin cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning logout-btn" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../../html/dangNhap.html">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body-home">
        <div class="topic">
            “Strength does not come <br> from physical capacity. <br> It comes from an indomitable will.”
        </div>
        <div class="person">
            -Mahatma Gandhi
        </div>
    </div>

    <form action="updateThongTin.php?user=<?php echo $sdt ?>" method="post">
        <div class="container-body">
            <h1>Thông tin cá nhân</h1>
            <input type="hidden" name="sid" value="<?php echo $row['id'] ?>" id="">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>">
            </div>

            <div class="form-group">
                <label for="ngaysinh">Ngày sinh</label>
                <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?php echo $row['ngaysinh'] ?>">
            </div>

            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $sdt ?>">
            </div>

            <div class="form-group">
                <label for="nghenghiep">Nghề nghiệp</label>
                <input type="text" id="nghenghiep" name="nghenghiep" class="form-control" value="<?php echo $row['nghenghiep'] ?>">
            </div>

            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" class="form-control" value="<?php echo $row['diachi'] ?>">
            </div>


            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

    </form>
    </div>
    <?php
    include("../../../layouts/footer_home.php");
    ?>

</body>
<script src="../../../js/script.js"></script>

</html>