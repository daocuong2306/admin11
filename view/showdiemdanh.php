<?php
$_SESSION['lophoc'] = $_GET["idlophoc"];
echo $_SESSION['lophoc'];
foreach ($dsgv as $value){
    extract($value);
    // echo $img_path.$anh_sanpham;
    echo $name."<br>";
}

?>
            <table border="1">
                <tr>
                    <td>Tên Học sinh</td>
                    <td>SĐT</td>
                    <td>Ảnh</td>
                    <td>Trạng Thái</td>
                </tr>
                <form action="index.php?act=diemdanh&idlophoc=<?php echo $_SESSION['lophoc']; ?>" method="post" enctype="multipart/form-data">

                <?php
                $mangdd = [];
                foreach ($dssv as $value){
                    extract($value);
                    $anh="../uploadimg/".$img;
                    echo '
                        <tr>
                            <td>'.$name.'</td>
                            <td>'.$tell.'</td>
                            <td> <img src="'.$anh.'" alt=""></td>
                            <td><input type="checkbox" name="checkdd[]" value="'.$idsinhvien.'"></td>
                        </tr>
                    
                    ';
//                if($_POST[''])
                 } ?>
            </table>
                <button class="seen"  name="gui" type="submit">Gửi</button>
    <?php
    if (isset($_POST['checkdd']) && $_POST['checkdd']) {
        array_push($mangdd , $_POST['checkdd']);
        foreach ($mangdd[0] as $value) {
            insert_dd($value,$_GET['idlophoc']);
        }
        echo "thanh cong";
    }
//    array_push($mangdd , $_POST['checkdd']);
// echo $mangdd[0][1];
    ?>
                </form>
<button><a href="index.php?act=showdiemdanh&idlophoc=<?php echo $_GET['idlophoc']?>">Xem điểm danh</a></button>





