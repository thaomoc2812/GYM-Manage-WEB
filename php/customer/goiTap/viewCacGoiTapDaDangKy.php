<?php

//ket noi csdl
require_once '../../connect.php';

$sdt = $_GET['user'];

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r0 = mysqli_fetch_assoc($query))
{
    $idhoivien =$r0['id'];
    
};

$view_sql="SELECT * FROM dangkygoitap WHERE idhoivien = $idhoivien ";

$result1 = mysqli_query($conn, $view_sql);


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
            <li><a href="viewGoiTap.php?user=<?php echo $sdt?>">Xem danh sách các gói tập</a></li>
            <li><a href="searchGoiTap.php?user=<?php echo $sdt?>">Tìm kiếm gói tập</a></li>
            <li class="active"><a href="viewCacGoiTapDaDangKy.php?user=<?php echo $sdt?>">Các gói tập đã đăng ký</a></li>

          </ul>
        </div>
      </nav>

      <div class="container">
     
        <h1>Danh sách các gói tập đã đăng ký</h1>       
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Tên gói tập</th>
                    <th>Thời gian</th>
                    <th>Đơn vị</th>
                    <th>Giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                while ($r1 = mysqli_fetch_assoc($result1))
                {
                  

                    $idgoitap = $r1['idgoitap'];
                    $v="SELECT * FROM goitap WHERE id = $idgoitap ";
                            
                    $result2 = mysqli_query($conn, $v);
                    while ($r2 = mysqli_fetch_assoc($result2))
                    {

                    ?>
                        <tr>    
                        <td><?php echo $r2['tengoitap'] ?></td>
                        <td><?php echo $r2['thoigian'] ?></td>
                        <td><?php echo $r2['donvi'] ?></td>
                        <td><?php echo $r2['gia'] ?></td>
                        <td><?php echo $r1['ngaybatdau'] ?></td>
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
   