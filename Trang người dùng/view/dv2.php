<?php include "view/search.php";

include 'global.php';
?>

 <div class=" col-lg-offset-1">
<div class="tong">

   
<form action="index.php?act=dv3" method="post">
<h2 class="phim">Phim bạn chọn  : <?= $_SESSION['tong']['tieu_de'] ?></h2>
<span>Suất : <?=  $_SESSION['tong']['thoi_gian_chieu'] ?> ------ <?=  $_SESSION['tong']['ngay_chieu'] ?></span> <br>
    <span>Ghế đã chọn :</span>
    <div class="checked-place">
        <?php if (isset($ten_ghe['ghe'])) {
            foreach ($ten_ghe['ghe'] as $ghe) {
                $_SESSION['tong']['ghe'] = $ghe;
                echo  '<span class="choosen-place">' . implode(', ', $ghe) . '</span>';
                echo  '<input type="hidden" name="ten_ghe[]" value="' . $ghe . '">';
            }
        } else {
        } ?>
    </div>
    <!-- <span>T13</span> -->
   
    <div class="tongtien">
       <div class="checked-result"> <span>Tổng cộng :</span>
        
            <input name="giaghe" style=" width: 80px; font-size: 20px; border: none;" type="text" id="gia_ghe"
                   value="<?php if (!isset($_SESSION['tong'][0])) {0;} else {echo $_SESSION['tong'][0];} ?>"> VND
        </div>
    </div>
    </div> </div>
    </div>
<div class="booking-pagination booking-pagination--margin">
<!--    <input type="submit" name="tiep_tuc" class="booking-pagination__prev" value="quay lại">-->
   <div class="tieptuc"> <input type="submit" name="tiep_tuc" class="booking-pagination__next" value="Tiếp Tục">
</div></div>
<div class="clearfix"></div>
</form></section></div></div>


