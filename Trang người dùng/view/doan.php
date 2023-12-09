<?php include "view/search.php"
?>
<style>
    .container {
        width: 80%;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
    }

    .prodoan {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap; /* Cho phép các phần tử xuống dòng khi không đủ không gian */
        margin-top: 20px;
    }

    .prodo {
        width: 23%;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .check_do_an {
        background-color: #dc3545;
        color: white;
        padding: 8px 15px;
        border: none;
        cursor: pointer;
    }
</style>
<!-- Main content -->
<div class="place-form-area">
    <section class="container">
        <h1>Combo Đồ ăn</h1>
        <div class="prodoan">
            <div class="prodo">
                <img src="imgavt/combo1.png" alt="Prodo 1" >
                <h3>Combo Coca</h3>
                <p>TIẾT KIỆM 28K!!! Gồm: 1 Bắp (69oz) + 1 Nước có gaz (22oz)</p>

                <p>Giá: 59.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='3' check-place = ' Combo-Coca '>CHỌN NGAY</span>
                </div>


            </div>
            <div class="prodo">
                <img src="imgavt/combo2.png" alt="Prodo 1" >
                <h3>Combo Halo</h3>
                <p>10 Hộp bắp + FREE nước vị bất kỳ</p>

                <p>Giá: 259.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='4' check-place = ' Combo-Halo '>CHỌN NGAY</span>
                </div>


            </div>
            <div class="prodo">
                <img src="imgavt/combo4.png" alt="Prodo 1" >
                <h3>Combo Wish C1</h3>
                <p>01 ly nước ngọt size M + 01 Hộp bắp + FREE Up Vị bất kỳ</p>

                <p>Giá: 125.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='1' check-place = ' Combo-Wish-C1 '>CHỌN NGAY</span>
                </div>


            </div>

            <div class="prodo" >
                <img src="imgavt/combo5.png" alt="Prodo 2" >
                <h3>Combo Wish B3</h3>
                <p>02 ly nước ngọt size L + 02 Hộp bắp + FREE Up Vị bất kỳ </p>
                <p>Giá: 185.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='2' check-place = 'Combo-Wish-B3 '>CHỌN NGAY </span>
                </div>

            </div>
            <div class="prodo" >
                <img src="imgavt/combo1.png" alt="Prodo 2" >
                <h3>Combo Hủy Diệt</h3>
                <p>07 ly nước ngọt size L + 02 Hộp bắp + FREE Up Vị bất kỳ </p>
                <p>Giá: 199.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='6' check-place = ' Combo-Hủy-Diệt '>CHỌN NGAY </span>
                </div>

            </div>
            <div class="prodo" >
                <img src="imgavt/combo3.png" alt="Prodo 2" >
                <h3>Combo Halo 2</h3>
                <p>8 ly nước ngọt size L + 02 Hộp bắp + FREE Up Vị bất kỳ </p>
                <p>Giá: 219.000đ</p>
                <div class="combo-doan-right">
                    <span class="check_do_an , btn btn-md btn--danger" check-price='5' check-place = ' Combo-Halo-2 '>CHỌN NGAY </span>
                </div>

            </div>

        </div>

</div>
<form action="index.php?act=dv4" method="post">

<div class="col-lg-offset-1">
    <div class="tong">
        <h2 class="phim">Phim bạn chọn  : <?= $_SESSION['tong']['tieu_de'] ?></h2>
        <span>Suất : <?= $_SESSION['tong']['thoi_gian_chieu'] ?> ------ <?= $_SESSION['tong']['ngay_chieu'] ?></span> <br>
        <div style="display: flex">
            <span>Ghế đã chọn :</span>
            <div class="checked-place">
                <?php
                if (isset($ten_ghe['ghe'])) {
                    $ghes = $ten_ghe['ghe'];
                    echo '<span class="choosen-place">' . implode(', ', $ghes) . '</span>';

                    // Tạo các hidden input cho mỗi ghế
                    foreach ($ghes as $ghe) {
                        echo '<input type="hidden" name="ten_ghe[]" value="' . $ghe . '">';
                    }
                }
                ?>
            </div>
        </div>
        <div style="display: flex">
            <span>Combo đã chọn : </span>
            <div class="check-doan">
                <?php
                if (isset($ten_doan['doan'])) {
                    foreach ($ten_doan['doan'] as $doan) {
                        echo  '<span class="check-doan">' . $doan . '</span>';
                        echo  '<input type="text" name="ten_do_an[]" value="' . $doan . '">';
                    }
                } else {
                } ?>
            </div>
        </div>

        <div class="tongtien">
            <div class="checked-result">
                <span>Tổng cộng :</span>
                <input name="giaghe" style="width: 80px; font-size: 20px; border: none;" type="text" id="gia_ghe"
                       value="<?php echo isset($_SESSION['tong'][0]) ? $_SESSION['tong'][0] : 0; ?>"> VND
            </div>
        </div>
    </div>


</div>
    </div>

    <div class="booking-pagination ">
        <a href="index.php?act=datve2&id=<?php echo $_SESSION['tong']['id_phim'] ?>" >
            <span class="quaylai">QUAY LẠI</span>

        </a>
        <a href="" >
            <input type="submit" name="tiep_tuc" class="booking-pagination__button" value="TIẾP TỤC">
        </a>
    </div>
</form>

<div class="clearfix"></div>

