<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="../html/admin/home.html">Home</a></li>
                <li><a href="../html/admin/quanLyNhanVien.html">Quản lý nhân viên</a></li>
                <li><a href="../html/admin/quanLyPhongTap.html">Quản lý phòng tập</a></li>
                <li><a href="../html/admin/quanLyTrangThietBi.html">Quản lý trang thiết bị</a></li>
                <li><a href="../html/admin/quanLyGoiTap.html">Quản lý gói tập</a></li>
                <li><a href="../html/admin/quanLyHoiVien.html">Quản lý hội viên</a></li>
                <li class="active"><a href="../html/admin/xemBaoCaoThongKe.html">Xem báo cáo thông kê</a></li>
                <li>
                    <a style="text-align: right; background-color: red;color: white;margin-left: 600px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../html/dangNhap.html">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>




    <div class="container">
        <h1>Báo cáo </h1>
        <table class="table table-striped">
            <thead class="thead-style">
                <tr>
                    <th>Họ tên</th>
                    <th>Gói tập</th>
                    <th>Ngày bắt đầu</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>

                <?php

                //ket noi csdl
                require_once 'connect.php';


                $view_dangky = "SELECT * FROM dangkygoitap";

                $result1 = mysqli_query($conn, $view_dangky);

                while ($r1 = mysqli_fetch_assoc($result1)) {
                    $idhoivien = $r1['idhoivien'];
                    $idgoitap = $r1['idgoitap'];

                    $view_hoivien = "SELECT * FROM hoivien WHERE id = $idhoivien ";

                    $result2 = mysqli_query($conn, $view_hoivien);
                    $r2 = mysqli_fetch_assoc($result2);

                    $view_goitap = "SELECT * FROM goitap WHERE id = $idgoitap";

                    $result3 = mysqli_query($conn, $view_goitap);
                    $r3 = mysqli_fetch_assoc($result3);

                    if ($r1['trangthai'] == 'Đã xác nhận') {
                ?>
                        <tr>
                            <td><?php echo $r2['hoten'] ?></td>
                            <td><?php echo $r3['tengoitap'] ?></td>
                            <td><?php echo $r1['ngaybatdau'] ?></td>
                            <td><?php echo $r3['gia'] ?></td>

                            <td>

                        </tr>
                <?php
                    }
                }
                ?>


            </tbody>
        </table>
        <h1>Thống kê doanh thu theo tháng</h1>
        <table class="table table-striped">


            <thead class="thead-style">
                <tr>
                    <th>Tháng/Năm</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //kết nối CSDL
                require_once 'connect.php';

                // Lấy danh sách các tháng và năm trong bảng dangkygoitap
                $query = "SELECT DISTINCT MONTH(ngaybatdau) AS thang, YEAR(ngaybatdau) AS nam FROM dangkygoitap WHERE trangthai = 'Đã xác nhận'";
                $result = mysqli_query($conn, $query);

                // Duyệt qua từng tháng và năm để tính tổng tiền
                while ($row = mysqli_fetch_assoc($result)) {
                    $thang = $row['thang'];
                    $nam = $row['nam'];

                    // Tính tổng tiền cho tháng và năm hiện tại
                    $query_tongtien = "SELECT SUM(goitap.gia) AS tongtien
                               FROM dangkygoitap
                               INNER JOIN goitap ON dangkygoitap.idgoitap = goitap.id
                               WHERE MONTH(ngaybatdau) = $thang AND YEAR(ngaybatdau) = $nam AND trangthai = 'Đã xác nhận'";
                    $result_tongtien = mysqli_query($conn, $query_tongtien);
                    $row_tongtien = mysqli_fetch_assoc($result_tongtien);
                    $tongtien = $row_tongtien['tongtien'];

                    // Hiển thị thông tin trong bảng
                ?>
                    <tr>
                        <td><?php echo $thang . '/' . $nam; ?></td>
                        <td><?php echo $tongtien; ?></td>
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