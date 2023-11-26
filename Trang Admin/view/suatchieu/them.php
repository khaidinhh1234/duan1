<?php
include "./view/home/sideheader.php";

?>

<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3> Phim <span>/ Thêm Suất Chiếu</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=themlichchieu" method="POST">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                <h4 class="title">Sửa Xuất Chiếu</h4>

                <div class="row">
                    <input  type="hidden" name="id" >

                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Tên Phim </span><br>
                        <div class="row2 mb10 form_content_container">
                            <label for="">Chọn Loại Phim</label><br>
                            <select name="id_phim" id="">
                                <option value="0">chọn</option>
                                <?php foreach ($loadphim as $phim){
                                    extract($phim);
                                    echo "<option value='.$id.'>$tieu_de</option>";
                                } ?>
                            </select>
                        </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Phòng Chiếu</span><br>
                        <div class="row2 mb10 form_content_container">
                            <label for="">Chọn Loại Phim</label><br>
                            <select name="id_phong" id="">
                                <option value="0">chọn</option>
                                <?php foreach ($loadphong as $phong){
                                    extract($phong);
                                    echo "<option value='.$id.'>$name</option>";
                                } ?>
                            </select><br>
                        </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <span class="title">Ngày chiếu</span><br><input class="form-control" type="date"  name="nc""></div><br>
                    <div class="col-lg-6 col-12 mb-10">
                        <span class="title">Thời gian chiếu</span><br>
                        <input class="form-control" type="time"  name="tgc" ">
                    </div>
                </div>

                <h4 class="title">Thao tác</h4>

                <div class="product-upload-gallery row flex-wrap">


                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" name="them">Thêm</button>
                        </div>
                    </div><!-- Button Group End -->

                </div>
                    </div><!-- Add or Edit Product End -->
                        </div>
    </form>
</div><!-- Content Body End -->