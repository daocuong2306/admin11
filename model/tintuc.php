<?php
function inserttt($tieude,$noidung){
    $spl = "insert into tintuc values (null,'$tieude','$noidung')";
    pdo_execute($spl);
}
    function loadall_tt(){
    $result = "select * from tintuc order by idtintuc ";
    $tintuc=pdo_query($result);
 return $tintuc;
}
function updatett($idtintuc,$tieude,$noidung){
        $sql ='update tintuc set idtintuc = "'.$idtintuc.'",  tieude = "'.$tieude.'",noidung = "'.$noidung.'" where idtintuc = '.$idtintuc;
        pdo_execute($sql);
}
function loadonett($idtintuc){
    $sql = "select * from tintuc where idtintuc = ".$idtintuc;
    $suagv = pdo_query_one($sql);
    return $suagv;
}
function deletett($idtintuc){
    $sql = "delete from tintuc where idtintuc =".$idtintuc;
    pdo_execute($sql);
}
// function loadgv_by_idlophoc($idlophoc){
//     $sql = "select * from giaovien where idlophoc = ".$idlophoc;
//     $gv = pdo_query($sql);
//     return $gv;
// }

?>