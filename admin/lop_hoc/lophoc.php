        <?php
            $_SESSION['lophoc'] = $_GET["idlophoc"];
            echo $_SESSION['lophoc'];
 ?>        <div class="all">
            <div class="showMain">
                <h2>JSA-13</h2>
            <?php 
            
            foreach ($dsgv as $value){
                extract($value);
                // echo $img_path.$anh_sanpham;
                echo $name."<br>";
            }
         
            ?>
           
            <div class="menu-list">
                <ul>
                    <li>Học Viên</li>
                    <li>Giảng Viên</li>
                    <li><a href="../admin/index.php?act=diemdanh&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Điểm Danh</a></li>
                    <li><a href="../admin/index.php?act=listlichhoc&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Lịch Học</a></li>
                    
                    <?php 
                    extract($_SESSION['user']);
                    if(isset($ID)){ ?>
                    <li><a href="index.php?act=addsinhvienlop" class="addlh">thêm học vinh vào lớp</a></button></li>
                    <?php }else{
                        echo "";
                    }?>
                </ul>
                <button id="show" onclick="showmmain()"><a href="../admin/index.php?act=lophoc">thoát lớp</a></button>
            </div>
            <form action="" id="class">
                <table border="1">
                    <tr>
                        <td>Học Sinh</td>
                        <td>SDT</td>
                        <td>Địa chỉ</td>
                        <td>Ảnh</td>
                        <td></td>
                       
                    </tr>
                    <?php 
            
                    foreach ($dssv as $value){ 
                        extract($value);
                        $anh="../uploadimg/".$img;
                    echo '
                    <tr>
                        <td>'.$name.'</td>
                        <td>'.$tell.'</td>
                        <td>'.$dress.'</td>
                        <td> <img src="'.$anh.'" alt=""></td>
                        <td><button>Sửa</button></td>
                    </tr>
                    ';
                    }
                    ?>
                    
                </table>
            </form>
        </div>