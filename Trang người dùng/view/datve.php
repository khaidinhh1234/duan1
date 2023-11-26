<?php include "view/search.php";
// extract($phim);
?>

<section class="container">
    <div class="order-container">
        <div class="order">
            <img class="order__images" alt='' src="images/tickets.png">
            <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
        </div>
    </div>
    <div class="order-step-area">
        <div class="order-step first--step">1. What &amp; Where &amp; When</div>
    </div>
    <h2 class="page-heading heading--outcontainer"><?=$tieu_de?></h2>
</section>

<section class="container">
    <div class="col-sm-12">

            <h2 class="page-heading">Date</h2>

            <div class="choose-container choose-container--short" class="col-sm-12">


                <div class="choose-container choose-container--short">

                    <div class="datepicker">
                        <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                        <input type="date" id="datepicker" value='03/10/2014' class="datepicker__input">
                    </div>
                </div>

                <div class="choose-indector choose-indector--time">
            <strong>Ngày chọn: </strong><span class="choosen-area"></span>
        </div>
        <h2 class="page-heading">Chọn thời gian xem</h2>
       <?php foreach($lc as $c){
           extract($c);
           echo '<div class="time-select time-select--wide">
            <div class="time-select__group group--first">
                <div class="col-sm-3">
                    <p class="time-select__place">Phòng: '.$name.'</p>
                </div>
                <ul class="col-sm-2 items-wrap">
                    <li class="time-select__item" data-time="'.$thoi_gian_chieu.'">'.$thoi_gian_chieu.'</li>
                </ul>
            </div>

        </div>';
       } ?>


        <div class="choose-indector choose-indector--time">
            <strong>Thời gian chọn: </strong><span class="choosen-area"></span>
        </div>
    </div>

</section>

<div class="clearfix"></div>

<form id='film-and-time' class="booking-form" method='get' action='index.php?act=ghe'>
    <input type='text' name='choosen-movie' class="choosen-movie">

    <input type='text' name='choosen-city' class="choosen-city">
    <input type='text' name='choosen-date' class="choosen-date">

    <input type='text' name='choosen-cinema' class="choosen-cinema">
    <input type='text' name='choosen-time' class="choosen-time">


    <div class="booking-pagination">
        <a href="#" class="booking-pagination__prev hide--arrow">
            <span class="arrow__text arrow--prev"></span>
            <span class="arrow__info"></span>
        </a>
        <a href="index.php?act=ghe" class="booking-pagination__next">
            <span class="arrow__text arrow--next">next step</span>
            <span class="arrow__info">choose a sit</span>
        </a>
    </div>

</form>

<div class="clearfix"></div>





