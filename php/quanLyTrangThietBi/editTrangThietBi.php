<?php

$id = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM trangthietbi WHERE id = $id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

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
<div class="container">
        <h1>Sửa thông tin trang thiết bị</h1>
        <form action="updateTrangThietBi.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
                <label for="maso">Mã số</label>
                <input type="text" id ="maso" class="form-control" name="maso" value="<?php echo $row['maso']?>">
            </div>

            <div class="form-group">
                <label for="tenthietbi">Tên phòng</label>
                <input type="text" name="tenthietbi" id="tenthietbi" class="form-control"  value="<?php echo $row['tenthietbi']?>">
            </div>

            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="int" id="soluong" name="soluong" class="form-control" value="<?php echo $row['soluong']?>">
            </div>

            <div class="form-group">
                <label for="ngaynhapve">Ngày nhập về</label>
                <input type="date" id="ngaynhapve" name="ngaynhapve" class="form-control" value="<?php echo $row['ngaynhapve']?>">
            </div>

            <div class="form-group">
                <label for="ngaybaohanh">Ngày bảo hành</label>
                <input type="date" id="ngaybaohanh" name="ngaybaohanh" class="form-control" value="<?php echo $row['ngaybaohanh']?>">
            </div>


            <div class="form-group">
                <label for="xuatsu">Xuất xứ</label>
                <input type="text" id="xuatsu" name="xuatsu" class="form-control" value="<?php echo $row['xuatsu']?>">
            </div>

            <div class="form-group">
                <label for="tinhtrang">Tình trạng</label>
                <input type="text" id="tinhtrang" name="tinhtrang" class="form-control" value="<?php echo $row['tinhtrang']?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>