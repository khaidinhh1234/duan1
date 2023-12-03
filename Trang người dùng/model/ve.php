<?php


function them_ve($gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill, $id_lc, $id_phim, $combo) {
    $sql = 'INSERT INTO `ve` (`price`, `ngay_dat`, `ghe`, `id_tk`, `id_thoi_gian_chieu`, `id_hd`, `id_ngay_chieu`, `id_phim`, `combo`) VALUES (?,?,?,?,?,?,?,?,?)';

    // Kiểm tra xem combo có tồn tại không
    $comboValue = ($combo !== null) ? $combo : '';  // Nếu không có combo, gán giá trị mặc định

    return pdo_execute_return_interlastid($sql, $gia_ghe, $ngay_tt, $ghe, $id_user, $id_kgc, $id_bill, $id_lc, $id_phim, $comboValue);
}


function  dich_vu_insert($id_ve,$combo){
    $sql = 'INSERT INTO `dich_vu` (`id`, `combo`, `id_ve`) VALUES (NULL,?,?)';
    pdo_execute($sql,$combo,$id_ve);
}


function load_ve($id){
    $sql = "select v.id, phim.tieu_de,lichchieu.ngay_chieu,khung_gio_chieu.thoi_gian_chieu,taikhoan.name,v.ghe,v.price,v.ngay_dat, v.combo,v.trang_thai from ve v
    
    left join khung_gio_chieu on khung_gio_chieu.id = v.id_thoi_gian_chieu
    left join taikhoan on taikhoan.id = v.id_tk
    left join phim on phim.id = v.id_phim
    left join lichchieu on lichchieu.id = v.id_ngay_chieu
     where id_tk=".$id;
    $re = pdo_query($sql);
    return $re;
}

function capnhat_tt(){
    $sql = "UPDATE ve SET trang_thai = '1' WHERE id_ve = ?";
    pdo_execute($sql);
}

function trangthai_ve($id)
{
    $sql = 'UPDATE ve SET trang_thai = 1 WHERE id_hd = ?';
    pdo_execute($sql, $id);
}
function trangthai_hd($id)
{
    $sql = 'UPDATE hoa_don SET trang_thai = 1 WHERE id = ?';
    pdo_execute($sql, $id);
}

function load_ve_tt($id)
{
    $sql = "SELECT h.thanh_tien, ve.id, taikhoan.name, khung_gio_chieu.thoi_gian_chieu ,lichchieu.ngay_chieu, phim.tieu_de FROM hoa_don h
    JOIN ve ON ve.id_hd = h.id 
    JOIN taikhoan ON ve.id_tk = taikhoan.id 
    JOIN khung_gio_chieu ON khung_gio_chieu.id = ve.id_thoi_gian_chieu
    JOIN lichchieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu 
    JOIN phim ON phim.id = lichchieu.id_phim WHERE h.id = ".$id;
    return pdo_query_one($sql);
}

function khoa_ghe($id_kgc, $id_lc, $id_phim)
{
    $sql = "SELECT ve.ghe FROM ve 
    JOIN khung_gio_chieu ON ve.id_thoi_gian_chieu = khung_gio_chieu.id 
    JOIN lichchieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu  
    WHERE trang_thai = 1  AND id_thoi_gian_chieu = '$id_kgc' AND lichchieu.id = '$id_lc' AND lichchieu.id_phim = '$id_phim' ";
    return pdo_query($sql);
}