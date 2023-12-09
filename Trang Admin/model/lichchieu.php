<?php
function loadall_lichchieu1(){
    $sql = "select l.id,phim.tieu_de,l.ngay_chieu from lichchieu l 
            left join phim on phim.id= l.id_phim
            where 1 order by id desc";
    $re = pdo_query($sql);
    return $re;
}
function loadall_lichchieu(){
    if(isset($_GET['sotrang'])){
        $sotrang = $_GET['sotrang'];

    }else{
        $sotrang=1;
    }
    $bghi=10;
    $vitri=($sotrang - 1 )*3;
    $sql = "select l.id,phim.tieu_de,l.ngay_chieu from lichchieu l 
            left join phim on phim.id= l.id_phim
            where 1 order by id desc limit $vitri,$bghi";
    $re = pdo_query($sql);
    return $re;
}
function loadone_lichchieu($id)
{
    $sql = "select * from lichchieu where id =" . $id;
    $re = pdo_query_one($sql);
    return $re;
}

function them_lichchieu($id_phim,$ngay_chieu){
    $sql = "insert into `lichchieu`(`id_phim`,`ngay_chieu`) values ('$id_phim','$ngay_chieu')";
    pdo_execute($sql);
}

function sua_lichchieu($id,$id_phim,$ngay_chieu)
{
    $sql = "update lichchieu set `id_phim`='{$id_phim}',`ngay_chieu`='{$ngay_chieu}'where `lichchieu`.`id`=" . $id;

    pdo_execute($sql);
}
function xoa_lichchieu($id){
    $sql= "DELETE FROM lichchieu WHERE id =".$id;
    pdo_execute($sql);
}