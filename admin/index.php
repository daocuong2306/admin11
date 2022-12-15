<?php
session_start();
include "../view/header.php";
include "../model/lichhoc.php";
include "../model/pdo.php";
include "../model/sinhvien.php";
include "../model/giaovien.php";
include "../model/diemdanh.php";
include "../model/lophoc.php";
include "../model/tintuc.php";


if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        // sinh viên
        case 'addsv' :
            if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                $name = $_POST['name'];
                $dress = $_POST['dress'];
                $age = $_POST['age'];
                $tell = $_POST['tell'];
                $idlophoc = $_POST['idlophoc'];
                $img=$_FILES['img']['name'];
                $target_dir = "../uploadimg/";
                $target_file = $target_dir.$img;
                if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                }
                $gioitinh = $_POST['gioitinh'];
                insert_sv($name,$dress,$age,$tell,$img,$gioitinh,$idlophoc);
                $thongbao = "thêm thành công";
            }
            $listlophoc=loadall_lh();
            include "sinh_vien/add.php";

            break;
            case 'updatesv':
                if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                    $idsinhvien = $_POST['id'];
                    $name = $_POST['name'];
                    $dress = $_POST['dress'];
                    $age = $_POST['age'];
                    $tell = $_POST['tell'];
                
                    $img=$_FILES['img']['name'];
                    $target_dir = "../uploadimg/";
                    $target_file = $target_dir.$img;
                        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                        }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                        }
                    $gioitinh = $_POST['gioitinh'];
                    update_sv($idsinhvien,$name,$dress,$age,$tell,$img,$gioitinh);
                    $thongbao = "thêm thành công";
                }
              $sinhvien=loadall_sv();
               include "sinh_vien/list.php";
                break;
            case 'listsv' :
     ~          $sinhvien = loadall_sv();
                    include "../view/showLop.php";

                    break;
            case 'suasv':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $suasv = loadone_sv($_GET['id']);
                
                    include "sinh_vien/update.php";
                }
                
            break;
         case 'xoasv':
            if(isset($_GET['id']) && ($_GET['id']>0)) {
                delete_sv($_GET['id']);
            }
            $sinhvien=loadall_sv();
            include "sinh_vien/list.php";
            break;
            // giáo viên
            case 'addgv' :
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                $name = $_POST['name'];
                $dress = $_POST['dress'];
                $age = $_POST['age'];
                $tell = $_POST['tell'];
                $idlophoc = $_POST['idlophoc'];
                $userGV = $_POST['userGV'];
                $pass = $_POST['pass'];
                $img=$_FILES['img']['name'];
                $target_dir = "../uploadimg/";
                $target_file = $target_dir.$img;
                if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                }
                $gioitinh = $_POST['gioitinh'];
                insert_gv($name,$adess,$age,$gmail,$tell,$img,$gioitinh,$tenlophoc,$userGV,$pass);
                $thongbao = "thêm thành công";
            }
            $listlophoc=loadall_lh();
                include "giao_vien/add.php";
                
                break;
                case 'suagv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $suagv = loadone_gv($_GET['id']);
                    
                        include "giao_vien/update.php";
                    }
                    // $listlophoc=loadall_lh();
                    
                break;
                case 'updategv':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                        $idgiaovien = $_POST['id'];
                        $name = $_POST['name'];
                        $adress = $_POST['adress'];
                        $age = $_POST['age'];
                        $tell = $_POST['tell'];
                        $idlophoc = $_POST['idlophoc'];
                        $img=$_FILES['img']['name'];
                        $target_dir = "../uploadimg/";
                        $target_file = $target_dir.$img;
                            if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
    //                      echo "ảnh của bạn đã được thêm thành công ";
                            }else{
    //                      echo 'sorry, ảnh của bạn ko được uplead';
                            }
                        $gioitinh = $_POST['gioitinh'];
                        update_gv($idgiaovien,$name,$adess,$age,$gmail,$tell,$img,$gioitinh,$idlophoc);
                        $thongbao = "thêm thành công";
                    }
                    // $listlophoc=loadall_lh();
                  $sinhvien=loadall_sv();
                   include "giao_vien/list.php";
                    break;
                    case 'listgv' :
                        $idlophoc=4;
                        $giaovien = loadall_gv();
                        // $id=$idlophoc;
                        $loadonelh=loadone($idlophoc);
                        $listlophoc=loadall_lh();
                        include "giao_vien/list.php";
                        
                        
                        break;
                    case 'xoagv':
                        if(isset($_GET['id']) && ($_GET['id']>0)) {
                            delete_gv($_GET['id']);
                        }
                        $giaovien=loadall_gv();
                            include "giao_vien/list.php";
                            break;
                // dang nhap
                case 'addlh':
                    if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                        // $idlophoc = $_POST['idlophoc'];
                        $tenlophoc=$_POST['tenlophoc'];
                        insert_lh($tenlophoc);
                        $thongbao = "thêm thành công";
                    }
                   include 'lop_hoc/add.php';

                    break;
                case 'lophoc' :
                    $listlh=loadall_lh();
                    include "giaodien.php";

                    break;
                    case 'loadoneclass' :
                        
                    if(isset($_GET['idlophoc']) && ($_GET['idlophoc']>0)) {
                        // echo "<pre>";
                        // echo print_r($_GET);
                                                $idlophoc = $_GET['idlophoc'];
                                                $dsgv = loadgv_by_idlophoc($idlophoc);
                                                $dssv = loadsv_by_idlophoc($idlophoc);
                                                $lophoc=loadone($idlophoc);
                                                include "lop_hoc/lophoc.php";
                                                
                                            }
                        break;

                    case 'listlh' :
                        $listlh=loadall_lh();
                        include "lop_hoc/list.php";
                        break;

                        case 'addlichhoc' :
                            if(isset($idgiaovien)) {
                            // echo "<pre>";
                            // echo print_r($_POST);
                            // $listlh=loadall_lh();
                            $idlophoc=$_GET['idlophoc'];
                            $lophoc=loadone($idlophoc);
                            if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                                // $idlophoc = $_POST['idlophoc'];
                                $idlophoc=$_GET['idlophoc'];
                                $ca=$_POST['ca'];
                                $ngay = $_POST['ngay'];
                                insert_lichhoc($idlophoc,$ca,$ngay);
                                $thongbao = "thêm thành công";
                            }
                            
                             include "lichhoc/add.php"; }
                            else {
                                //show list lịch học
                            }
                            break;  
                        case 'listlichhoc' :
                            $idlophoc=$_GET['idlophoc'];
                            $lichhoc=load_lichhoc_by_idlophoc($idlophoc);
                            $lophoc=loadone($idlophoc);
                            $gv=loadgv_by_idlophoc($idlophoc);
                            include "lichhoc/list.php";
                            break;
                    case 'addtt':
                        if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                            $tieude = $_POST['tieude'];
                            $noidung = $_POST['noidung'];
                            inserttt($tieude,$noidung);
                            $thongbao = "thêm thành công";
                        }
                        include "tintuc/add.php";

                        break;
                    case 'listtt':
                        $listtintuc=loadall_tt();
                        include "tintuc/list.php";
                        break;
                    case 'xoatt':
                        if(isset($_GET['id']) && ($_GET['id']>0)) {
                            deletett($_GET['id']);
                        }
                        $listtintuc=loadall_tt();
                        include "tintuc/list.php";
                            break;
                    case 'suatt':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $suatt = loadonett($_GET['id']);
                        
                            include "tintuc/update.php";
                        }
                        break;
                    case 'updatett':
                        if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                            $idtintuc=$_POST['idtintuc'];
                            $tieude = $_POST['tieude'];
                            $noidung = $_POST['noidung'];
                            updatett($idtintuc,$tieude,$noidung);
                            $thongbao = "sửa thành công";

                        }
                        $listtintuc=loadall_tt();
                        include "tintuc/list.php";

                        break;
                        

            case  "dangnhap" :
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap']) ) {
                    $user = $_POST["user"];
                    $pass = $_POST["pass"];
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
//                   $thongbao = "đã nhập thành công";
                        header('Location: index.php');
                    } else {
                        $thongbao = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí";
                    }
                }
                include "dangnhap.html";
                break;
            case "diemdanh" :
                if(isset($idgiaovien)) {
                $idlophoc = $_GET['idlophoc'];
                $dssv= loadsv_by_idlophoc($idlophoc);
                $dsgv =  loadgv_by_idlophoc($idlophoc);
                    include "../view/showdiemdanh.php"; }
                else {
                    include "../view/showdiemdanh.php";
                }
                break;
        case "showallgv" :
            include "../view/allGV.php";

            break;
        case "showallsv" :
            include "../view/allhs.php";

            break;
                case "thoat" :
                    //            echo session_destroy();
                                session_unset();
                                header("location: ../index.php");
                                break;
            break;
                case 'listgv' :
                    $giaovien = loadall_gv();
                    include "giao_vien/list.php";
                    break;
         default:
         $listlh=loadall_lh();
         include "giaodien.php";
         break;
    }

  }
  else{ 
      $listlh=loadall_lh();
      include "giaodien.php";
  }
include "../view/footer.php";

//   include "footer.php";
