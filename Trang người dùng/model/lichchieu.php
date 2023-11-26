<?php
function loadall_lich($date="",$id_phim=0){
    $sql="SELECT l.id, l.id_phim, phongchieu.name, l.ngay_chieu, l.thoi_gian_chieu FROM lichchieu l 
    left JOIN phongchieu ON phongchieu.id = l.id_phong_chieu";
    if($date!=""){
        $sql.=" and ngay_chieu = '".$date."'";
    }
    if($id_phim>0){
        $sql.=" and id_phim ='".$id_phim."'";
    }
    $sql.=" order by ngay_chieu desc";
    $re=pdo_query($sql);
    return  $re;
}


