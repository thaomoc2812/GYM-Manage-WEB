<?php

//ket noi csdl
require_once '../../connect.php';

$sdt = $_GET['user'];

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r0 = mysqli_fetch_assoc($query)) {
  $idhoivien = $r0['id'];
};

$view_sql = "SELECT * FROM dangkygoitap WHERE idhoivien = $idhoivien ";

$result1 = mysqli_query($conn, $view_sql);


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
            <a class="nav-link text-warning" href="../thongTinCaNhan/viewThongTin.php?user=<?php echo $sdt ?>">Thông tin cá nhân</a>
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


  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="viewGoiTap.php?user=<?php echo $sdt ?>">Xem danh sách các gói tập</a></li>
        <li><a href="searchGoiTap.php?user=<?php echo $sdt ?>">Tìm kiếm gói tập</a></li>
        <li class="active"><a href="viewCacGoiTapDaDangKy.php?user=<?php echo $sdt ?>">Các gói tập đã đăng ký</a></li>

      </ul>
    </div>
  </nav> -->

  <body>
    <div class="list-group">
      <a href="viewGoiTap.php?user=<?php echo $sdt ?>" class="list-group-item">Xem danh sách các gói tập</a>
      <a href="searchGoiTap.php?user=<?php echo $sdt ?>" class="list-group-item ">Tìm kiếm gói tập</a>
      <a href="viewCacGoiTapDaDangKy.php?user=<?php echo $sdt ?>" class="list-group-item active">Các gói tập đã đăng ký</a>
    </div>
  </body>

  <div class="container-body">

    <h1>Danh sách các gói tập đã đăng ký</h1>
    <table class="table table-striped">
      <thead class="thead-style">
        <tr>
          <th>Tên gói tập</th>
          <th>Thời gian</th>
          <th>Đơn vị</th>
          <th>Giá</th>
          <th>Ngày bắt đầu</th>
          <th>Ngày kết thúc</th>
          <th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>

        <?php
        while ($r1 = mysqli_fetch_assoc($result1)) {


          $idgoitap = $r1['idgoitap'];
          $v = "SELECT * FROM goitap WHERE id = $idgoitap ";

          $result2 = mysqli_query($conn, $v);
          while ($r2 = mysqli_fetch_assoc($result2)) {

        ?>
            <tr>
              <td><?php echo $r2['tengoitap'] ?></td>
              <td><?php echo $r2['thoigian'] ?></td>
              <td><?php echo $r2['donvi'] ?></td>
              <td><?php echo $r1['gia'] ?></td>
              <td><?php echo $r1['ngaybatdau'] ?></td>
              <td><?php echo $r1['ngayketthuc'] ?></td>
              <td><?php echo $r1['trangthai'] ?></td>
            </tr>
        <?php
          }
        }
        ?>

      </tbody>
    </table>


  </div>
  <style>
    .header {
      position: fixed;
    }

    .thead-style {
      background-color: black;
      color: white;
    }
  </style>

  <?php
  include("../../../layouts/footer_home.php");
  ?>
</body>
<script src="../../../js/script.js"></script>

</html>