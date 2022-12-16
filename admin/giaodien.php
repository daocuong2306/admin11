<div class="bentrong">

    
        <table>
            <tr class="STT">
                <td>STT</td>
                <td>Tên Lớp</td>
                <td></td>
            </tr>
            <?php
            extract($_SESSION['user']);
            if(isset($idsinhvien)){
            $lsv = sinhvien($idsinhvien);
            // print_r($_SESSION['user']);
            $i=0;
            foreach ($lsv as $lh)  {
                extract($lh);
                
                $i++;
                
                
                    $load="index.php?act=listlichhoc&idlophoc=".$idlophoc;
                
                // $giangvien=loadgv_by_idlophoc($idlophoc);
                // extract($giangvien);

                // echo "<pre>";
                // echo print_r($giangvien);

                echo '  <tr>        
                                                <td>'.$i.'</td>
                                                <td>'.$tenlophoc.'</td>
                                                <td><button class="show"><a href="'.$load.'">Xem</a></button></td>
                                             </tr>';
            } 
            
        }else{
          foreach($listlh as $value){
            $i=0;
                $i++;
            extract($value);
            $load1="index.php?act=loadoneclass&idlophoc=".$idlophoc;
            
            echo '  <tr>        
            <td>'.$i.'</td>
            <td>'.$tenlophoc.'</td> 
            <td><button class="show"><a href="'.$load1.'">Xem</a></button></td>
         </tr>';
          }?>

        
        
        <?php 
                    extract($_SESSION['user']);
                    if(isset($ID)){ ?>
                    <button class="check"><a href="index.php?act=addlh" class="addlh">thêm mới lớp học</a></button>
                    <?php }else{
                        echo "";
                    }?>
<?php
        }

            ?>
           
        </table>
    
    
    
</div>


</div>
</div>
