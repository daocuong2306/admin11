<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="rowformtile" style="background-color: blue; 
padding-left:40px;
color:white;
font-size:40px;
boder-radius:5px;
border-radius: 5px;
">
    <?php 
    
extract($lophoc)    
    ?>
    <h3>Tạo Lịch Học lớp <?php echo $tenlophoc ?></h3>
    
</div>
<div class="rowformcontenr">
    <form action="index.php?act=addlichhoc&idlophoc=<?php echo $idlophoc?>" method="post"  >
        
    <!-- <select name="idlophoc">
                <?php
                // $_POST['idlophoc']=$_GET['idlophoc']
                // foreach ($listlh as $lophoc) {
                //     extract($lophoc);
                //     echo '<option value="'.$idlophoc.'"> '.$tenlophoc.' </option>';

                // } 
                ?>
    </select><br> -->
    Ngày học : <input type="date" name="ngay" id="">
    ca : <input type="text" name="ca" id="">
    số buổi học <input type="number" min="0" name="sobuoihoc" id="">
        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listlichhoc&idlophoc=<?php echo $idlophoc;?>"><input type="button" name="" id="" value="danh sách"></a>
        </div>
        <?php
        if(isset($thongbao)&& $thongbao!= ""){
            echo $thongbao;
        }
        ?>
    </form>
</div>

</div>

</div>

</body>
</html>