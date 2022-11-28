
        <div class="all">
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
                    <li><a href="">Điểm Danh</a></li>
                    <li>Lịch Học</li>
                    <button id="show" onclick="showmmain()"><a href="../admin/index.php?act=lophoc">xem</a></button>
                </ul>
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
                        <td><input type="checkbox"></td>
                    </tr>
                    ';
                    }
                    ?>
                    
                </table>
            </form>
        </div>