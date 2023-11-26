<?php include "view/search.php"
?>
    <!-- Main content -->
    <div class="place-form-area">
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
            <h1>Combo Đồ ăn</h1>
		<div class="prodoan">
			<div class="prodo">
				<img src="images/cinema/combo.jpg" alt="Prodo 1">
				<h3>Combo Wish C1</h3>
				<p>01 Ly phim  + 01 ly nước ngọt size M + 01 Hộp bắp + FREE Up Vị bất kỳ</p>

				<p>Giá: 125.000đ</p>
				<input type="number" name="soluong" min="1" max="10" value="1">
				
			</div>
            
			<div class="prodo">
				<img src="images/cinema/combo.jpg" alt="Prodo 2">
				<h3>Combo Wish B3</h3>
				<p>01 Ly phim  + 01 ly nước ngọt size L + 01 Hộp bắp + FREE Up Vị bất kỳ</p>
				<p>Giá: 185.000đ</p>
				<input type="number" name="soluong" min="1" max="10" value="1">
			</div>
			<div class="prodo">
				<img src="images/cinema/combo.jpg" alt="Prodo 3">
				<h3>Combo Wish A5</h3>
				<p>01 Ly phim  + 01 ly nước ngọt size L + 01 Hộp bắp + FREE Up Vị bất kỳ</p>
				<p>Giá: 149.000đ</p>
				<input type="number" name="soluong" min="1" max="10" value="1">
			</div>
			<div class="prodo">
				<img src="images/cinema/combo.jpg" alt="Product 4">
				<h3>Combo Wish D2</h3>
				<p>01 Ly phim  + 01 ly nước ngọt size XL + 01 Hộp bắp + FREE Up Vị bất kỳ</p>
				<p>Giá: 259.000đ</p>
				<input type="number" name="soluong" min="1" max="10" value="1">
			</div>
		</div>
		<div class="sliders">
			<img src="images/cinema/combo.jpg" alt="Promotion 1">
			<img src="images/cinema/combo.jpg" alt="Promotion 2">
			<img src="images/cinema/combo.jpg" alt="Promotion 3">
		</div>
		<div class="reservation-form12">
			<h2>đặt ngay</h2>
		</div>
    </div>
    </section>



<div class="clearfix"></div>
<form id='film-and-time' class="booking-form" method='get' action='index.php?act=thanhtoan'>

    <input type='text' name='choosen-number' class="choosen-number">
    <input type='text' name='choosen-number--cheap' class="choosen-number--cheap">
    <input type='text' name='choosen-number--middle' class="choosen-number--middle">
    <input type='text' name='choosen-number--expansive' class="choosen-number--expansive">
    <input type='text' name='choosen-cost' class="choosen-cost">
    <input type='text' name='choosen-sits' class="choosen-sits">


    <div class="booking-pagination booking-pagination--margin">
        <a href="index.php?act=ghe" class="booking-pagination__prev">
            <span class="arrow__text arrow--prev">prev step</span>
            <span class="arrow__info">what&amp;where&amp;when</span>
        </a>
        <a href="index.php?act=thanhtoan" class="booking-pagination__next">
            <span class="arrow__text arrow--next">next step</span>
            <span class="arrow__info">checkout</span>
        </a>
    </div>
</form>

<div class="clearfix"></div>


