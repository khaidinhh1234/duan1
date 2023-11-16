<?php
include "../model/pdo.php";
include "../model/loai_phim.php";
include "../model/phim.php";
$loadphim = loadall_phim();
$loadloai = loadall_loaiphim();
include "./home/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "QLloaiphim":
            include "./loaiphim/QLloaiphim.php";
            break;
        case "themloai":
            if (isset($_POST['gui'])) {
                $name = $_POST['name'];
                them_loaiphim($name);
            }
            include "./loaiphim/them.php";
            break;
        case "sualoai":
            if (isset($_GET['idsua'])) {
                $loadone_loai = loadone_loaiphim($_GET['idsua']);
            }
            include "./loaiphim/sua.php";
            break;
        case "xoaloai":
            if (isset($_GET['idxoa'])) {
                xoa_loaiphim($_GET['idxoa']);
                $loadloai = loadall_loaiphim();
                include "./loaiphim/QLloaiphim.php";
            } else {
                include "./loaiphim/QLloaiphim.php";
            }
            break;
        case "updateloai":
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_loaiphim($id, $name);
            }
            $loadloai = loadall_loaiphim();
            include "./loaiphim/QLloaiphim.php";
            break;

        case "QLphim":
            if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                $keyw=$_POST['keyw'];
                $idloai=$_POST['idloai'];
            }else{
                $keyw="";
                $idloai=0;
            }
            $listloai= loadall_loaiphim();
            $listphim = loadall_phim1($keyw,$idloai);
            include "./phim/QLphim.php";
            break;
        case "themphim":
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $tieu_de = $_POST['tieu_de'];
                $file = $_FILES['img'];
                $img = $file['name'];
                move_uploaded_file($file['tmp_name'], "../imgavt/" .  $img);
                if (move_uploaded_file($file['tmp_name'], "../imgavt/" .  $img)) {
                    echo "Bạn đã upload thành công ";
                } else {
                    echo "Upload lỗi ";
                }
                $mo_ta = $_POST['mo_ta'];
               them_phim( $tieu_de, $img, $mo_ta);
            }
            $loadphim = loadall_phim();
            include "phim/them.php";
            break;
        case "suaphim":
            if (isset($_GET['idsua'])) {
                $loadone_phim = loadone_phim($_GET['idsua']);
            }
            include "phim/sua.php";
            break;
        case "xoaphim":
            if (isset($_GET['idxoa'])) {
                xoa_phim($_GET['idxoa']);
                $loadphim = loadall_phim();
                include "phim/QLphim.php";
            } else {
                include "phim/QLphim.php";
            }
            break;
        case "updatephim":
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tieu_de = $_POST['tieu_de'];
                $file = $_FILES['img'];
                $img = $file['name'];
                move_uploaded_file($file['tmp_name'], "../imgavt/" .  $img);
                if (move_uploaded_file($file['tmp_name'], "../imgavt/" .  $img)) {
                    echo "Bạn đã upload thành công ";
                } else {
                    echo "Upload lỗi ";
                }
                $mo_ta = $_POST['mo_ta'];
                update_phim($id, $tieu_de, $img, $mo_ta);
            }
            $loadphim = loadall_phim();
            include "phim/QLphim.php";
            break;

        case "QLcarou":
            include "./phim/QLcarou.php";
            break;
        case "rapchieu":
            include "./rapchieu/rapchieu.php";
            break;
        case "QLbv":
            include "./baiviet/QLbv.php";
            break;
        case "QTvien":
            include "./user/QTvien.php";
            break;
        case "khachhang":
            include "./user/khachhang.php";
            break;
        case "DTdh":
            include "./danhthu/DTdh.php";
            break;
        case "DTthang":
            include "./danhthu/DTthang.php";
            break;
        case "DTphim":
            include "./danhthu/DTphim.php";
            break;
        case "voucher":
            include "./voucher/voucher.php";
            break;
        case "timeline":
            include "./voucher/timeline.php";
            break;
        case "chitiethoadon":
            include "./vephim/chitiethoadon.php";
            break;
        case "order-list":
            include "./vephim/order-list.php";
            break;
        case "QLfeed":
            include "./feedblack/QLfeed.php";
            break;
        case "lichchieu":
            include "./suatchieu/lichchieu.php";
            break;
        case "QLsuatchieu":
            include "./suatchieu/QLsuatchieu.php";
        default:
            include "./phim/QLphim.php";
            break;
    }
} else {
    include "./phim/QLphim.php";
}

include "./home/footer.php";
