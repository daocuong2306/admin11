<?php
function insert_gv($name,$adess,$age,$gmail,$tell,$img,$gioitinh,$tenlophoc,$userGV,$pass){
    $spl = "insert into giaovien values (null,'$name','$adess','$age','$gmail','$tell','$img','$gioitinh','$tenlophoc','$userGV','$pass')";
    pdo_execute($spl);
}
    function loadall_gv(){
    $result = "select * from giaovien order by idgiaovien ";
    $giaovien=pdo_query($result);
 return $giaovien;
}
function update_gv($idgiaovien,$name,$adess,$age,$gmail,$tell,$img,$gioitinh){
    if($img !=" "){
        $sql ='update giaovien set idgiaovien = "'.$idgiaovien.'",  name = "'.$name.'",adess = "'.$adess.'",age = "'.$age.'",gmail = "'.$gmail.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'",userGV="'.$userGV.'",pass="'.$pass.'" where idgiaovien = '.$idgiaovien;
    }else{
        $sql ='update giaovien set idgiaovien = "'.$idgiaovien.'",  name = "'.$name.'",adess = "'.$adess.'",age = "'.$age.'",gmail = "'.$gmail.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'",userGV="'.$userGV.'",pass="'.$pass.'" where idgiaovien = '.$idgiaovien;
    }
    pdo_execute($sql);
}
function loadone_gv($idgiaovien){
    $sql = "select * from giaovien where idgiaovien = ".$idgiaovien;
    $suagv = pdo_query_one($sql);
    return $suagv;
}
function delete_gv($idgiaovien){
    $sql = "delete from giaovien where idgiaovien =".$idgiaovien;
    pdo_execute($sql);
}
function loadgv_by_idlophoc($idlophoc){
    $sql = "select * from giaovien where idlophoc = ".$idlophoc;
    $gv = pdo_query($sql);
    return $gv;
}

?>