<?php
session_start();
include "model/pdo.php";
include "model/loai_phim.php";
include "model/phim.php";
include "model/taikhoan.php";
include "model/lichchieu.php";
include "model/ve.php";
include "model/hoadon.php";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$loadloai = loadall_loaiphim();
$loadphim = loadall_phim();
$loadphimhot = loadall_phim_hot();
$loadphimhome = loadall_phim_home();
include "view/header.php";
if(isset($_GET['act']) && $_GET['act']!=""){
    $act = $_GET['act'];
    switch ($act) {
        case "ctphim":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $phim = loadone_phim($_GET['id']);
//                var_dump($_SESSION['tong']);
                include "view/ctphim.php";
            } else {
                //  include "view/home.php";
                include "view/ctphim.php";
            }
            
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
        case "datve":
            unset($_SESSION['tong']);
            $khunggio = array();
            $realtime = date('Y-m-d H:i:s');
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id_phim = $_GET['id'];
                $phim = loadone_phim($id_phim);
            } else {
                $id_phim = 0;
            }
            if ((isset($_GET['id_lc'])) && ($_GET['id_lc'])) {
                $id_lc = $_GET['id_lc'];
                $khunggio = khunggiochieu_select_by_idxc($id_lc);
            }
            $lc = lichchieu_select_by_id_phim($id_phim);
            include "view/dv.php";

            break;

        case "datve2":

            if (!isset($_SESSION['mv'])) {
                $id_phim = $_GET['id'];
                $id_lichchieu = $_GET['id_lc'];
                $id_gio = $_GET['id_g'];
                $_SESSION['mv'] = [$id_phim, $id_lichchieu, $id_gio];
                $list_lc = load_lc_p($id_phim, $id_lichchieu, $id_gio);
            } else {
                $list_lc = load_lc_p($_SESSION['mv'][0], $_SESSION['mv'][1], $_SESSION['mv'][2]);
            }
            $_SESSION['tong'] = $list_lc;

            var_dump($_SESSION['tong']);
            if (isset($_SESSION['user']) && ($_SESSION['user'])) {

                include "view/dv2.php";
            } else {
                $thongbao['dangnhap'] = 'đăng nhập đi để đặt vé!';
                include 'view/login/dangnhap.php';
            }

            break;

        case "dv3":
            if (isset($_POST['tiep_tuc']) && ($_POST['tiep_tuc'])) {
                $ten_ghe = array();
                foreach ($_POST as $key => $value) {
                    if ($key == "ten_ghe") {
                        $ten_ghe['ghe'] = $value;
                    }
                }

                $gia_ghe = $_POST['giaghe'];
                array_push($_SESSION['tong'], $gia_ghe, $ten_ghe);
            }
            include 'view/doan.php';
            break;
        case "dv4":
            if (isset($_POST['tiep_tuc']) && ($_POST['tiep_tuc'])) {
                $ten_ghe = array();
                foreach ($_POST as $key => $value) {
                    if ($key == "ten_ghe") {
                        $ten_ghe['ghe'] = $value;
                    }
                }

                $ten_doan = array();
                foreach ($_POST as $key => $value) {
                    if ($key == "ten_do_an") {
                        $ten_doan['doan'] = $value;
                    }
                }

                $gia_ghe = $_POST['giaghe'];
                array_push($_SESSION['tong'], $gia_ghe, $ten_ghe, $ten_doan);
                $ghe = implode(', ', $ten_ghe['ghe']);
                $ngay_tt = date('Y-m-d H:i:s');
                $id_user = $_SESSION['user']['id'];
                $id_kgc = $_SESSION['tong']['id_gio'];

                $combo = (isset($ten_doan['doan']) && !empty($ten_doan['doan'])) ? implode(', ', $ten_doan['doan']) : null;

                $id_lc = $_SESSION['tong']['id_lichchieu'];
                $id_phim = $_SESSION['tong']['id_phim'];
                $id_bill = them_hoa_don($ngay_tt, $gia_ghe);

                if ($id_bill) {
                    $_SESSION['id_bill'] = $id_bill;
                    $id_ve = them_ve($gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill, $id_lc, $id_phim, $combo);

                    if ($id_ve) {
                        $_SESSION['id_ve'] = $id_ve;
                    } else {
                        echo "Đã xảy ra lỗi khi đặt vé. Vui lòng thử lại.";
                    }
                } else {
                    echo "Đã xảy ra lỗi khi tạo hóa đơn. Vui lòng thử lại.";
                }


            }
            include 'view/thanhtoan.php';
            break;
        case  "thanhtoan" :
            include "view/thanhtoan.php";
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


            include "view/theloaiphim.php";
            break;
        case "ve" :
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $load_ve = load_ve($_GET['id']);
                include "view/ve.php";
            } else {
                //  include "view/home.php";
                include "view/ve.php";
            }
            
            break;
        case 'xacnhan':
            if (isset($_GET['message']) && ($_GET['message'] == 'Successful.')) {
                trangthai_hd($_SESSION['id_bill']);
                trangthai_ve($_SESSION['id_bill']);

                 $load_ve_tt =  load_ve_tt($_SESSION['id_bill']);
                // var_dump($list_xc);
                $_SESSION['id_bill'] = [];
                $_SESSION['id_ve'] = [];
                unset($_SESSION['tong']);
                require_once "view/ve_tt.php";
                break;
            }
        case "huy_ve" :
            if(isset($_GET))
            include "view/ve.php";
            break;
    }
    }else{
    include "view/home.php";
}
include "view/footer.php";