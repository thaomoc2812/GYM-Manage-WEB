<?php

$id = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM goitap WHERE id = $id";

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
        <h1>Sửa thông tin gói tập</h1>
        <form action="updateGoiTap.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
                <label for="tengoitap">Tên gói tập</label>
                <input type="text" id ="tengoitap" class="form-control" name="tengoitap" value="<?php echo $row['tengoitap']?>">
            </div>

            <div class="form-group">
                <label for="thoigian">Thời gian</label>
                <input type="int" name="thoigian" id="thoigian" class="form-control"  value="<?php echo $row['thoigian']?>">
            </div>

            <div class="form-group">
                <label for="donvi">Đơn vị</label>
                <input type="text" id="donvi" name="donvi" class="form-control" value="<?php echo $row['donvi']?>">
            </div>

            <div class="form-group">
                <label for="gia">Giá</label>
                <input type="int" id="gia" name="gia" class="form-control" value="<?php echo $row['gia']?>">
            </div>

            

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>