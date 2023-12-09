<?php
session_start();
if(isset($_SESSION['user'])) {

    include "./model/pdo.php";
    include "./model/loai_phim.php";
    include "./model/phim.php";
    include "./model/taikhoan.php";
    include "./model/lichchieu.php";
    include "./model/phong.php";
    include "./model/thongke.php";
    include "./model/ve.php";
    include "./model/khunggio.php";
    include "./model/binhluan.php";
    $loadphim = loadall_phim();
    $loadloai = loadall_loaiphim();
    $loadtk = loadall_taikhoan();
    $loadve =loadall_vephim();
    include "./view/home/header.php";
    $tong = count($loadphim);

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
              
                include "./view/phim/QLphim.php";
                break;
            case "themphim":
                if (isset($_POST['gui'])) {
                    $tieu_de = $_POST['tieu_de'];
                    $daodien = $_POST['daodien'];
                    $dienvien = $_POST['dienvien'];
                    $quoc_gia = $_POST['quoc_gia'];
                    $gia_han_tuoi = $_POST['gia_han_tuoi'];
                    $thoiluong = $_POST['thoiluong'];
                    $date = $_POST['date'];
                    $link = $_POST['link'];
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
                    them_phim($tieu_de, $daodien, $dienvien, $img, $mo_ta, $thoiluong, $quoc_gia, $gia_han_tuoi, $date, $id_loai,$link);
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
                }
                break;
            case "updatephim":
                $loadloai = loadall_loaiphim();
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tieu_de = $_POST['tieu_de'];
                    $daodien = $_POST['daodien'];
                    $dienvien = $_POST['dienvien'];
                    $quoc_gia = $_POST['quoc_gia'];
                    $gia_han_tuoi = $_POST['gia_han_tuoi'];
                    $thoiluong = $_POST['thoiluong'];
                    $date = $_POST['date'];
                    $link = $_POST['link'];
                    $id_loai = $_POST['id_loai'];
                    $img = $_FILES['anh']['name'];
                    $target_dir = "../Trang người dùng/imgavt/";
                    $target_file = $target_dir . basename($_FILES['anh']['name']);
                    if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
//                        echo "Bạn đã upload ảnh thành công";
                    } else {
//                        echo "Upload ảnh không thành công";
                    }
                    $mo_ta = $_POST['mo_ta'];
                    sua_phim($id, $tieu_de, $daodien, $dienvien, $quoc_gia, $gia_han_tuoi, $img, $mo_ta, $thoiluong, $date, $id_loai,$link);
                }
                $loadphim = loadall_phim();

                include "./view/phim/QLphim.php";
                break;

            case "themlichchieu":
                $loadphim = loadall_phim();
                $loadphong = load_phong();
                if (isset($_POST['them'])) {
                    $id_phim = $_POST['id_phim'];
                    $ngay_chieu = $_POST['nc'];
                    them_lichchieu($id_phim,$ngay_chieu);
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

                    $ngay_chieu = $_POST['nc'];
                    sua_lichchieu($id, $id_phim, $ngay_chieu);
                }
                $loadlich = loadall_lichchieu();
                include "./view/suatchieu/QLsuatchieu.php";
                break;
                case "xoalichchieu":
                    if (isset($_GET['idxoa'])){
                        xoa_lichchieu($_GET['idxoa']);
                      $loadlich = loadall_lichchieu();}
                include "./view/suatchieu/QLsuatchieu.php";
                break;
            case "QLcarou":
                include "./view/phim/sua.php";
                break;
          
            case "khachhang":

                include "./view/user/khachhang.php";
                break;
            case "DTdh":
                $dt = load_thongke_doanhthu();
                include "./view/danhthu/DTdh.php";
                break;
            case "DTthang":
                $dtt =  load_doanhthu_thang();
                include "./view/danhthu/DTthang.php";
                break;
            case "DTtuan":
                $dtt =  load_doanhthu_tuan();
                include "./view/danhthu/DTtuan.php";
                break;
            case "DTngay":
                $dtt =  load_doanhthu_ngay();
                include "./view/danhthu/DTngay.php";
                break;
            case "DTphim":
                include "./view/danhthu/DTphim.php";
                break;
            case "timeline":
                include "./view/voucher/timeline.php";
                break;
            case "chitiethoadon":
                include "./view/vephim/chitiethoadon.php";
                break;

            case "QLfeed":
                    $dem = loadall_bl1();
                    $listbl =  loadall_bl();
                    $loadtk = loadall_taikhoan();
                    $loadloai = loadall_loaiphim();
                    include "./view/feedblack/QLfeed.php";
                         break;
            case "xoabl":
                         if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            delete_binhluan($id);
                        }
                         $listbl =  loadall_bl();
                         include "./view/feedblack/QLfeed.php";
                          break;
            case "thoigian":
                $loadkgc = loadall_khunggiochieu();
                include "./view/suatchieu/thoigian/thoigian.php";
                break;
            case "QLsuatchieu":
                $loadlich = loadall_lichchieu();
                include "./view/suatchieu/QLsuatchieu.php";
                break;
            case "ve":
                if(isset($_POST['tk'])&&($_POST['tk'])){
                    $searchName = $_POST['ten'];
                    $searchTieuDe = $_POST['tieude'];
                }else{
                    $searchName ="";
                    $searchTieuDe="";
                }
                $loadvephim =loadall_vephim1($searchName, $searchTieuDe);
                include "./view/vephim/ve.php";
                break;
            case "suavephim":
                if(isset($_GET['idsua'])){
                    $loadve=loadone_vephim($_GET['idsua']);
                }
                include "./view/vephim/sua.php";
                break;
            case "updatevephim":
                if(isset($_POST['capnhat'])){
                    $id =$_POST['id'];
                    $trang_thai =$_POST['trang_thai'];
                    update_vephim($id,$trang_thai);
                }    $loadvephim =loadall_vephim();
                include "view/vephim/ve.php";
             break;
            case "phong":
                $loadphong = load_phong();
                include "./view/phong/phong.php";
                break;
            case "xoaphong":
                if (isset($_GET['idxoa'])) {
                    xoa_phong($_GET['idxoa']);
                    $loadphong = load_phong();
                    include "./view/phong/phong.php";
                }
                break;
            case "suaphong":
                if (isset($_GET['ids'])) {
                    $loadphong1 = loadone_phong($_GET['ids']);
                }
                include "./view/phong/sua.php";
                break;
            case "updatephong":

                $loadphong = load_phong();
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    update_phong($id, $name);
                }
                $loadphong = load_phong();
                include "./view/phong/phong.php";
                break;

            case "themphong":

                if (isset($_POST['len'])) {
                    $name = $_POST['name'];
                    them_phong($name);
                }
                 $loadphong = load_phong();
                include "./view/phong/them.php";
                break;
            case "themthoigian":
                $loadlc = loadall_lichchieu();
                $loadphong = load_phong();
                if (isset($_POST['them'])) {
                    $id_lc= $_POST['id_lc'];
                    $id_phong = $_POST['id_phong'];
                    $thoi_gian_chieu = $_POST['tgc'];
                    them_kgc($id_lc, $id_phong, $thoi_gian_chieu);
                }
                $loadkgc = loadall_khunggiochieu();
                include "./view/suatchieu/thoigian/them.php";
                break;
                case "suathoigian":
                    if (isset($_GET['idsua'])) {
                        $load_kgc = loadone_khung_gio_chieu($_GET['idsua']);
                    }
                    include "./view/suatchieu/thoigian/sua.php";
                    break;
            case "updatethoigian":
                $loadlc = loadall_lichchieu();
                $loadphong = load_phong();
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $id_lc = $_POST['id_lc'];
                    $id_phong = $_POST['id_phong'];
                    $thoi_gian_chieu = $_POST['tgc'];
                    sua_kgc($id, $id_lc, $id_phong, $thoi_gian_chieu);
                }
                $loadkgc = loadall_khunggiochieu();
                include "./view/suatchieu/thoigian/thoigian.php";
                break;
            case "xoathoigian":
                if (isset($_GET['idxoa']) && ($_GET['idxoa'] > 0)){
                    xoa_kgc($_GET['idxoa']);
                }
                $loadkgc = loadall_khunggiochieu();
                include "./view/suatchieu/thoigian/thoigian.php";
            case "QTkh":
                
                $loadall_kh1 = loadall_taikhoan();
                include "./view/user/khachhang.php";
                break;
            case "QTvien":
                $loadall_kh = loadall_taikhoan_nv();
                include "./view/user/QTvien.php";
                break;
                case "themuser":
                    if(isset($_POST['them'])){
                      $name =$_POST['name'];
                      $user =$_POST['user'];
                      $pass = $_POST['pass'];
                      $email =$_POST['email'];
                      $phone =$_POST['phone'];
                      $dia_chi =$_POST['dia_chi'];
                      insert_taikhoan($email,$user,$pass,$name,$phone,$dia_chi);
                    }   
                    $loadall_kh= loadall_taikhoan();
                    include "./view/user/them.php";
                    break;
                    case "suatk":
                      if (isset($_GET['idsua'])) {
                          $loadtk = loadone_taikhoan($_GET['idsua']);
                      }
                      include "./view/user/sua.php";
                      break;
              case "updateuser":
                   if(isset($_POST['capnhat'])){
                      $id =$_POST['id'];
                      $name =$_POST['name'];
                      $user =$_POST['user'];
                      $pass =$_POST['pass'];
                      $email =$_POST['email'];
                      $phone =$_POST['phone'];
                      $dia_chi =$_POST['dia_chi'];
                      sua_tk($id, $name, $user, $pass, $email, $phone, $dia_chi);   
                   }
                   $loadall_kh=loadall_taikhoan();
                  include "./view/user/QTvien.php";
                  break;                  case "xoatk":
                    if(isset($_GET['idxoa'])){
                       $id = $_GET['idxoa'];
                       xoa_tk($id);
                   
                   $loadall_kh=loadall_taikhoan();
                   include "./view/user/QTvien.php";
                } else{include "./view/user/QTvien.php";}  
                break;
            case "dangxuat":
                unset($_SESSION['user']);
                header('location: login.php');
                break;
            case "home":
                $best_combo = best_combo();
                $tong_tuan = tong_week();
                $tong_thang = tong_thang();
                $tong_day = tong_day();
                $tpdc = tong_phimdc();
                $tpsc = tong_phimsc();
                $tong = tong();
                include "./view/home.php";
                break;
            case "ctve":
                if (isset($_GET['id']) && ($_GET['id'] > 0)){
                    $loadone_ve =  loadone_vephim($_GET['id']);
                }
                include "view/vephim/ct_ve.php";
                break;
        }
    } else {
        $best_combo = best_combo();
        $tong_tuan = tong_week();
        $tong_thang = tong_thang();
        $tong_day = tong_day();
        $tpdc = tong_phimdc();
        $tpsc = tong_phimsc();
        $tong = tong();
        include "./view/home.php";
    }

    include "./view/home/footer.php";
}else{
    header('location: login.php');
}
