<?php
include "model/user.php";
include "model/pdo.php";
include "model/sinhvien.php";
session_start();
if(isset($_GET["act"])) {
$check = $_GET["act"];
switch ($check) {
    case "dangnhap" :

        if(isset($_POST['dangnhap']) && ($_POST['dangnhap']) ) {
            

            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $checkuserGV = checkuserGV($user, $pass);
            $checkuserSV = checkuserSV($user, $pass);
            $checkuser = checkuser($user, $pass);
            if(is_array($checkuserGV)) {
                dangnhap($checkuserGV,"giaovien");
            }
            elseif (is_array($checkuser)) {
                dangnhap($checkuser,"admin");
            }
            else {
                dangnhap($checkuserSV,"hocsinh");
            }
        }
        break;
    case "giaovien":
           if(isset($_SESSION["user"])) {
               extract($_SESSION["user"]);
               if(isset($idgiaovien)) {
                   header('Location: admin/index.php');
                   exit();
               } else {
                session_unset();
                   echo "ban k phai giao vien";
               }
           } else {
               include "view/login.php";
           }
        break;
    case "admin" :
        if(isset($_SESSION["user"])) {
            extract($_SESSION["user"]);
            if(isset($ID)) {
                header('Location: admin/index.php');
                exit();
            }
            else {
                session_unset();
                echo "ban k phai admin";
            }
        }else {
            include "view/login.php";
        }
        break;
    case "hocsinh":
        if(isset($_SESSION["user"])) {
            extract($_SESSION["user"]);
            if(isset($idsinhvien)) {
                header('Location: admin/index.php');
                exit();
            } else {
                session_unset();
                echo "ban k phai hoc sinh";
            }
        } else {
            include "view/login.php";
        }
        break;
    default:
        break;
} }
else {
    include "view/home.php";
}
