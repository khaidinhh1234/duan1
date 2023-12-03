<?php
include "view/search.php";
extract($load_ve_tt) ?>
<section class="container">
    <div class="order-container">
        <div class="order">
            <img class="order__images" alt='' src="images/tickets.png">
            <p class="order__title">Thank you <br><span class="order__descript">you have successfully purchased tickets</span></p>
        </div>

        <div class="ticket">
            <div class="ticket-position">
                <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                <div class="ticket__inner">

                    <div class="ticket-secondary">
                        <span class="ticket__item">Mã vé: <strong class="ticket__number"><?=$id?></strong></span>
                        <span class="ticket__item ticket__date"><?=$ngay_chieu?></span>
                        <span class="ticket__item ticket__time"><?=$thoi_gian_chieu?></span>
                        <span class="ticket__item">Cinema: <span class="ticket__cinema">Cineworld</span></span>
                        <span class="ticket__item">Hall: <span class="ticket__hall">Visconti</span></span>
                        <span class="ticket__item ticket__price">Giá: <strong class="ticket__cost"><?=$thanh_tien?></strong></span>
                    </div>

                    <div class="ticket-primery">
                        <span class="ticket__item ticket__item--primery ticket__film">Phim: <br><strong class="ticket__movie"><?=$tieu_de?></strong></span>
                    </div>


                </div>
                <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
            </div>
        </div>

        <div class="ticket-control">
            <a href="#" class="watchlist list--download">Download</a>
            <a href="#" class="watchlist list--print">Print</a>
        </div>

    </div>
</section>
