<div class="bentrong">

    <form action="#" id="classStu">
        <table>
            <tr class="STT">
                <td>STT</td>
                <td>Tên Lớp</td>
                <td></td>
            </tr>
            <?php
            // if(isset($idgiaovien)) {
            $i=0;
            foreach ($listlh as $lh)  {
                extract($lh);
                
                $i++;
                $load="index.php?act=loadoneclass&idlophoc=".$idlophoc;
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
            // else {
            //     //show ra nhưng lớp có học sinh theo học
            // }
            ?>

        </table>
    </form>
    <button class="check"><a href="index.php?act=addlh" class="addlh">them moi lop hoc</a></button>
</div>


</div>
</div>
