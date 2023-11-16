<?php
include "../model/pdo.php";
include "../model/loai_phim.php";
$loadloai = loadall_loaiphim();
include "./header.php";
if(isset($_GET['act']) && $_GET['act']!=""){
    $act = $_GET['act'];
    switch ($act) {
        case "ctphim":
            include "./ctphim.php";
            break;
        case "dsphim":
            include "./dsphim.php";
            break;
        case "lienhe":
            include "./lienhe.php";
            break;
        case "tintuc":
            include "./tintuc-big.php";
            break;
        case "rapchieu":
            include "./rapchieu.php";
            break;
        case "dangnhap":
            include "./login/dangnhap.php";
            break;
        case "dangky":
            include "./login/dangky.php";
            break;
        case "quenmk":
            include "./login/quenmk.php";
            break;
    }
    }else{
    include "./home.php";
}
include "./footer.php";