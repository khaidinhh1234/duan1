<?php
function loadall_lichchieu(){
    $sql = "select l.id,phim.tieu_de,phongchieu.name,l.ngay_chieu,l.thoi_gian_chieu from lichchieu l 
            left join phim on phim.id= l.id_phim
            left join phongchieu on phongchieu.id= l.id_phong_chieu
            where 1 order by id desc";
    $re = pdo_query($sql);
    return $re;
}

function loadone_lichchieu($id)
{
    $sql = "select * from lichchieu where id =" . $id;
    $re = pdo_query_one($sql);
    return $re;
}

function them_lichchieu($id_phim,$id_phong_chieu,$thoi_gian_chieu,$ngay_chieu){
    $sql = "insert into `lichchieu`(`id_phim`,`id_phong_chieu`,`thoi_gian_chieu`,`ngay_chieu`) values ('$id_phim','$id_phong_chieu','$thoi_gian_chieu','$ngay_chieu')";
    pdo_execute($sql);
}

function sua_lichchieu($id,$id_phim,$id_phong_chieu,$thoi_gian_chieu,$ngay_chieu)
{
        $sql = "update lichchieu set `id_phim`='{$id_phim}',`id_phong_chieu`='{$id_phong_chieu}',`thoi_gian_chieu`='{$thoi_gian_chieu}',`ngay_chieu`='{$ngay_chieu}'where `lichchieu`.`id`=" . $id;

    pdo_execute($sql);
}