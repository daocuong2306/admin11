<?php

function insert_dd($idsinhvien,$idlophoc){
    $spl = "insert into diemdanh values (null,null,'$idsinhvien',null,'$idlophoc')";
    pdo_execute($spl);
}


function loaddd(){
    $result = "select * from diemdanh order by idsinhvien ";
    $sinhvien=pdo_query($result);
    return $sinhvien;
}

?>