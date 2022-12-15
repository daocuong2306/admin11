<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
<div class="contenner">
    <div class="MainList">
        <div class="header">
            <label for="check"></label>
            <input type="checkbox" hidden name="" id="check">
            <div class="menu-mobile">
                <label for="check" class="hi">
                    <img src="../img/Vector.png" alt="">
                </label>
                <div class="mau">
                    <img src="../img/image 10.png" alt="">
                    <div class="menu">
                        <div class="img_text">
                            <a href="../admin/trangchu.php"><i class="fa-solid fa-house-user"></i></a>
                            <a href="../admin/trangchu.php" id="abc">Trang chủ</a>
                        </div>
                        <div class="img_text">
                            <a href="../admin/index.php?act=lophoc" ><i class="fa-solid fa-table"></i> </a>
                            <a href="../admin/index.php?act=lophoc" id="abc">Lớp Học</a>
                        </div>
                        <?php

                        extract($_SESSION['user']);
                        if(isset($idgiaovien)) {

                        ?>
                        <div class="img_text">
                            <a href="index.php?act=listsv"> <i class="fa-solid fa-user"></i></a>
                            <a href="index.php?act=listsv" id="abc">Học Sinh</a>
                        </div>
                        <div class="img_text">
                            <a href="index.php?act=listgv"><i class="fa-solid fa-book-open-reader"></i></a>
                            <a href="index.php?act=listgv" id="abc">Giao Viên</a>
                        </div>
                        <!-- <div class="img_text">
                            <a href="./indexkhoahoc.html"><i class="fa-solid fa-book"></i></a>
                            <a href="./indexkhoahoc.html" id="abc">Khóa Học</a>
                        </div>
                        <?php                         }
                        ?>
                        <div class="img_text">
                            <a href="./indexlichhoc.html"><i class="fa-solid fa-id-card"></i></a>
                            <a href="./indexlichhoc.html" id="abc">lich hoc</a>

                        </div> -->

                    </div>
                </div>
            </div>

        </div>
        <div class="kmau">
            <div class="headding">
                <label for="check" class="icon">
                    <img src="../img/Vector.png" alt="">
                </label>
                <div class="xinchao">
                    <p>xin chào ........</p>
                    <button><a href="index.php?act=thoat">Thoat</a></button>
                </div>
            </div>
            <div class="hass">
                <h2>Cơ Sở</h2>

            </div>
            <div class="select">
                <input type="text" placeholder="Tìm kiếm trên lớp" class="_class">
                <input type="text" placeholder="Tìm kiếm Khóa học" class="_class">
                <div class="status">
                    <select name="format" class="status-item">
                        <option value="none">Trạng Thái</option>
                        <option value="finished">Finished</option>
                        <option value="runing">Runing</option>
                    </select>
                </div>
                <div>
                    <input type="text" placeholder="Giáo Viên" class="teach">
                </div>
                <div class="seasc">
                    <button>seasch</button>
                </div>

            </div>