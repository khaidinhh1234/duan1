<?php include "view/search.php";
// extract($phim);
?>



    <section class="container">
        <div class="order-container">
            <div class="order">
                <img class="order__images" alt='' src="images/tickets.png">
                <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                <div class="order__control">
                    <a href="#" class="order__control-btn active">Purchase</a>
                    <a href="#" class="order__control-btn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="order-step-area">
            <div class="order-step first--step">1. What &amp; Where &amp; When</div>
        </div>

        <h2 class="page-heading heading--outcontainer">Choose a movie</h2>
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
                <strong>Choosen: </strong><span class="choosen-area"><?=$tieu_de?></span>
            </div>

            <h2 class="page-heading">City &amp; Date</h2>

            <div class="choose-container choose-container--short">

                <div class="datepicker">
                    <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                    <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                </div>
            </div>
            <h2 class="page-heading">Pick time</h2>

            <div class="time-select time-select--wide">
                <div class="time-select__group group--first">
                    <div class="col-sm-3">
                        <p class="time-select__place">Cineworld</p>
                    </div>
                    <ul class="col-sm-6 items-wrap">
                        <li class="time-select__item" data-time='09:40'>09:40</li>
                        <li class="time-select__item" data-time='13:45'>13:45</li>
                        <li class="time-select__item" data-time='15:45'>15:45</li>
                        <li class="time-select__item" data-time='19:50'>19:50</li>
                        <li class="time-select__item" data-time='21:50'>21:50</li>
                    </ul>
                </div>

                <div class="time-select__group">
                    <div class="col-sm-3">
                        <p class="time-select__place">Empire</p>
                    </div>
                    <ul class="col-sm-6 items-wrap">
                        <li class="time-select__item" data-time='10:45'>10:45</li>
                        <li class="time-select__item" data-time='16:00'>16:00</li>
                        <li class="time-select__item" data-time='19:00'>19:00</li>
                        <li class="time-select__item" data-time='21:15'>21:15</li>
                        <li class="time-select__item" data-time='23:00'>23:00</li>
                    </ul>
                </div>

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
            </div>

            <div class="choose-indector choose-indector--time">
                <strong>Choosen: </strong><span class="choosen-area"></span>
            </div>
        </div>

    </section>

    <div class="clearfix"></div>

    <form id='film-and-time' class="booking-form" method='get' action='index.php?act?chonghe'>
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
            <a href="book2.html" class="booking-pagination__next">
                <span class="arrow__text arrow--next">next step</span>
                <span class="arrow__info">choose a sit</span>
            </a>
        </div>

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

<!-- JavaScript-->
<!-- jQuery 1.9.1-->
<script src="ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
<!-- Migrate -->
<script src="js/external/jquery-migrate-1.2.1.min.js"></script>
<!-- jQuery UI -->
<script src="code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Bootstrap 3-->
<script src="netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

<!-- Mobile menu -->
<script src="js/jquery.mobile.menu.js"></script>
<!-- Select -->
<script src="js/external/jquery.selectbox-0.2.min.js"></script>
<!-- Swiper slider -->
<script src="js/external/idangerous.swiper.min.js"></script>

<!-- Form element -->
<script src="js/external/form-element.js"></script>
<!-- Form validation -->
<script src="js/form.js"></script>

<!-- Custom -->
<script src="js/custom.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        init_BookingOne();
    });
</script>

</body>

<!-- Mirrored from amovie.gozha.net/book1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:39:39 GMT -->
</html>