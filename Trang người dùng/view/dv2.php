<?php include "view/search.php"; ?>
<?php include 'global.php';
?>

<div class="col-lg-offset-1">
    <div class="tong">
        <form action="index.php?act=dv3" method="post">
            <h2 class="phim">Phim bạn chọn  : <?= $_SESSION['tong']['tieu_de'] ?></h2>
            <span>Suất : <?= $_SESSION['tong']['thoi_gian_chieu'] ?> ------ <?= $_SESSION['tong']['ngay_chieu'] ?></span> <br>
            <div style="display: flex">
                <span>Ghế đã chọn :</span>
                <div class="checked-place">
                    <?php
                    if (isset($_SESSION['tong']['ghe'])) {
                        foreach ($_SESSION['tong']['ghe'] as $ghe) {
                            echo  '<span class="choosen-place">' . implode(', ', $ghe) . '</span>';
                            echo  '<input type="hidden" name="ten_ghe[]" value="' . implode(', ', $ghe) . '">';
                        }
                    }
                    ?>
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

<div class="booking-pagination ">
    <a href="index.php?act=datve&id=<?php echo $_SESSION['tong']['id_phim'] ?>" >
        <span class="quaylai">QUAY LẠI</span>

    </a>
    <a href="" >
        <input type="submit" name="tiep_tuc" class="booking-pagination__button" value="TIẾP TỤC">
    </a>
</div>

<div class="clearfix"></div>
</form></section></div></div>
