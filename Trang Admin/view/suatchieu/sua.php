<?php
include "./view/home/sideheader.php";
if (is_array($loadone_lc)) {
    extract($loadone_lc);
}
?>

<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3> Phim <span>/ Sửa Suất Chiếu</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=updatelichchieu" method="POST">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                <h4 class="title">Sửa Xuất Chiếu</h4>

                <div class="row">
                    <input  type="hidden" name="id" value="<?= $id ?>">

                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Tên Phim </span><br>
                        <input class="form-control" type="text"  name="id_phim" value="<?= $id_phim ?>"></div><br>
                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Phòng Chiếu</span><br>
                        <input class="form-control" type="text"  name="id_phong" value="<?= $id_phong_chieu ?>"></div><br>
                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Ngày chiếu</span><br><input class="form-control" type="date"  name="nc" value="<?= $ngay_chieu ?>"></div><br>
                    <div class="col-lg-6 col-12 mb-10">
                        <span class="title">Thời gian chiếu</span><br>
                        <input class="form-control" type="time"  name="tgc" value="<?= $thoi_gian_chieu ?>">
                    </div>
                </div>

                <h4 class="title">Thao tác</h4>

                <div class="product-upload-gallery row flex-wrap">


                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" name="capnhat">Cập Nhật</button>
                        </div>
                    </div><!-- Button Group End -->

                </div>

            </div><!-- Add or Edit Product End -->

    </form>
</div><!-- Content Body End -->