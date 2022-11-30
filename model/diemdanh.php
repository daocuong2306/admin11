<?php

function insert_dd($idsinhvien){
    $spl = "insert into diemdanh values (null,null,'$idsinhvien',null)";
    pdo_execute($spl);
}




?>