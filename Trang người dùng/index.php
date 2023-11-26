<?php
session_start();
include "model/pdo.php";
include "model/loai_phim.php";
include "model/phim.php";
include "model/taikhoan.php";
include "model/lichchieu.php";
$loadloai = loadall_loaiphim();
$loadphim = loadall_phim();
$loadphimhot = loadall_phim_hot();
$loadphimhome = loadall_phim_home();
include "view/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case "ctphim":

            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $phim =  loadone_phim($_GET['id']);
                include "view/ctphim.php";
            } else {
                //  include "view/home.php";
                include "view/ctphim.php";
            }
            // include "view/ctphim.php";
            break;
        case "dsphim":
            if (isset($_POST['kys']) && $_POST['kys'] != "") {

                $kys = $_POST['kys'];
            } else {
                $kys = "";
            }
            if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
                $id_loai = $_GET['id_loai'];
                $tenloai = load_ten_loai($id_loai);
            } else {
                $id_loai = 0;
            }
            $dsp = loadall_phim1($kys, $id_loai);

            $nameth = phim_select_all();
            // $dsp=loadall_phim();
            include "view/dsphim.php";
            break;
        case "phimsapchieu":
            $psc = load_phimsc();
            include "view/phimsc.php";
            break;
        case "phimdangchieu":
            $pdc = load_phimdc();
            include "view/phimdc.php";
            break;
        case "ghe":

            include "view/ghe.php";
            break;
            case "test":

                include "view/test.php";
                break;
            
        case "thanhtoan":

            include "view/thanhtoan.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "tintuc":
            include "view/tintuc-big.php";
            break;
        case "rapchieu":
            include "view/rapchieu.php";
            break;
        case "dangnhap":
            if (isset($_POST['login'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_tk = check_tk($user, $pass);
                if (is_array($check_tk)) {
                    $_SESSION['user'] = $check_tk;
                }
            }
            include "view/login/dangnhap.php";
            break;
        case "dangky":
            $min_password_length = 4;

            if (isset($_POST['dangky']) && $_POST['dangky'] != "") {
                // Kiểm tra dữ liệu rỗng
                if (
                    !empty($_POST['name']) && !empty($_POST['phone']) &&
                    !empty($_POST['dia_chi']) && !empty($_POST['user']) &&
                    !empty($_POST['pass']) && !empty($_POST['email'])
                ) {
                    // Kiểm tra định dạng email
                    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        // Kiểm tra độ dài mật khẩu
                        if (strlen($_POST['pass']) >= $min_password_length) {
                            // Xử lý đăng ký khi tất cả điều kiện hợp lệ
                            $name = $_POST['name'];
                            $sdt = $_POST['phone'];
                            $dc = $_POST['dia_chi'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];

                            // Thực hiện thêm tài khoản vào cơ sở dữ liệu
                            insert_taikhoan($email, $user, $pass, $name, $sdt, $dc);
                            echo "Đăng ký thành công xin mời đăng nhập!";
                        } else {
                            echo "Mật khẩu phải chứa ít nhất $min_password_length ký tự.";
                        }
                    } else {
                        echo "Vui lòng nhập một địa chỉ email hợp lệ.";
                    }
                } else {
                    echo "Vui lòng điền đầy đủ thông tin.";
                }
            }

            include "view/login/dangky.php";
            break;
        case "quenmk":
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
        case "suatk":
            if (isset($_POST['capnhat']) && $_POST['capnhat'] != "") {
                $id = $_POST['id'];
                $pass = $_POST['pass'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $name = $_POST['name'];
                $sdt = $_POST['phone'];
                $dc = $_POST['dia_chi'];
                sua_tk($id, $name, $user, $pass, $email, $sdt, $dc);
                $_SESSION['user'] = check_tk($user, $pass);
                include "view/login/sua.php";
            } else {
                include "view/login/sua.php";
            }
            break;
        case "dangxuat":
            dang_xuat();
            include "view/login/dangnhap.php";
            break;
            case "doan":
                
                include "view/doan.php";
                break;
                    
        case "datve":
            if (isset($_POST['date']) && $_POST['date'] != "") {

                $date = $_POST['date'];
            } else {
                $date = "";
            }
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id_phim = $_GET['id'];
                $phim = loadone_phim($id_phim);
            } else {
                $id_phim = 0;
            }
            $lc = loadall_lich($date, $id_phim);
            include "view/datve.php";

            break;
        case "theloai":
            if (isset($_POST['kys']) && $_POST['kys'] != "") {

                $kys = $_POST['kys'];
            } else {
                $kys = "";
            }
            if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
                $id_loai = $_GET['id_loai'];
                $ten_loai = load_ten_loai($id_loai);
            } else {
                $id_loai = 0;
            }
            $dsp = loadall_phim1($kys, $id_loai);


            // $dsp=loadall_phim();
            include "view/theloaiphim.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
