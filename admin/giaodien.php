<div class="bentrong">

    <form action="#" id="classStu">
        <table>
            <tr class="STT">
                <td>Tên Lớp</td>
                <td>Khóa Học</td>
                <td>Trạng Thái</td>
                <td>Giảng Viên</td>
                <td>Số Lượng</td>
                <td></td>
            </tr>
            <?php
            foreach ($listlh as $lh)  {
                extract($lh);
                $load="index.php?act=loadoneclass&idlophoc=".$idlophoc;
                echo '  <tr>
                                                <td>'.$tenlophoc.'</td>
                                                <!-- <td>Khóa Học</td>
                                                <td>Trạng Thái</td>
                                                <td>Giảng Viên</td>
                                                <td>Số Lượng</td> -->
                                                <td><button class="show"><a href="'.$load.'">Xem</a></button></td>
                                             </tr>';
            }
            ?>

        </table>
    </form>
</div>


</div>
</div>
