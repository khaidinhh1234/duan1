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
                <h3>Loại Phim <span>/ Thêm Phim</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=themphim" method="post"  enctype="multipart/form-data">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                    <h4 class="title">Thêm  phim</h4>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Tên Phim" name="tieu_de"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Mô Tả" name="mo_ta"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="date" placeholder="Ngày Phát Hành" name="date"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" placeholder="Thời Lượng" name="thoiluong"></div>
                        <div class="col-lg-6 col-12 mb-30"><input  type="file" placeholder="Hình Ảnh" name="anh"></div>
                        <div class="row2 mb10 form_content_container">
                            <label for="">Chọn Loại Phim</label><br>
                            <select name="id_loai" id="">
                                <option value="0">chọn</option>
                                <?php foreach ($loadloai as $loai){
                                    extract($loai);
                                    echo "<option value='.$id.'>$name</option>";
                                } ?>
                            </select>
                        </div>
                    </div>

                    <h4 class="title">Thao tác</h4>

                    <div class="product-upload-gallery row flex-wrap">


                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" name="gui">Thêm</button>
                            </div>
                        </div><!-- Button Group End -->

            </div>

        </div><!-- Add or Edit Product End -->

    </form>
</div><!-- Content Body End -->