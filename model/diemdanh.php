<?php

function insert_dd($idsinhvien,$idlichhoc,$idlophoc){
    $spl = "insert into diemdanh values (null,null,'$idsinhvien','$idlichhoc','$idlophoc')";
    pdo_execute($spl);
}



function loaddd($idlophoc){
    $result = "select * from diemdanh where  idlophoc = ".$idlophoc;
    $sinhvien=pdo_query($result);
    return $sinhvien;
}

function delete_dd($idsinhvien,$idlophoc){
    $sql = "delete from diemdanh where idsinhvien =".$idsinhvien." and idlophoc =".$idlophoc;
    pdo_execute($sql);
}
?>