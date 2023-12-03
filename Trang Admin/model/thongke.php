<?php
function load_thongke_doanhthu()
{
    $sql = "SELECT 
    phim.id as id, 
    phim.tieu_de as tieu_de, 
    loaiphim.name as ten_loaiphim, 
    COUNT(ve.id) as so_luong_ve_dat, 
    SUM(hoa_don.thanh_tien) as sum_thanhtien
FROM 
    phim
LEFT JOIN 
    loaiphim ON loaiphim.id = phim.id_loai
LEFT JOIN 
    lichchieu ON phim.id = lichchieu.id_phim
LEFT JOIN 
    khung_gio_chieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu
LEFT JOIN 
    ve ON ve.id_thoi_gian_chieu = khung_gio_chieu.id AND ve.trang_thai = 1
LEFT JOIN 
    hoa_don ON hoa_don.id = ve.id_hd
GROUP BY 
    phim.id
ORDER BY 
    phim.id DESC;";

    $listtk = pdo_query($sql);

    return $listtk;
}

function tong(){
    $sql = "SELECT 
    SUM(so_luong_ve_dat) AS tong_so_luong_ve_dat,
    SUM(sum_thanhtien) AS tong_doanh_thu
FROM (
    SELECT 
        phim.id as id, 
        phim.tieu_de as tieu_de, 
        loaiphim.name as ten_loaiphim, 
        COUNT(ve.id) as so_luong_ve_dat, 
        SUM(hoa_don.thanh_tien) as sum_thanhtien
    FROM 
        phim
    LEFT JOIN 
        loaiphim ON loaiphim.id = phim.id_loai
    LEFT JOIN 
        lichchieu ON phim.id = lichchieu.id_phim
    LEFT JOIN 
        khung_gio_chieu ON lichchieu.id = khung_gio_chieu.id_lich_chieu
    LEFT JOIN 
        ve ON ve.id_thoi_gian_chieu = khung_gio_chieu.id AND ve.trang_thai = 1
    LEFT JOIN 
        hoa_don ON hoa_don.id = ve.id_hd
    GROUP BY 
        phim.id
) AS phim_stats;
";
    $all = pdo_query($sql);
    return $all;
}