<?php include "view/search.php";
extract($phim);

?>

<div class="wrapper">

    <!-- Main content -->

    <section class="container">
        <div class="order-container">
            <div class="order">
                <img class="order__images" alt='' src="images/tickets.png">
                <p class="order__title">Book a ticket <br><span class="order__descript">Tận Hưởng Thời Gian Xem Phim Vui Vẻ</span></p>

            </div>
        </div>
        <div class="order-step-area">
            <div class="order-step first--step">1  Chọn Lịch Chiếu &amp; Thời Gian</div>
        </div>
        <h2 class="page-heading heading--outcontainer">Phim Bạn Chọn</h2>
    </section>

    <div class="choose-film">
        <div class="swiper-container">
            <div class="swiper-wrapper">

            </div>
        </div>
    </div>

    <section class="container">
        <div class="col-sm-12">
            <div class="choose-indector choose-indector--film">
                <strong>Phim Đã Chọn </strong><span class="choosen-area"><?=$tieu_de?></span>

            </div>


            <div class="choose-container choose-container--short">

            </div>
            <h2 class="page-heading">Chọn lịch chiếu</h2>
            <div class="choose-container choose-container--short" class="col-sm-12">
                <?php
                if (empty($lc)) {
                    echo 'Không có lịch chiếu.';
                } else {
                    foreach ($lc as $l) {
                        extract($l);

                        // Kiểm tra nếu ngày chiếu lớn hơn ngày hiện tại
                        if ($l['ngay_chieu'] > $realtime) {
                            ?>
                            <a href="index.php?act=datve&id=<?= $phim['id'] ?>&id_lc=<?= $l['id'] ?>">
                                <div class="col-sm-12" style="background-color:#ffd564;
                                                                padding: 5px;
                                                                max-width: 100px;
                                                                margin: 10px;
                                                                display: flex;
                                                                justify-content: center;
                                                                border-top-right-radius: 10px;
                                                                border-bottom-left-radius: 10px;" >
                                    <?= $l['ngay_chieu'] ?>
                                </div>
                            </a>
                            <?php
                        }

                    }
                ?></div>
                <h2 class="page-heading" style="margin-top: 100px;">Chọn Thời gian chiếu</h2>
                <div class="time-select time-select--wide">
                    <div class="time-select__group group--first">
                        <div class="col-sm-3">
                            <p class="time-select__place">CINPASS</p>
                        </div>
                        <?php foreach ($khunggio as $g) { ?>
                        <ul class="col-sm-1 items-wrap">
                            <a href="index.php?act=datve2&id=<?= $phim['id'] ?>&id_lc=<?= $g['id_lich_chieu'] ?>&id_g=<?= $g['id'] ?>">
                                <li class="time-select__item" data-time='<?= $g['thoi_gian_chieu'] ?>'><?= $g['thoi_gian_chieu'] ?></li>
                                </a>

                        </ul>
                        <?php } } ?>
                    </div>

        </div>

    </section>

    <div class="clearfix"></div>

    <form id='film-and-time' class="booking-form" method='get' action='https://amovie.gozha.net/book2.html'>
        <input type='text' name='choosen-movie' class="choosen-movie">

        <input type='text' name='choosen-city' class="choosen-city">
        <input type='text' name='choosen-date' class="choosen-date">

        <input type='text' name='choosen-cinema' class="choosen-cinema">
        <input type='text' name='choosen-time' class="choosen-time">


    </form>

    <div class="clearfix"></div>

</div>

<!-- open/close -->
<div class="overlay overlay-hugeinc">

    <section class="container">

        <div class="col-sm-4 col-sm-offset-4">
            <button type="button" class="overlay-close">Close</button>
            <form id="login-form" class="login" method='get' novalidate=''>
                <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                <div class="social social--colored">
                    <a href='#' class="social__variant fa fa-facebook"></a>
                    <a href='#' class="social__variant fa fa-twitter"></a>
                    <a href='#' class="social__variant fa fa-tumblr"></a>
                </div>

                <p class="login__tracker">or</p>

                <div class="field-wrap">
                    <input type='email' placeholder='Email' name='user-email' class="login__input">
                    <input type='password' placeholder='Password' name='user-password' class="login__input">

                    <input type='checkbox' id='#informed' class='login__check styled'>
                    <label for='#informed' class='login__check-info'>remember me</label>
                </div>

                <div class="login__control">
                    <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                    <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                </div>
            </form>
        </div>

    </section>
</div>

