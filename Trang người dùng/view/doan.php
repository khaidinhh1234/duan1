<?php include "view/search.php"
?>


<style>
    
    .check_do_an{
        color: white;
    }
    body {
	font-family: Arial, sans-serif;
}

.container {
	/* max-width: 800px; */
	margin: 0 auto;
	/* padding: 20px; */
}

h1 {
	text-align: center;
	margin-bottom: 40px;
}

.prodoan {
	display: flex;
	flex-wrap: wrap;
	justify-content: center; 
}

.prodo {
	width: 400px;
	margin: 20px;
	text-align: center;
}

.prodo img {
	width: 100%;
	height: auto;
}

.prodo h3 {
	margin-top: 10px;
}

.sliders {
	margin-top: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	overflow: hidden;
}

.sliders img {
	width: 400px;
	height: 200px;
	object-fit: cover;
	margin: 0 10px;
}

.reservation-form12 {
	margin-top: 40px;
	text-align: center;
}

.reservation-form12 h2 {
	margin-bottom: 20px;
}

.reservation-form12 form {
	display: flex;
	flex-direction: column;
	align-items: center;
	padding: 20px;
}

.reservation-form12 label {
	margin-top: 10px;
}
.reservation-form12 input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	cursor: pointer;
}

.reservation-form12 input[type="submit"]:hover {
	background-color: #45a049;
}
h1{
    font-weight:bold;
    color: #ffa200;
    font-size: 40px;
}
h2{
    color:rgb(233, 179, 3);
}
p{
    font-size: 1.2vw;
}
.booking-pagination__next{
    font-size: 1.2vw;
}
.tien{
    color: #4c4145;
}
</style>
    
</style>
<!-- Main content -->
<div class="place-form-area">
    <section class="container">
        <div class="order-container">
            <div class="order">
                <img class="order__images" alt='' src="images/tickets.png">
                <p class="order__title">Book a ticket <br><span class="order__descript">Tận Hưởng Thời Gian Xem Phim Vui Vẻ</span></p>

            </div>
        </div>
        <h1>Combo Đồ ăn</h1>
        <div class="prodoan">
            <div class="prodo">
                <img src="images/cinema/combo.jpg" alt="Prodo 1" >
                <h3>Combo Wish C1</h3>
                <p>01 Ly phim + 01 ly nước ngọt size M + 01 Hộp bắp + FREE Up Vị bất kỳ</p>

                <p>Giá: 125.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='1' check-place = 'Combo-Wish-C1 '>CHỌN NGAY</span>
                </div>


            </div>

            <div class="prodo" >
                <img src="images/cinema/combo.jpg" alt="Prodo 2" >
                <h3>Combo Wish B3</h3>
                <p>01 Ly phim + 01 ly nước ngọt size L + 01 Hộp bắp + FREE Up Vị bất kỳ</p>
                <p>Giá: 185.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='2' check-place = 'Combo-Wish-B3 '>CHỌN NGAY </span>
                </div>

            </div>

        </div>

</div>
<form action="index.php?act=dv4" method="post">
<section class="container">
<div class="col-sm-12">
    <div class="checkout-wrapper">
        <h2 class="page-heading">Thông tin</h2>
        <ul class="book-result">
            <li class="book-result__item">Phim:<span class="book-result__count booking-cost"><?php echo $_SESSION['tong']['tieu_de'] ?></span></li>
            <li class="book-result__item">Ngày chiếu: <span class="book-result__count booking-cost"><?php echo $_SESSION['tong']['ngay_chieu'] ?></span></li>
            <li class="book-result__item">Khung giờ chiếu: <span class="book-result__count booking-cost"><?php echo $_SESSION['tong']['thoi_gian_chieu'] ?></span></li>

            <li class="book-result__item">Số ghế: <span class="book-result__count booking-cost"><?php
                    if (isset($ten_ghe['ghe'])) {
                        $ghes = $ten_ghe['ghe'];
                        echo '<span class="choosen-place">' . implode(', ', $ghes) . '</span>';

                        // Tạo các hidden input cho mỗi ghế
                        foreach ($ghes as $ghe) {
                            echo '<input type="hidden" name="ten_ghe[]" value="' . $ghe . '">';
                        }
                    }
                    ?>
</span></li>
            <li class="book-result__item">Combo:</span> <span class="book-result__count booking-cost"><span class="check-doan"> <?php
                                 if (isset($ten_doan['doan'])) {
                                    foreach ($ten_doan['doan'] as $doan) {
                                        echo  '<span class="check-doan">' . $doan . '</span>';
                                        echo  '<input type="text" name="ten_do_an[]" value="' . $doan . '">';
                                    }
                                } else {
                                } ?></span>
</span></li>

        </ul>
    </div>


</div>


<h2 class="tien">Tổng Tiền:
    <input style="width: 130px;
                  height: 40px;
                  border-radius: 5px;
                  font-size: 1.5vw;
                  border: white 0.5px solid;" name="giaghe"  type="text" id="gia_ghe"
           value="<?php echo $_SESSION['tong'][0] ;
           ?>"> VND </h2></section>
<div class="clearfix"></div>
<div class="booking-pagination booking-pagination--margin">
   <input type="submit" heft= class="btn btn-md" style="color:black; border: #969b9f 1px solid;" value="quay lại">
    <input type="submit" name="tiep_tuc" class="btn btn-md btn--danger" value="tiếp tục">
</div>
<div class="reservation-form12">
			<h2>Đặt Combo ngay nhận ngay may mắn  </h2>
			<h2 id="text" style="display:none">BẠN ĐÃ ĐẶT THÀNH CÔNG</h2>
		</div>
		<div class="sliders">
			<img src="images/cinema/combo.jpg" alt="Promotion 1">
			<img src="images/cinema/combo.jpg" alt="Promotion 2">
			<img src="images/cinema/combo.jpg" alt="Promotion 3">
		</div></div>
</form>

<div class="clearfix"></div>

