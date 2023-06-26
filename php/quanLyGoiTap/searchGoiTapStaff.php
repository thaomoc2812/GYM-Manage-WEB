
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
            <li class="active"><a href="../../html/staff/quanLyGoiTap.html">Quản lý gói tập</a></li>
            <li><a href="../../html/staff/quanLyHoiVien.html">Quản lý hội viên</a></li>
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 950px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
    
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../../html/staff/quanLyGoiTap/addGoiTap.html">Thêm gói tập</a></li>
            <li><a href="viewGoiTapStaff.php">Xem danh sách gói tập</a></li>
            <li class="active"><a href="../../html/staff/quanLyGoiTap/searchGoiTap.html">Tìm kiếm gói tập</a></li>

          </ul>
        </div>
      </nav>

            <div class="container">
            <h1>Tìm kiếm gói tập</h1> 
            <form action="searchGoiTapStaff.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Nhập tên gói tập, thời gian, theo buổi hay tháng, giá" id ="key" class="form-control" name="key">
                </div>

                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>      
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
                        //nhan du lieu tu form
                        $key = $_POST['key'];


                        //ket noi csdl
                        require_once '../connect.php';



                        $search_sql = "SELECT * FROM goitap WHERE 
                        (tengoitap LIKE '%$key%')
                        OR (thoigian LIKE '%$key%')
                        OR (donvi LIKE '%$key%')
                        OR (gia LIKE '%$key%')
                        ";



                        $result = mysqli_query($conn, $search_sql);

                        while ($r = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr>
                            <td><?php echo $r['tengoitap'] ?></td>
                            <td><?php echo $r['thoigian'] ?></td>
                            <td><?php echo $r['donvi'] ?></td>
                            <td><?php echo $r['gia'] ?></td>
                            <td><a href="editGoiTapStaff.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa trang thiết bị này không?')" href="deleteGoiTapStaff.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>

</body>
</html>