<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width= device-width,initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      
    </head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li ><a href="../home.html">Home</a></li>
            <li><a href="../../html/admin/quanLyNhanVien.html">Quản lý nhân viên</a></li>
            <li><a href="../../html/admin/quanLyPhongTap.html">Quản lý phòng tập</a></li>
            <li><a href="../../html/admin/quanLyTrangThietBi.html">Quản lý trang thiết bị</a></li>
            <li><a href="../../html/admin/quanLyGoiTap.html">Quản lý gói tập</a></li>
            <li  class="active"><a href="../../html/admin/quanLyHoiVien.html">Quản lý hội viên</a></li>
            <li><a href="../../html/admin/xemBaoCaoThongKe.html">Xem báo cáo thông kê</a></li>
            
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 600px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
    
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../../html/admin/quanLyHoiVien/addHoiVien.html">Thêm hội viên</a></li>
            <li class="active"><a href="viewHoiVien.php">Xem danh sách hội viên </a></li>
            <li  ><a href="../../html/admin/quanLyHoiVien/searchHoiVien.html">Tìm kiếm hội viên</a></li>
            <li><a href="viewDangKy.php">Duyệt đăng ký gói tập</a></li>
            <li><a href="viewPhanHoi.php">Xem phản hồi</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h1>Danh sách hội viên </h1>       
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Nghề nghiệp</th>
                    <th>Mã vân tay</th>
                    <th>Loại thành viên</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
      
                <?php

                    //ket noi csdl
                    require_once '../connect.php';


                    $view_sql="SELECT * FROM hoivien";

                    $result = mysqli_query($conn, $view_sql);

                    while ($r = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <tr>
                            <td><?php echo $r['hoten'] ?></td>
                            <td><?php echo $r['ngaysinh'] ?></td>
                            <td><?php echo $r['sdt'] ?></td>
                            <td><?php echo $r['diachi'] ?></td>
                            <td><?php echo $r['nghenghiep'] ?></td>
                            <td><?php echo $r['mavantay'] ?></td>
                            <td><?php echo $r['loaithanhvien'] ?></td>
                            <td><a href="editHoiVien.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa hội viên này không?')" href="deleteHoiVien.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a></td>
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
