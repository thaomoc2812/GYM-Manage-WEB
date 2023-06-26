<?php


$sdt = $_GET['user'];



?>

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

      <header>
        <div>
            <img style="width: 100%;" src="../../../images/logo.png">
        </div>
      </header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../home.php?user=<?php echo $sdt?>">Home</a></li>
            <li class="active"><a href="../goiTap.php?user=<?php echo $sdt?>">Gói tập</a></li>
            <li><a href="../phanHoi.php?user=<?php echo $sdt?>">Phản hồi</a></li>
            <li><a href="../thongTinCaNhan/viewThongTin.php?user=<?php echo $sdt?>">Thông tin cá nhân</a></li>
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 1100px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li ><a href="viewGoiTap.php?user=<?php echo $sdt?>">Xem danh sách các gói tập</a></li>
            <li class="active"><a href="searchGoiTap.php?user=<?php echo $sdt?>">Tìm kiếm gói tập</a></li>
            <li><a href="viewCacGoiTapDaDangKy.php?user=<?php echo $sdt?>">Các gói tập đã đăng ký</a></li>

          </ul>
        </div>
      </nav>
      <div class="container">
        <h1>Tìm kiếm gói tập</h1>
        <form action="viewSearchGoiTap.php?user=<?php echo $sdt?>" method="post">
            <div class="form-group">
                <input type="text" placeholder="Nhập tên hoặc khoảng thời gian tập, giá tiền,..." id ="key" class="form-control" name="key">
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
                $search_sql="SELECT * FROM goitap WHERE 
                (tengoitap LIKE '%$key%')
                OR (thoigian LIKE '%$key%')
                OR (donvi LIKE '%$key%')
                OR (gia LIKE '%$key%')";
                
                $result = mysqli_query($conn, $search_sql);
                
                
               
                while ($r = mysqli_fetch_assoc($result))
                {
                  ?>
                        <tr>
                            <td><?php echo $r['tengoitap'] ?></td>
                            <td><?php echo $r['thoigian'] ?></td>
                            <td><?php echo $r['donvi'] ?></td>
                            <td><?php echo $r['gia'] ?></td>
                            <td><a href="dangKyGoiTap.php?sid=<?php echo $r['id']?>&user=<?php echo $sdt?>" class="btn btn-info">Đăng ký</a>
                             
                        </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>


    </div>
    <style>
    .header{
        position: fixed;
    }
    .thead-style {
        background-color: black;
        color: white;
    }
    </style>

</body>
</html>
       