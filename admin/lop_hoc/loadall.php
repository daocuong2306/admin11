<div class="row_one">
    lớp học :
    <?php
    
        extract($lophoc);
        echo $tenlophoc."<br>";
    
     ?>
Giảng Viên:
            <?php 
            
            foreach ($dsgv as $value){
                extract($value);
                // echo $img_path.$anh_sanpham;
                echo $name."<br>";
            }
            
            ?>
           
        </div>
        SInh Viên:
        <?php 
            
            foreach ($dssv as $value){
                extract($value);
                // echo $img_path.$anh_sanpham;
                echo $name."<br>";
            }
            
            ?>
