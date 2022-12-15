<?php
function checkuserSV($user,$pass){
    $sql="select * from sinhvien where userSV='".$user."' and pass='".$pass."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function checkuserGV($user,$pass){
    $sql="select * from giaovien where userGV='".$user."' and pass='".$pass."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function checkuser($user,$pass){
    $sql="select * from user_admin where user='".$user."' and pass='".$pass."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function dangnhap($checkuser,$check) {
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        if($check=="giaovien") {
            header('Location: index.php?act=giaovien');
        }
        elseif($check=="admin") {
            header('Location: index.php?act=admin');
        } else {
            header('Location: index.php?act=hocsinh');
        }
    } else {
        session_unset();
        $thongbao = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí";
        echo $thongbao;
    }
}
?>
