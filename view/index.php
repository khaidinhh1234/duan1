<?php

include "./header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "QLphim":
            include "./QLphim.php";
            break;
        case "QLcarou":
            include "./QLcarou.php";
            break;
        case "rapchieu":
            include "./rapchieu.php";
            break;
        case "QLbv":
            include "./QLbv.php";
            break;
        case "QTvien":
            include "./QTvien.php";
            break;
        case "khachhang":
            include "./khachhang.php";
            break;
        case "DTdh":
            include "./DTdh.php";
            break;
        case "DTthang":
            include "./DTthang.php";
            break;
        case "DTphim":
            include "./DTphim.php";
            break;
        case "voucher":
            include "./voucher.php";
            break;
        case "timeline":
            include "./timeline.php";
            break;
        case "chitiethoadon":
            include "./chitiethoadon.php";
            break;
        case "order-list":
            include "./order-list.php";
            break;
        case "QLfeed":
            include "./QLfeed.php";
            break;
        case "lichchieu":
            include "./lichchieu.php";
            break;
        default:
            include "./QLphim.php";
            break;
    }
} else {
    include "./QLphim.php";
}

include "./footer.php";
