<!-- Main content -->
<?php include "view/search.php";

?>
<section class="container">
    <div class="order-container">
DANH SÁCH VÉ ĐÃ MUA

       <?php foreach($load_ve as $ve){
           extract($ve);
           $linkhuy = "index.php?act=";
           echo ' <div class="ticket">
            <div class="ticket-position">
                <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                <div class="ticket__inner">
                       <a href="">Hủy vé</a>
                    <div class="ticket-secondary">
                        <span class="ticket__item">Mã vé <strong class="ticket__number">'.$id.'</strong></span>
                        <span class="ticket__item ticket__date">'.$ngay_chieu.'</span>
                        <span class="ticket__item ticket__time">'.$thoi_gian_chieu.'</span>
                        <span class="ticket__item">Người đặt: <span class="ticket__cinema">'.$name.'</span></span>
                        <span class="ticket__item">Thời gian đặt: <span class="ticket__hall">'.$ngay_dat.'</span></span>
                        <span class="ticket__item ticket__price">Giá: <strong class="ticket__cost">'.$price.'</strong></span>
                        <span class="ticket__item ">Trạng thái:'.$trang_thai.'</span>
                    </div>

                    <div class="ticket-primery">
                        <span class="ticket__item ticket__item--primery ticket__film">Phim : <br><strong class="ticket__movie">'.$tieu_de.'</strong></span>
                        
                        <span class="ticket__item ticket__item--primery">Ghế: <span class="ticket__place">'.$ghe.'</span></span>
                      
                         <span class="ticket__item ticket__item--primery">Combo: <span class="ticket__place">'.$combo.'</span></span>
                         
                    </div>

                   
                </div>
                <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
            </div>
        </div>';
       } ?>


    </div>
</section>

