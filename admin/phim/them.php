<?php
include "./home/sideheader.php";
?>
<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Loại Phim <span>/ Thêm</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="" method="post"  enctype="multipart/form-data">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                    <h4 class="title">Thêm  phim</h4>

                    <div class="row">
                        
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Tên Phim" name="tieu_de"></div><br>
                        <div class="col-lg-6 col-12 mb-30"><input  type="file" placeholder="Hình Ảnh" name="img"></div><br>
                        <div class="col-lg-6 col-12 mb-30"><textarea class="form-control" placeholder="Mô Tả Phim " name="mo_ta" ></textarea></div><br>
                        
                    </div>

                    <h4 class="title">Thao tác</h4>

                    <div class="product-upload-gallery row flex-wrap">


                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" name="gui">Thêm</button>
                                <a href="index.php?act=QLphim"><button class="button button-outline button-info mb-10 ml-10 mr-0">Về Quản Lý Phim</button></a>
                            </div>
                        </div><!-- Button Group End -->

            </div>

        </div><!-- Add or Edit Product End -->

    </form>
</div><!-- Content Body End -->