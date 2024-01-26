
<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "view/header.php";
include "global.php";
$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dsbc = loadAll_sanpham_banchay();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp =  loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";

            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);

                include "view/sanphamchitiet.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user, $email, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập !";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc Đăng ký";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                edit_taikhoan($id, $user, $pass, $email, $address, $tel);

                // $checkuser =checkuser($user,$pass);
                // if(is_array($checkuser)){
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');

                // }else{
                //     $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc Đăng ký";
                // }
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkEmail = checkEmail($email);
                if (is_array($checkEmail)) {
                    $thongbao = "Mật Khẩu của bạn là : " . $checkEmail['pass'];
                } else {
                    $thongbao = "Email không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');

            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>