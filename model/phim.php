<?php
 function loadall_phim(){
     $sql = "select * from phim where 1 order by id asc";
     $re = pdo_query($sql);
     return $re;
 }
 function loadall_phim1($keyw="",$idloai=0){
    $sql="select * from phim where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($idloai){
        $sql.=" and idloai ='".$idloai."'";
    }
    $sql.=" order by id desc";
    $listphim=pdo_query($sql);
    return  $listphim;
}

function them_phim($tieu_de,$img,$mo_ta){
    $sql = "insert into `phim`(`tieu_de`,`img`,`mo_ta`) values ('$tieu_de','$img','$mo_ta')";
    pdo_execute($sql);
}

function loadone_phim($id){
    $sql = "select * from phim where id =".$id;
    $re = pdo_query_one($sql);
    return $re;
}

function xoa_phim($id){
    $sql = "delete from phim where id=".$id;
    pdo_execute($sql);
}

function update_phim($id,$tieu_de,$img,$mo_ta){
    $sql = "update phim set tieu_de ='$tieu_de',
                            img ='$img',
                            mo_ta ='$mo_ta'
                         where id =$id";
    pdo_execute($sql);
}
