<?php 
function insert_lichhoc($idlophoc,$ca,$ngay){
    $spl = "insert into lichhoc values (null,'$idlophoc','$ca','$ngay')";
    pdo_execute($spl);
}
function loadall_lichhoc(){
    $result = "select * from lichhoc order by ngay ";
    $lichhoc=pdo_query($result);
 return $lichhoc;
}
 function load_lichhoc_by_idlophoc($idlophoc){
    $sql = "select * from lichhoc where idlophoc = ".$idlophoc;
    $onelop = pdo_query($sql);
    return $onelop;
}
function getidby($ngay,$idlophoc) {
    $sql = "select * from lichhoc where idlophoc = ".$idlophoc." and ngay='".$ngay."' limit 1";
    $onelop = pdo_query($sql);
    return $onelop;
}
?>