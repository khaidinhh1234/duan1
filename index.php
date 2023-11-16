<?php
include "model/pdo.php";
include "model/loai_phim.php";
$loadloai = loadall_loaiphim();
include "./view/header.php";
if(isset($_GET['act']) && $_GET['act']!=""){
    $act = $_GET['act'];
    switch ($act) {
        case "ctphim":
            include "view/ctphim.php";
            break;
        case "dsphim":
            include "view/dsphim.php";
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
            include "view/login/dangnhap.php";
            break;
        case "dangky":
            include "view/login/dangky.php";
            break;
        case "quenmk":
            include "view/login/quenmk.php";
            break;
    }
    }else{
    include "./view/home.php";
}
include "./view/footer.php";