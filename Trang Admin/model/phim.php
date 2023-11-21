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
function them_phim($tieu_de, $daodien, $dienvien, $img, $mo_ta, $quoc_gia, $gia_han_tuoi, $thoiluong, $date, $id_loai)
{
    $sql = "insert into `phim` (`tieu_de`,`daodien`,`dienvien`,`img`,`mo_ta`,`quoc_gia`,`gia_han_tuoi`,`thoi_luong_phim`,`date_phat_hanh`,`id_loai`) values ('$tieu_de','$daodien','$dienvien','$img','$mo_ta','$quoc_gia','$gia_han_tuoi','$thoiluong','$date','$id_loai')";
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

function sua_phim($id, $tieu_de, $daodien, $dienvien,$quoc_gia,$gia_han_tuoi, $img, $mo_ta, $thoiluong, $date, $id_loai)
{
    if ($img != "") {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`daodien`='{$daodien}',`dienvien`='{$dienvien}',`quoc_gia`='{$quoc_gia}',`gia_han_tuoi`='{$gia_han_tuoi}',`img`='{$img}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai}'where `phim`.`id`=" . $id;
    } else {
        $sql = "update phim set `tieu_de`='{$tieu_de}',`daodien`='{$daodien}',`dienvien`='{$dienvien}',`quoc_gia`='{$quoc_gia}',`gia_han_tuoi`='{$gia_han_tuoi}',`mo_ta`='{$mo_ta}',`thoi_luong_phim`='{$thoiluong}',`date_phat_hanh`='{$date}',`id_loai`='{$id_loai}'where `phim`.`id`=" . $id;
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