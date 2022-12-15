<?php
            $_SESSION['lophoc'] = $_GET["idlophoc"];
            echo $_SESSION['lophoc'];
 ?>        <div class="all">
            <div class="showMain">
                <h2>JSA-13</h2>
            <?php 
            
            foreach ($dsgv as $value){
                extract($value);
                echo $name."<br>";
            }
         
            ?>
           
            <div class="menu-list">
                <ul>
                    <li>Học Viên</li>
                    <li><a href="../admin/index.php?act=giang&idlophoc=<?php echo $_SESSION['lophoc'];>giảng viên</a></li>
                    <li><a href="../admin/index.php?act=diemdanh&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Điểm Danh</a></li>
                    <li><a href="../admin/index.php?act=addlichhoc&idlophoc=<?php echo $_SESSION['lophoc']; ?>">Lichj hocj</a></li>
                    <button id="show" onclick="showmmain()"><a href="../admin/index.php?act=lophoc">xem</a></button>
                </ul>
            </div>