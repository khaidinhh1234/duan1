<?php
function loadall_khunggiochieu1() {
    // Truy vấn SQL join 3 bảng
    $sql = "SELECT khung_gio_chieu.id, khung_gio_chieu.thoi_gian_chieu, phim.tieu_de, phongchieu.name,lichchieu.ngay_chieu
            FROM lichchieu
            LEFT JOIN khung_gio_chieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu
            LEFT JOIN phim ON phim.id = lichchieu.id_phim
            LEFT JOIN phongchieu ON phongchieu.id = khung_gio_chieu.id_phong
            WHERE 1
            ORDER BY khung_gio_chieu.id DESC";

    $re = pdo_query($sql);
    return $re;
}
function loadall_khunggiochieu() {
    if(isset($_GET['sotrang'])){
        $sotrang=$_GET['sotrang'];
    }else{
    $sotrang=1;
    }
    $bghi =10;
    $vitri=($sotrang-1)*$bghi;
    // Truy vấn SQL join 3 bảng
    $sql = "SELECT khung_gio_chieu.id, khung_gio_chieu.thoi_gian_chieu, phim.tieu_de, phongchieu.name,lichchieu.ngay_chieu
            FROM lichchieu
            LEFT JOIN khung_gio_chieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu
            LEFT JOIN phim ON phim.id = lichchieu.id_phim
            LEFT JOIN phongchieu ON phongchieu.id = khung_gio_chieu.id_phong
            WHERE 1
            ORDER BY khung_gio_chieu.id DESC LIMIT $vitri,$bghi";

    $re = pdo_query($sql);
    return $re;
}
function loadone_khung_gio_chieu($id)
{
    $sql = "select * from khung_gio_chieu where id =" . $id;
    $re = pdo_query_one($sql);
    return $re;
}

function them_kgc($id_lc, $id_phong, $thoi_gian_chieu){
    $sql = "INSERT INTO `khung_gio_chieu` (`id_lich_chieu`,`id_phong`,`thoi_gian_chieu`) VALUES ('$id_lc','$id_phong','$thoi_gian_chieu')";
    pdo_execute($sql);
}

function sua_kgc($id,$id_lc,$id_phong,$thoi_gian_chieu)
{
    $sql = "UPDATE khung_gio_chieu SET `id_lich_chieu`='{$id_lc}',`id_phong`='{$id_phong}',`thoi_gian_chieu`='{$thoi_gian_chieu}'WHERE `khung_gio_chieu`.`id`=" . $id;

    pdo_execute($sql);
}
function xoa_kgc($id)
{
    $sql = "DELETE FROM khung_gio_chieu WHERE id=" . $id;
    pdo_execute($sql);
}
