<?php
session_start();
if(isset($_SESSION['vai_tro'])) {

    include "./model/pdo.php";
    include "./model/loai_phim.php";
    include "./model/phim.php";
    include "./model/taikhoan.php";
    include "./model/lichchieu.php";
    include "./model/phong.php";
    $loadphim = loadall_phim();
    $loadloai = loadall_loaiphim();
    $loadtk = loadall_taikhoan();
    include "./view/home/header.php";

    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "QLloaiphim":
                include "./view/loaiphim/QLloaiphim.php";
                break;
            case "themloai":
                if (isset($_POST['gui'])) {
                    $name = $_POST['name'];
                    them_loaiphim($name);
                }
                include "./view/loaiphim/them.php";
                break;
            case "sualoai":
                if (isset($_GET['idsua'])) {
                    $loadone_loai = loadone_loaiphim($_GET['idsua']);
                }
                include "./view/loaiphim/sua.php";
                break;
            case "xoaloai":
                if (isset($_GET['idxoa'])) {
                    xoa_loaiphim($_GET['idxoa']);
                    $loadloai = loadall_loaiphim();
                    include "./view/loaiphim/QLloaiphim.php";
                } else {
                    include "./view/loaiphim/QLloaiphim.php";
                }
                break;
            case "updateloai":
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    update_loaiphim($id, $name);
                }
                $loadloai = loadall_loaiphim();
                include "./view/loaiphim/QLloaiphim.php";
                break;

            case "QLphim":
                // $listphim = loadall_phim( keyw:"",idloai0);
                include "./view/phim/QLphim.php";
                break;
            case "themphim":
                if (isset($_POST['gui'])) {
                    $tieu_de = $_POST['tieu_de'];
                    $thoiluong = $_POST['thoiluong'];
                    $date = $_POST['date'];
                    $id_loai = $_POST['id_loai'];
                    $mo_ta = $_POST['mo_ta'];
                    $img = $_FILES['anh']['name'];
                    $target_dir = "../Trang người dùng/imgavt/";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                        echo "Bạn đã upload ảnh thành công";
                    } else {
                        echo "Upload ảnh không thành công";
                    }
                    them_phim($tieu_de, $img, $mo_ta, $thoiluong, $date, $id_loai);
                }
                $loadphim = loadall_phim();
                include "./view/phim/them.php";
                break;
            case "suaphim":
                if (isset($_GET['idsua'])) {
                    $loadone_phim = loadone_phim($_GET['idsua']);
                }
                include "./view/phim/sua.php";
                break;
            case "sualichchieu":
                if (isset($_GET['idsua'])) {
                    $loadone_lc = loadone_lichchieu($_GET['idsua']);
                }
                include "./view/suatchieu/sua.php";
                break;
            case "xoaphim":
                if (isset($_GET['idxoa'])) {
                    xoa_phim($_GET['idxoa']);
                    $loadphim = loadall_phim();
                    include "./view/phim/QLphim.php";
                } else {
                    include "./view/phim/QLphim.php";
                }
                break;
            case "updatephim":
                $loadloai = loadall_loaiphim();
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tieu_de = $_POST['tieu_de'];
                    $thoiluong = $_POST['thoiluong'];
                    $date = $_POST['date'];
                    $id_loai = $_POST['id_loai'];
                    $img = $_FILES['anh']['name'];
                    $target_dir = "../imgavt/";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
//                        echo "Bạn đã upload ảnh thành công";
                    } else {
//                        echo "Upload ảnh không thành công";
                    }
                    $mo_ta = $_POST['mo_ta'];
                    sua_phim($id, $tieu_de, $img, $mo_ta, $thoiluong, $date, $id_loai);
                }
                $loadphim = loadall_phim();

                include "./view/phim/QLphim.php";
                break;

            case "themlichchieu":
                $loadphim = loadall_phim();
                $loadphong = load_phong();
                if (isset($_POST['them'])) {
                    $id_phim = $_POST['id_phim'];
                    $id_phong_chieu = $_POST['id_phong'];
                    $thoi_gian_chieu = $_POST['tgc'];
                    $ngay_chieu = $_POST['nc'];
                    them_lichchieu($id_phim, $id_phong_chieu, $thoi_gian_chieu, $ngay_chieu);
                }
                $loadlich = loadall_lichchieu();
                include "./view/suatchieu/them.php";
                break;
            case "updatelichchieu":
                $loadphim = loadall_phim();
                $loadphong = load_phong();
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $id_phim = $_POST['id_phim'];
                    $id_phong_chieu = $_POST['id_phong'];
                    $thoi_gian_chieu = $_POST['tgc'];
                    $ngay_chieu = $_POST['nc'];
                    sua_lichchieu($id, $id_phim, $id_phong_chieu, $thoi_gian_chieu, $ngay_chieu);
                }
                $loadlich = loadall_lichchieu();
                include "./view/suatchieu/sua.php";
                break;
            case "QLcarou":
                include "./view/phim/sua.php";
                break;
            case "rapchieu":
                include "./view/rapchieu/rapchieu.php";
                break;
            case "QLbv":
                include "./view/baiviet/QLbv.php";
                break;
            case "QTvien":
                include "./view/user/QTvien.php";
                break;
            case "khachhang":

                include "./view/user/khachhang.php";
                break;
            case "DTdh":
                include "./view/danhthu/DTdh.php";
                break;
            case "DTthang":
                include "./view/danhthu/DTthang.php";
                break;
            case "DTphim":
                include "./view/danhthu/DTphim.php";
                break;
            case "voucher":
                include "./view/voucher/voucher.php";
                break;
            case "timeline":
                include "./view/voucher/timeline.php";
                break;
            case "chitiethoadon":
                include "./view/vephim/chitiethoadon.php";
                break;
            case "order-list":
                include "./view/vephim/order-list.php";
                break;
            case "QLfeed":
                include "./view/feedblack/QLfeed.php";
                break;
            case "lichchieu":
                include "./view/suatchieu/lichchieu.php";
                break;
            case "QLsuatchieu":
                $loadlich = loadall_lichchieu();
                include "./view/suatchieu/QLsuatchieu.php";

        }
    } else {
        include "./view/phim/QLphim.php";
    }

    include "./view/home/footer.php";
}else{
    header('location: login.php');
}
