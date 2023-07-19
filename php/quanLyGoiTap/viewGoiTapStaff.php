<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= device-width,initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="../../js/script_admin.js"></script>
  <link rel="stylesheet" href="../../css/dashMain.css">
  <link rel="stylesheet" href="../../css/style2.css">
  <link rel="stylesheet" href="../../css/entypo.css">

</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

  <div class="page-container sidebar-collapsed" id="navbarcollapse">

    <div class="sidebar-menu">

      <header class="logo-env">

        <!-- logo -->


        <!-- logo collapse icon -->
        <div class="sidebar-collapse" onclick="collapseSidebar()">
          <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
            <i class="entypo-menu"></i>
          </a>
        </div>
      </header>
      <ul id="main-menu" class="">

        <li id="dash"><a href="../../html/staff/home.php"><i class="entypo-gauge"></i><span>Home</span></a></li>

        <!-- <li id="regis"><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a> -->

        <!-- <li id="paymnt"><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li> -->

        <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->

        <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Quản lý phòng tập</span></a>

          <ul id="roomExpand">
            <li class="active">
              <a href="../../html/staff/quanLyPhongTap/addPhongTap.html"><span>Thêm phòng tập</span></a>
            </li>

            <li><a href="../../php/quanLyPhongTap/viewPhongTapStaff.php"><span>Xem danh sách phòng tập</span></a></li>
            <li><a href="../../html/staff/quanLyPhongTap/searchPhongTap.html"><span>Tìm kiếm phòng tập</span></a></li>

          </ul>

        <li class="" id="devicehassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Quản lý trang thiết bị</span></a>

          <ul id="deviceExpand">
            <li class="active">
              <a href="../../html/staff/quanLyTrangThietBi/addTrangThietBi.html"><span>Thêm trang thiết bị</span></a>
            </li>

            <li>
              <a href="../../php/quanLyTrangThietBi/viewTrangThietBiStaff.php"><span>Xem danh sách trang thiết bị</span></a>
            </li>

            <li>
              <a href="../../html/staff/quanLyTrangThietBi/searchTrangThietBi.html"><span>Tìm kiếm trang thiết bị</span></a>
            </li>

          </ul>

        <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Quản lý gói tập</span></a>

          <ul id="packageExpand">
            <li class="active">
              <a href="../../html/staff/quanLyGoiTap/addGoiTap.html"><span>Thêm gói tập</span></a>
            </li>

            <li>
              <a href="../../php/quanLyGoiTap/viewGoiTapStaff.php"><span>Xem danh sách gói tập</span></a>
            </li>

            <li>
              <a href="../../html/staff/quanLyGoiTap/searchGoiTap.html"><span>Tìm kiếm gói tập</span></a>
            </li>

          </ul>

        </li>

        <li class="" id="memberhassubopen"><a href="#" onclick="memberExpand(5)"><i class="entypo-star"></i><span>Quản lý hội viên</span></a>

          <ul id="memExpand">
            <li class="active">
              <a href="../../html/staff/quanLyHoiVien/addHoiVien.html"><span>Thêm hội viên</span></a>
            </li>

            <li>
              <a href="../../php/quanLyHoiVien/viewHoiVienStaff.php"><span>Xem danh sách hội viên</span></a>
            </li>

            <li>
              <a href="../../html/staff/quanLyHoiVien/searchHoiVien.html"><span>Tìm kiếm hội viên</span></a>
            </li>

            <li>
              <a href="../../php/quanLyHoiVien/viewDangKyStaff.php"><span>Duyệt đăng ký gói tập</span></a>
            </li>

          </ul>

        </li>

        <!-- <li id="adminprofile"><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Xem báo báo thống kê</span></a></li> -->

        <li><a href="../../html/dangNhap.html"><i class="entypo-logout"></i><span>Đăng xuất</span></a></li>

      </ul>
    </div>

    <div class="main-content">

      <div class="row">

        <!-- Profile Info and Notifications -->
        <div class="col-md-6 col-sm-8 clearfix">

        </div>


        <!-- Raw Links -->
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">

          <ul class="list-inline links-list pull-right">

            <!-- <li>Welcome <?php echo $_SESSION['full_name']; ?>
                        </li> -->

            <li>
              <a href="logout.php">
                Log Out <i class="entypo-logout right"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>


      <hr>

    </div>


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

          //ket noi csdl
          require_once '../connect.php';


          $view_sql = "SELECT * FROM goitap";

          $result = mysqli_query($conn, $view_sql);

          while ($r = mysqli_fetch_assoc($result)) {
          ?>

            <tr>
              <td><?php echo $r['tengoitap'] ?></td>
              <td><?php echo $r['thoigian'] ?></td>
              <td><?php echo $r['donvi'] ?></td>
              <td><?php echo $r['gia'] ?></td>
              <td><a href="editGoiTapStaff.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa trang thiết bị này không?')" href="deleteGoiTapStaff.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>


    </div>
    <style>
      .thead-style {
        background-color: black;
        color: white;
      }
    </style>
</body>

</html>