</div>
<div class="all">
    <div class="showMain">
        <h2>JSA-13</h2>
        <p>Đào Mạnh Cường</p>
        <div class="menu-list">
            <ul>
                <li><a href="../admin/index.php?act=listsv">Học Viên</a></li>
                <li> <a href="../admin/index.php?act=lichhoc">Lịch Học</a></li>
                <li><a href="../admin/index.php?act=diemdanh">Điểm Danh</a></li>
                <li><a href="">Điểm</a></li>
            </ul>
            <button class="exit">Thoát</button>
        </div>

        <form action="" id="class">
            <table border="1">
                <tr>
                    <td>Học Sinh</td>
                    <td>SDT</td>
                    <td>Tuổi</td>
                    <td>ảnh</td>
                    <td>Địa chỉ</td>
                    <td></td>
                </tr>
                <?php
                foreach($sinhvien as $value){
                    extract($value);
                    $suasv="index.php?act=suasv&id=".$idsinhvien;
                             $xoasv="index.php?act=xoasv&id=".$idsinhvien;
                             $avatar = "../uploadimg/".$img;
                    $anh="../uploadimg/".$img;
                    echo'
                    <tr>
                    <td>'.$name.'</td>
                    <td>'.$tell.'</td>
                    <td>'.$age.'</td>
                    <td><img src="'.$anh.'"></td>
                    <td>'.$dress.'</td>
                    <td><button class="edit" ><a href="'.$suasv.'">sửa</a></button></td>
                    <td><button class="edit" ><a href="'.$xoasv.'">xóa</a></button></td>
                </tr>
                ';
                }
                ?>
               

            </table>
        </form>
