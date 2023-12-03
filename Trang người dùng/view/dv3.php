<form action="index.php?act=datveall" method="post">
    <p>tiêu đề:<?php echo $_SESSION['lc']['tieu_de'] ?></p>
    <p>ngày chiếu:<?php echo $_SESSION['lc']['ngay_chieu'] ?></p>
    <p>khung giờ chiếu:<?php echo $_SESSION['lc']['thoi_gian_chieu'] ?></p>

    <span>Ghế đã chọn</span>
    <div class="checked-place">
        <?php if (isset($ten_ghe['ghe'])) {
            foreach ($ten_ghe['ghe'] as $ghe) {
                echo  '<span class="choosen-place">' . $ghe . '</span>';
                echo  '<input type="text" name="ten_ghe[]" value="' . $ghe . '">';
            }
        } else {
        } ?>
    </div>
    <div class="tongtien">
        <span>Tổng cộng</span>
        <div class="checked-result">
            <input name="giaghe" style=" width: 80px; font-size: 20px; border: none;" type="text" id="gia_ghe" value="<?php if (!isset($_SESSION['lc'][0])) {
                0;
            } else {
                echo $_SESSION['lc'][0];
            }  var_dump($_SESSION['lc']['id']) ?>"> VND
        </div>
        <input type="submit" name="dat_ngay" value="dat_ve">
</form>

