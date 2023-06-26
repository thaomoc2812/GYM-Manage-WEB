<?php

$id = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM phongtap WHERE id = $id";

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
        <h1>Sửa thông tin phòng tập</h1>
        <form action="updatePhongTap.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
                <label for="maphong">Mã phòng</label>
                <input type="text" id ="maphong" class="form-control" name="maphong" value="<?php echo $row['maphong']?>">
            </div>

            <div class="form-group">
                <label for="tenphong">Tên phòng</label>
                <input type="text" name="tenphong" id="tenphong" class="form-control"  value="<?php echo $row['tenphong']?>">
            </div>

            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="int" id="soluong" name="soluong" class="form-control" value="<?php echo $row['soluong']?>">
            </div>


            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>