<?php

function loadall_phim()
{
    $sql = "select * from phim where 1 order by id asc";
    $re = pdo_query($sql);
    return $re;
}
function loadall_phim_hot()
{
    $sql = "select * from `phim` where 1 order by id asc limit 0,6";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadall_phim_home()
{
    $sql = "select * from `phim` where 1 order by id asc limit 0,8 ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function them_phim($tieu_de, $img, $mo_ta, $thoiluong, $date, $id_loai)
{
    $sql = "insert into `phim` (`tieu_de`,`img`,`mo_ta`,`thoi_luong_phim`,`date_phat_hanh`,`id_loai`) values ('$tieu_de','$img','$mo_ta','$thoiluong','$date','$id_loai')";
    pdo_execute($sql);
}

function loadone_phim($id)
{
    $sql = "select * from phim where id =" . $id;
    $re = pdo_query_one($sql);
    return $re;
}

function xoa_phim($id)
{
    $sql = "delete from phim where id=" . $id;
    pdo_execute($sql);
}

function sua_phim($id, $tieu_de, $img, $mo_ta, $thoiluong, $date, $id_loai)
{
    if ($img != "") {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`img`='{$img}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai}'where `phim`.`id`=" . $id;
    } else {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai}'where `phim`.`id`=" . $id;
    }
    pdo_execute($sql);
}

//function loadall_phim1($kys="",$id_loai=0){
//    $sql="SELECT phim.id, phim.tieu_de, phim.img, phim.mo_ta, phim.thoi_luong_phim, phim.date_phat_hanh, loaiphim.name FROM phim left JOIN loaiphim ON phim.id_loai = loaiphim.id";
//    if($kys!=""){
//        $sql.=" and tieu_de like '%".$kys."%'";
//    }
//    if($id_loai>0){
//        $sql.=" and id_loai ='".$id_loai."'";
//    }
//    $sql.=" order by id desc";
//    $re=pdo_query($sql);
//    return  $re;
//}
function phim_select_all()
{
    $sql = "SELECT phim.id, phim.tieu_de, phim.img, phim.mo_ta, phim.thoi_luong_phim, phim.date_phat_hanh, loaiphim.name FROM phim left JOIN loaiphim ON phim.id_loai = loaiphim.id
            where 1 order by id asc";
    return pdo_query($sql);
}

function loadall_phim1($kys="",$id_loai=0){
    $sql="select * from phim where 1";
    if($kys!=""){
        $sql.=" and tieu_de like '%".$kys."%'";
    }
    if($id_loai>0){
        $sql.=" and id_loai ='".$id_loai."'";
    }
    $sql.=" order by id desc";
    $re=pdo_query($sql);
    return  $re;
}

function load_phimdc(){
    $sql = "select * from phim where trangthai = 0";
    $re=pdo_query($sql);
    return  $re;
}

function load_phimsc(){
    $sql = "select * from phim where trangthai = 1";
    $re=pdo_query($sql);
    return  $re;
}

function load_lc_p($id, $id_lichchieu, $id_gio) {
    $sql = "SELECT phim.id AS id_phim, phim.tieu_de, lichchieu.ngay_chieu, khung_gio_chieu.thoi_gian_chieu, lichchieu.id AS id_lichchieu, khung_gio_chieu.id AS id_gio
            FROM phim 
            INNER JOIN lichchieu ON phim.id = lichchieu.id_phim 
            INNER JOIN khung_gio_chieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu 
            WHERE phim.id = '$id' AND lichchieu.id = '$id_lichchieu' AND khung_gio_chieu.id = '$id_gio'";


    return pdo_query_one($sql);
}


function dat_phim($ten, $ngay, $gio, $gia,$tk)
{
    $sql = "insert into `ve` (`id_thoi_gian_chieu`,`id_ngay_chieu`,`id_phim`,`id_tk`,`ghe`,`price`) values ('$gio','$ngay','$ten','$gia','$tk','0','$gia')";
    pdo_execute($sql);
}