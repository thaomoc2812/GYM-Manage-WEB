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
            <li ><a href="../../html/staff/home.html">Home</a></li>
            
            <li><a href="../../html/staff/quanLyPhongTap.html">Quản lý phòng tập</a></li>
            <li><a href="../../html/staff/quanLyTrangThietBi.html">Quản lý trang thiết bị</a></li>
            <li><a href="../../html/staff/quanLyGoiTap.html">Quản lý gói tập</a></li>
            <li  class="active"><a href="../../html/staff/quanLyHoiVien.html">Quản lý hội viên</a></li>
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 800px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
    
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../../html/staff/quanLyHoiVien/addHoiVien.html">Thêm hội viên</a></li>
            <li><a href="viewHoiVienStaff.php">Xem danh sách hội viên </a></li>
            <li><a href="../../html/staff/quanLyHoiVien/searchHoiVien.html">Tìm kiếm hội viên</a></li>
            <li class="active"><a href="viewDangKyStaff.php">Duyệt đăng ký gói tập</a></li>

          </ul>
        </div>
      </nav>

      <div class="container">
      <h1>Đăng ký chưa xác nhận </h1>     
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Họ tên</th>
                    <th>Gói tập</th>
                    <th>Ngày bắt đầu</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
      
                <?php

                    //ket noi csdl
                    require_once '../connect.php';


                    $view_dangky="SELECT * FROM dangkygoitap";

                    $result1 = mysqli_query($conn, $view_dangky);

                    while ($r1 = mysqli_fetch_assoc($result1))
                    {
                        $idhoivien = $r1['idhoivien'];
                        $idgoitap = $r1['idgoitap'];

                        $view_hoivien="SELECT * FROM hoivien WHERE id = $idhoivien ";

                        $result2 = mysqli_query($conn, $view_hoivien);
                        $r2 = mysqli_fetch_assoc($result2);

                        $view_goitap="SELECT * FROM goitap WHERE id = $idgoitap";

                        $result3 = mysqli_query($conn, $view_goitap);
                        $r3 = mysqli_fetch_assoc($result3);
                      
                        if($r1['trangthai'] == 'Chưa được xác nhận')
                        {
                        ?>
                        <tr>
                            <td><?php echo $r2['hoten'] ?></td>
                            <td><?php echo $r3['tengoitap'] ?></td>
                            <td><?php echo $r1['ngaybatdau'] ?></td>
                            <td><?php echo $r3['gia'] ?></td>
                            <td><?php echo $r1['trangthai'] ?></td>
                            <td><a href="editDangKyStaff.php?sid=<?php echo $r1['id'] ?>" class="btn btn-info">OK</a>
                             <a onclick="return confirm('Bạn có muốn xóa đăng ký này không?')" href="deleteDangKyStaff.php?sid=<?php echo $r1['id'] ?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                        <?php
                        }
                    }
                ?>

                </tbody>
            </table>


    </div>


    <div class="container">
      <h1>Đăng ký đã xác nhận </h1>     
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Họ tên</th>
                    <th>Gói tập</th>
                    <th>Ngày bắt đầu</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
      
                <?php

                    //ket noi csdl
                    require_once '../connect.php';


                    $view_dangky="SELECT * FROM dangkygoitap";

                    $result1 = mysqli_query($conn, $view_dangky);

                    while ($r1 = mysqli_fetch_assoc($result1))
                    {
                        $idhoivien = $r1['idhoivien'];
                        $idgoitap = $r1['idgoitap'];

                        $view_hoivien="SELECT * FROM hoivien WHERE id = $idhoivien ";

                        $result2 = mysqli_query($conn, $view_hoivien);
                        $r2 = mysqli_fetch_assoc($result2);

                        $view_goitap="SELECT * FROM goitap WHERE id = $idgoitap";

                        $result3 = mysqli_query($conn, $view_goitap);
                        $r3 = mysqli_fetch_assoc($result3);
                      
                        if($r1['trangthai'] == 'Đã xác nhận')
                        {
                        ?>
                        <tr>
                            <td><?php echo $r2['hoten'] ?></td>
                            <td><?php echo $r3['tengoitap'] ?></td>
                            <td><?php echo $r1['ngaybatdau'] ?></td>
                            <td><?php echo $r3['gia'] ?></td>
                            <td><?php echo $r1['trangthai'] ?></td>
                            <td>
                             <a onclick="return confirm('Bạn có muốn xóa đăng ký này không?')" href="deleteDangKyStaff.php?sid=<?php echo $r1['id'] ?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                        <?php
                        }
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
