<?php
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
?>