<?php
function inserths($idlophoc,$idsinhvien){
    $spl = "insert into `hocsinh-lophoc` values (null,'$idlophoc','$idsinhvien')";
    pdo_execute($spl);
}

function insert_lh($tenlophoc){
    $spl = "insert into lophoc values (null,'$tenlophoc')";
    pdo_execute($spl);
}
function loadall_lh(){
    $sql="select * from lophoc order by tenlophoc";
 $listlh=pdo_query($sql);
 return $listlh ;
}
function loadone($idlophoc){
    $sql="select * from lophoc where idlophoc=".$idlophoc;
    $lophoc=pdo_query_one($sql);
    return $lophoc;
}
function sinhvien($idsinhvien){
    $sql="SELECT s.*,l.tenlophoc,l.idlophoc  FROM sinhvien as s 
    INNER JOIN `hocsinh-lophoc` as hl on hl.idsinhvien=s.idsinhvien 
    INNER JOIN lophoc as l on l.idlophoc =hl.idlophoc WHERE s.idsinhvien=".$idsinhvien;
    $lsv=pdo_query($sql);
    return $lsv ;
}
function svl($idlophoc){
    $sql="SELECT s.*,l.tenlophoc,l.idlophoc  FROM sinhvien as s 
    INNER JOIN `hocsinh-lophoc` as hl on hl.idsinhvien=s.idsinhvien 
    INNER JOIN lophoc as l on l.idlophoc =hl.idlophoc WHERE l.idlophoc=".$idlophoc;
    $lsv=pdo_query($sql);
    return $lsv ;
}
?>