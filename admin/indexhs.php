<?php
include "../view/header.php";
include "../model/lichhoc.php";
include "../model/pdo.php";
include "../model/sinhvien.php";
include "../model/giaovien.php";
include "../model/diemdanh.php";
include "../model/lophoc.php";
include "../model/tintuc.php";

session_start();
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act) {
        case 'thoat' :
            break;
        default:
            break;
    }
else{
    $listlh=loadall_lh();
    include "giaodien.php";
} }
include "../view/footer.php";

//   include "footer.php";
