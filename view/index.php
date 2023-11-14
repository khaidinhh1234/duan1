<?php

include "./home/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "QLphim":
            include "./phim/QLphim.php";
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
