
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
            <li ><a href="../../html/admin/home.html">Home</a></li>
            <li><a href="../../html/admin/quanLyNhanVien.html">Quản lý nhân viên</a></li>
            <li><a href="../../html/admin/quanLyPhongTap.html">Quản lý phòng tập</a></li>
            <li class="active"><a href="../../html/admin/quanLyTrangThietBi.html">Quản lý trang thiết bị</a></li>
            <li><a href="../../html/admin/quanLyGoiTap.html">Quản lý gói tập</a></li>
            <li><a href="../../html/admin/quanLyHoiVien.html">Quản lý hội viên</a></li>
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 800px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
    
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../../html/admin/quanLyTrangThietBi/addTrangThietBi.html">Thêm trang thiết bị</a></li>
            <li><a href="viewTrangThietBi.php">Xem danh sách trang thiết bị</a></li>
            <li class="active"><a href="../../html/admin/quanLyTrangThietBi/searchTrangThietBi.html">Tìm kiếm trang thiết bị</a></li>

          </ul>
        </div>
      </nav>

            <div class="container">
            <h1>Tìm kiếm trang thiết bị</h1> 
            <form action="searchTrangThietBi.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Nhập mã số, tên thiết bị, số lượng, ngày nhập về,..." id ="key" class="form-control" name="key">
                </div>

                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>      
                <table class="table table-striped">
                    <thead class="thead-style">
                        <tr>
                        <th>Mã số</th>
                        <th>Tên thiết bị</th>
                        <th>Số lượng</th>
                        <th>Ngày nhập về</th>
                        <th>Ngày bảo hành</th>
                        <th>Xuất sứ</th>
                        <th>Tình trạng</th>
                        <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //nhan du lieu tu form
                        $key = $_POST['key'];


                        //ket noi csdl
                        require_once '../connect.php';



                        $search_sql = "SELECT * FROM trangthietbi WHERE 
                        (maso LIKE '%$key%')
                        OR (tenthietbi LIKE '%$key%')
                        OR (soluong LIKE '%$key%')
                        OR (ngaynhapve LIKE '%$key%')
                        OR (ngaybaohanh LIKE '%$key%')
                        OR (xuatsu LIKE '%$key%')
                        OR (tinhtrang LIKE '%$key%')
                        ";



                        $result = mysqli_query($conn, $search_sql);

                        while ($r = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr>
                            <td><?php echo $r['maso'] ?></td>
                            <td><?php echo $r['tenthietbi'] ?></td>
                            <td><?php echo $r['soluong'] ?></td>
                            <td><?php echo $r['ngaynhapve'] ?></td>
                            <td><?php echo $r['ngaybaohanh'] ?></td>
                            <td><?php echo $r['xuatsu'] ?></td>
                            <td><?php echo $r['tinhtrang'] ?></td>
                            <td><a href="editTrangThietBi.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa trang thiết bị này không?')" href="deletePhongTap.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>

</body>
</html>