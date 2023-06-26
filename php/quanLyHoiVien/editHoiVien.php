<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM hoivien WHERE id = $nvid";

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
        <h1>Sửa thông tin nhân viên</h1>
        <form action="updateHoiVien.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id ="thotenen" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
            </div>

            <div class="form-group">
                <label for="ngaysinh">Ngày sinh</label>
                <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?php echo $row['ngaysinh']?>">
            </div>

            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $row['sdt']?>">
            </div>

            <div class="form-group">
              <label for="diachi">Địa chỉ</label>
              <input type="text" id="diachi" name="diachi" class="form-control" value="<?php echo $row['diachi']?>">
          </div>

          <div class="form-group">
              <label for="nghenghiep">Nghề nghiệp</label>
              <input type="text" id="nghenghiep" name="nghenghiep" class="form-control" value="<?php echo $row['nghenghiep']?>">
          </div>

          <div class="form-group">
              <label for="mavantay">Mã vân tay</label>
              <input type="text" id="mavantay" name="mavantay" class="form-control" value="<?php echo $row['mavantay']?>">
          </div>

          <div class="form-group">
              <label for="loaithanhvien">Loại thành viên</label>
              <input type="text" id="loaithanhvien" name="loaithanhvien" class="form-control" value="<?php echo $row['loaithanhvien']?>">
          </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>