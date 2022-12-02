<div class="row_one">
    <!-- lớp học :
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
            
            ?> -->
            <?php 
            foreach($listlichhoc as $value){
                extract($value);
                echo'
                ngay: '.$ngay.'
                ca :'.$ca.'
                <br>
                ';
            }
            ?>
            <table>
                <tr>
                    <td>ngày</td>
                    <td>lớp</td>
                    <td>ca</td>
                    <td>giảng viên</td>
                </tr>
                <?php 
                foreach($listlichhoc as $value){
                    extract($value);
                    
                    echo $idlophoc;
                    
                    $lophoc=loadone($idlophoc);
                    extract($lophoc);
                    
                    $giaovien=loadgv_by_idlophoc($idlophoc);
                    extract($giaovien);

                    echo "<pre>";
                    echo print_r($value);
                    echo print_r($lophoc);
                    echo print_r($giaovien);
                    
                    echo '
                    <tr>
                    <td>'.$ngay.'</td>
                    <td>'.$tenlophoc.'</td>
                    <td>'.$ca.'</td>
                      <td>'.$name.'</td>
                </tr>
                    ';
                }
                
                ?>
                <tr>
                    <td>ngày</td>
                    <td>lớp</td>
                    <td>ca</td>
                    <td>giảng viên</td>
                </tr>
                
            </table>
           
</div>