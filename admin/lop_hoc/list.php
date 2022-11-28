<ul>
        <?php
        foreach ($listlh as $lh) {
            extract($lh);
            $load="index.php?act=lophoc&idlophoc=".$idlophoc;
            echo '<li>
            <a href="'.$load.'">'.$tenlophoc.'</a>
        </li>';
        }
        
        ?>
        </ul>