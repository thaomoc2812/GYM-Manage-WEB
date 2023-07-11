<?php


$sdt = $_GET['user'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= device-width,initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../../css/style.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <a class="nav-link text-warning" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../../html/dangNhap.html">Đăng xuất</a>
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


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="viewGoiTap.php?user=<?php echo $sdt ?>">Xem danh sách các gói tập</a></li>
        <li class="active"><a href="searchGoiTap.php?user=<?php echo $sdt ?>">Tìm kiếm gói tập</a></li>
        <li><a href="viewCacGoiTapDaDangKy.php?user=<?php echo $sdt ?>">Các gói tập đã đăng ký</a></li>

      </ul>
    </div>
  </nav>
  <div class="container">
    <h1>Tìm kiếm gói tập</h1>
    <form action="viewSearchGoiTap.php?user=<?php echo $sdt ?>" method="post">
      <div class="form-group">
        <input type="text" placeholder="Nhập tên hoặc khoảng thời gian tập, giá tiền,..." id="key" class="form-control" name="key">
      </div>

      <button type="submit" class="btn btn-primary">Tìm</button>
    </form>

    <div class="container">
      <h1>Danh sách gói tập</h1>
      <table class="table table-striped">
        <thead class="thead-style">
          <tr>
            <th>Tên gói tập</th>
            <th>Thời gian</th>
            <th>Đơn vị</th>
            <th>Giá</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $key = $_POST['key'];
          require_once '../../connect.php';
          $search_sql = "SELECT * FROM goitap WHERE 
                (tengoitap LIKE '%$key%')
                OR (thoigian LIKE '%$key%')
                OR (donvi LIKE '%$key%')
                OR (gia LIKE '%$key%')";

          $result = mysqli_query($conn, $search_sql);



          while ($r = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $r['tengoitap'] ?></td>
              <td><?php echo $r['thoigian'] ?></td>
              <td><?php echo $r['donvi'] ?></td>
              <td><?php echo $r['gia'] ?></td>
              <td><a href="dangKyGoiTap.php?sid=<?php echo $r['id'] ?>&user=<?php echo $sdt ?>" class="btn btn-info">Đăng ký</a>

            </tr>
          <?php
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