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
    

    ?>
    <h3> Lịch Học lớp <?php echo $lophoc['tenlophoc'] ?></h3>
    
    Tên giáo viên:<?php 
            
            foreach ($gv as $value){
                extract($value);
                echo $name."<br>";
            }
            ?>
    
</div>
<table border="1">
    <tr>
<td>Ngày Học</td>
<td>Ca Học</td>
<td>Số Buổi Học</td>
<td></td>
</tr>
 <?php foreach($lichhoc as $value){ 
    $date = date_create()->format("d/m/y");
    extract($value);
    $now=date_create($ngay)->format("d/m/y");
    $x=$date==$now ? ' <td><button><a href="index.php?act=diemdanh&idlophoc='.$idlophoc.'">điểm danh</a></button></td>':"";
    // if(date_parsr($ngay) >= date_parse(date())){
    echo '
    <tr>
    <td>'.$ngay.'</td>
    <td>'.$ca.'</td>
    <td>Số Buổi Học</td>
    
    '.$x.'
    </tr>';

}
extract($lichhoc); ?>
</table>
<button><a href="index.php?act=addlichhoc&idlophoc=<?php echo $idlophoc?>&idlichhoc=<?php echo $idlichhoc?>">thêm lịch học</a></button>