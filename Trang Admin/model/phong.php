<?php
function load_phong(){
    $sql = "select * from phongchieu where 1";
    $re = pdo_query($sql);
    return $re;

}