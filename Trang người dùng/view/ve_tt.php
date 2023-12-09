<?php
include "view/search.php";

// Kiểm tra xem $load_ve_tt có tồn tại hay không
if (isset($load_ve_tt)) {
    // Nếu tồn tại, thực hiện việc trích xuất dữ liệu và hiển thị thông tin vé
    extract($load_ve_tt);
    ?>
    <section class="container">
        <div class="order-container">
            <div class="order">
                <img class="order__images" alt='' src="images/tickets.png">
                <p class="order__title">Cảm ơn <br><span class="order__descript">bạn đã mua vé thành công</span></p>
            </div>

            <div class="ticket">
                <div class="ticket-position">
                    <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                    <div class="ticket__inner">
                        <div class="ticket-secondary">
                            <span class="ticket__item">Mã vé: <strong class="ticket__number"><?= $id ?></strong></span>
                            <span class="ticket__item ticket__date"><?= $ngay_chieu ?></span>
                            <span class="ticket__item ticket__time"><?= $thoi_gian_chieu ?></span>
                            <span class="ticket__item">Phòng: <strong class="ticket__number"><?= $tenphong ?></strong></span>
                            <span class="ticket__item">Rạp : <span class="ticket__cinema">CinePass Hà Đông</span></span>
                            <span class="ticket__item ticket__price">Giá: <strong class="ticket__cost"><?= $thanh_tien ?></strong></span>
                        </div>

                        <div class="ticket-primery">
                            <span class="ticket__item ticket__item--primery ticket__film">Phim: <br><strong class="ticket__movie"><?= $tieu_de ?></strong></span>
                            <span class="ticket__item ticket__time">Ghế : <?= $ghe ?></span>
                            <span class="ticket__item ticket__time">Combo : <?= $combo ?></span>
                        </div>
                    </div>
                    <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                </div>
            </div>

        </div>
    </section>
    <?php
} else {
    // Nếu không tồn tại, in ra thông báo "Bạn chưa thanh toán"
    ?>
    <section class="container">
        <p>Bạn chưa thanh toán vé.</p>
    </section>
    <?php
}
?>
