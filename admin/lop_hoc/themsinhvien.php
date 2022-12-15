<?php


?>
<div class="showMain">
    <?php
//      extract($loadonelophoc);
//     echo '<h2>Lớp học:'.$tenlophoc.'</h2>';
//     extract($dsgv);
//     echo '<h2>Giảng Viên:'.$name.'</h2>';
    
//    $onelh = array_column($onelh, null, 'idlichhoc');
//    extract($onelh);
   
//     echo '<h2>Ngày:'.date_create()->format("d/m/y").'</h2>';
//     echo "<pre>";
//     echo print_r($onelh);
    // die();
    ?> 
    <!-- <h2>JSA-13</h2>
    <p>Đào Mạnh Cường</p> -->
    <div class="menu-list">
        <ul>
            <li><a href="../admin/index.php?act=listsv">Học Viên</a></li>
            <!-- <li><a href="../admin/index.php?act=diemdanh&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Điểm Danh</a></li> -->
            <!-- <li><a href="../admin/index.php?act=addlichhoc&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Lichj hocj</a></li> -->
            <li><a href="../admin/index.php?act=listlichhoc&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Lịch Học</a></li>
            <li><a href="">Điểm</a></li>
        </ul>
        <button class="exit">Thoát</button>
    </div>
</div>
            <table border="1">
                <tr>
                    <td>Tên Học sinh</td>
                    <td>SĐT</td>

                    <td>Ảnh</td>
                    <td>Trạng Thái</td>
                </tr>
                <form action="index.php?act=addsinhvienlop&idlophoc=<?php echo $_SESSION['lophoc']; ?>" method="post" enctype="multipart/form-data">
                
                <?php


                $mangdd = [];
                // $dsdd= array_column($dsdd, null , "idsinhvien");
                foreach ($dssv as $value){
                    extract($value);
                    $anh="../uploadimg/".$img;
                    // if(isset($dsdd[$idsinhvien]))
                    // {
                    //     $checked = "checked";
                    // } else  $checked = "";
                    echo '
                        <tr>
                            
                            <td>'.$name.'</td>
                            <td>'.$tell.'</td>
                            <td> <img src="'.$anh.'" alt=""></td>
                            <td><input type="checkbox"  name="checkdd[]" value="'.$idsinhvien.'"></td>
                        </tr>
                    
                    ';
//                if($_POST[''])
                 } ?>
            </table>
                <button class="seen"  name="gui" type="submit">Gửi</button>
                </form>
                <?php 
                if (isset($_POST['checkdd']) && $_POST['checkdd']) {
                    array_push($mangdd , $_POST['checkdd']);
                foreach ($mangdd[0] as $value) {
                // extract($idsinhvien);
                    inserths($_SESSION['lophoc'],$value);
                }}

                ?>





