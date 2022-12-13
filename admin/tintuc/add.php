<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thêm mới tin tức</h1>
    <form action="index.php?act=addtt" method="post">
        <label for="">tiêu đề</label> : <input type="text" name="tieude" id=""> <br>
        <label for="">nội dung</label> : <textarea name="noidung" id="" cols="30" rows="10"></textarea> <br>

        <input type="submit" name="themmoi" id="" value="thêm mới">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listtt"><input type="button" name="" id="" value="danh sách"></a>
    </form>
    <?php
        if(isset($thongbao)&& $thongbao!= ""){
            echo $thongbao;
        }
        ?>
</body>
</html>