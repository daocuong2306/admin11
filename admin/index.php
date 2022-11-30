<?php
include "../view/header.php";

include "../model/pdo.php";
include "../model/sinhvien.php";
include "../model/giaovien.php";
include "../model/lophoc.php";

session_start();
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
//                $sinhvien = loadall_sv();
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
                    $adess = $_POST['dress'];
                    $age = $_POST['age'];
                    $tell = $_POST['tell'];
                    $idlophoc = $_POST['idlophoc'];
                    $img=$_FILES['img']['name'];
                    $gmail = $_POST['gmail'];
                    $target_dir = "../uploadimg/";
                    $target_file = $target_dir.$img;
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
    //                      echo "ảnh của bạn đã được thêm thành công ";
                    }else{
    //                      echo 'sorry, ảnh của bạn ko được uplead';
                    }
                    $gioitinh = $_POST['gioitinh'];
                    $idlophoc = $_POST['idlophoc'];
                    insert_gv($name,$adess,$age,$gmail,$tell,$img,$gioitinh,$idlophoc);
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

                case 'lophoc' :
                    $listlh=loadall_lh();
                    include "lop_hoc/loadall.php";
                    
                
                    

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
                        
                    
    //                     if(isset($_GET['idlophoc']) && ($_GET['idlophoc']>0)) {
    // // echo "<pre>";
    // // echo print_r($_GET);
    //                         $idlophoc = $_GET['idlophoc'];
    //                         $dsgv = loadgv_by_idlophoc($idlophoc);
    //                         $dssv = loadsv_by_idlophoc($idlophoc);
    //                         $lophoc=loadone($idlophoc);
    //                         include "lop_hoc/loadall.php";
                            
    //                     }
                        
    
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
         include "giaodien.php";
         break;
    }

  }
  else{
      include "giaodien.php";
  }
include "../view/all.php";
include "../view/footer.php";

//   include "footer.php";
