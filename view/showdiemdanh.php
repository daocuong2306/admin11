<?php
$_SESSION['lophoc'] = $_GET["idlophoc"];
echo $_SESSION['lophoc'];
foreach ($dsgv as $value){
    extract($value);
    // echo $img_path.$anh_sanpham;
    echo $name."<br>";
}

?>
<form action="" id="class">
            <table border="1">
                <tr>
                    <td>Tên Học sinh</td>
                    <td>SĐT</td>
                    <td>Ảnh</td>
                    <td>Trạng Thái</td>
                </tr>
                <form action="index.php?act=diemdanh&idlophoc=<?php echo $_SESSION['lophoc']; ?>" method="post">

                <?php

                foreach ($dssv as $value){
                    extract($value);
                    $anh="../uploadimg/".$img;
                    echo '
                        <tr>
                        <td>'.$name.'</td>
                        <td>'.$tell.'</td>
                        <td> <img src="'.$anh.'" alt=""></td>
                        <td><input type="checkbox" name="checkdd"></td>
                        </tr>
                    
                    ';
                    ?>
                    </table>

    <button class="seen" type="submit">Gửi</button>


                </form>
                      <?php  $x=$_POST['checkdd']=="on" ?  $idsinhvien : "";

                }
                  echo $x;
                ?>




        </form>
