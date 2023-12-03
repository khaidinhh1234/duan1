<?php
function loadall_vephim(){
    $sql="SELECT v.id,phim.tieu_de ,v.price, v.ngay_dat,v.ghe,v.combo, taikhoan.name, khung_gio_chieu.thoi_gian_chieu ,v.id_hd,v.trang_thai FROM ve v 
    LEFT JOIN taikhoan ON taikhoan.id = v.id_tk 
    LEFT JOIN khung_gio_chieu ON khung_gio_chieu.id = v.id_thoi_gian_chieu 
     LEFT JOIN phim ON phim.id = v.id_phim                                                                                                            
    WHERE 1 ORDER BY id DESC;";
    $re=pdo_query($sql);
    return $re;
}
function loadone_vephim($id){
    $sql="SELECT v.id,phim.tieu_de ,v.price, v.ngay_dat,v.ghe,v.combo, taikhoan.name, khung_gio_chieu.thoi_gian_chieu ,v.id_hd,v.trang_thai FROM ve v 
    LEFT JOIN taikhoan ON taikhoan.id = v.id_tk 
    LEFT JOIN khung_gio_chieu ON khung_gio_chieu.id = v.id_thoi_gian_chieu 
     LEFT JOIN phim ON phim.id = v.id_phim                                                                                                            
    WHERE  v.id=".$id;
    $re =pdo_query_one($sql);
    return $re ;

}
function update_vephim($id,$trang_thai){
    $sql = "update ve set `trang_thai`='{$trang_thai}' where `ve`.`id`=" . $id;
    pdo_execute($sql);
}