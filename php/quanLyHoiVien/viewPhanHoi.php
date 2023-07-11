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
            <li><a href="viewHoiVien.php">Xem danh sách hội viên </a></li>
            <li  ><a href="../../html/admin/quanLyHoiVien/searchHoiVien.html">Tìm kiếm hội viên</a></li>
            <li><a href="viewDangKy.php">Duyệt đăng ký gói tập</a></li>
            <li class="active"><a href="viewPhanHoi.php">Xem phản hồi</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
             
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Hội viên</th>
                    <th>Nội dung</th>
                </tr>
                </thead>
                <tbody>
      
                <?php

                    //ket noi csdl
                    require_once '../connect.php';


                    $view_phanhoi="SELECT * FROM phanhoi";

                    $result1 = mysqli_query($conn, $view_phanhoi);

                    while ($r1 = mysqli_fetch_assoc($result1))
                    {
                        $idhoivien = $r1['idhoivien'];

                        $view_hoivien="SELECT * FROM hoivien WHERE id = $idhoivien ";

                        $result2 = mysqli_query($conn, $view_hoivien);
                        $r2 = mysqli_fetch_assoc($result2);
                        ?>

                        <tr>
                            <td><?php echo $r2['hoten'] ?></td>
                            <td><?php echo $r1['noidung'] ?></td>
                            
                        </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>


    </div>
   

</body>
</html>
