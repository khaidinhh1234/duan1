<?php
function loadall_taikhoan(){
    $sql = "select * from taikhoan where 1 order by id asc";
    $re = pdo_query($sql);
    return $re;
}

function loadall_taikhoanadmin(){
    $sql = "select * from taikhoan_admin where 1 order by id asc";
    $re = pdo_query($sql);
    return $re;
}