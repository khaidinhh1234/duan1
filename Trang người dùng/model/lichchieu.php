<?php
    function loadall_lichchieu(){
        $sql="select * from lichchieu where 1 order by id asc ";
        $re = pdo_query($sql);
        return $re;
    }
 
?>