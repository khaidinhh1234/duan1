<?php

function loadall_phim()
{
    if(isset($_GET['sotrang'])){
        $sotrang = $_GET['sotrang'];

    }else{
        $sotrang=1;
    }
    $bghi=5;
    $vitri=($sotrang - 1 )*3;
    $sql = "select * from phim where 1 order by id desc limit $vitri,$bghi";
    $re = pdo_query($sql);
    return $re;
}
function loadall_phim2(){
    $sql="select * from phim where 1 order by id desc ";
    $re = pdo_query($sql);
    return $re ;
}

function them_phim($tieu_de, $daodien, $dienvien, $img, $mo_ta, $thoiluong, $quoc_gia, $gia_han_tuoi, $date, $id_loai,$link)
{
    $sql = "insert into `phim` (`tieu_de`,`daodien`,`dienvien`,`img`,`mo_ta`,`thoi_luong_phim`,`quoc_gia`,`gia_han_tuoi`,`date_phat_hanh`,`id_loai`,`link_trailer`) values ('$tieu_de','$daodien','$dienvien','$img','$mo_ta','$thoiluong','$quoc_gia','$gia_han_tuoi','$date','$id_loai','$link')";
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

function sua_phim($id, $tieu_de, $daodien, $dienvien, $quoc_gia, $gia_han_tuoi, $img, $mo_ta, $thoiluong, $date, $id_loai,$link)
{
    if ($img != "") {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`daodien`='{$daodien}',`dienvien`='{$dienvien}',`quoc_gia`='{$quoc_gia}',`gia_han_tuoi`='{$gia_han_tuoi}',`img`='{$img}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai} ',`link_trailer`='{$link}' where `phim`.`id`=" . $id;
    } else {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`daodien`='{$daodien}',`dienvien`='{$dienvien}',`quoc_gia`='{$quoc_gia}',`gia_han_tuoi`='{$gia_han_tuoi}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai}' ,`link_trailer`='{$link}' where `phim`.`id`=" . $id;
    }
    pdo_execute($sql);
}
//seach phim
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

function tong_phimdc(){
    $sql = "SELECT COUNT(*) AS total_phim
FROM phim
WHERE date_phat_hanh < CURDATE();";
    $re=pdo_query($sql);
    return  $re;
}

function tong_phimsc(){
    $sql = "SELECT COUNT(*) AS total_phim
FROM phim
WHERE date_phat_hanh > CURDATE();";
    $re=pdo_query($sql);
    return  $re;
}