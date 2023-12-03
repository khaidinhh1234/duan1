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
                <h3> Quản Trị Viên <span>/ Thêm User</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=themuser" method="POST">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                <h4 class="title">Thêm User</h4>

                <div class="row">
                <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Tên Khách Hàng" name="name"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Tài Khoản" name="user"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Mật Khẩu" name="pass"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Email" name="Email"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number_format" placeholder="Số Điện Thoại" name="phone"></div>
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Địa Chỉ" name="dia_chi"></div>
                </div>

                <h4 class="title">Thao tác</h4>

                <div class="product-upload-gallery row flex-wrap">


                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" name="them">Thêm</button>
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" ><a href="index.php?act=QTvien" style="color: black;">Danh sách</a></button>
                        </div>
                    </div><!-- Button Group End -->

                </div>
                    </div><!-- Add or Edit Product End -->
                        </div>
    </form>
</div><!-- Content Body End -->