<?php
include "./home/sideheader.php";
if(is_array($loadone_phim)){
    extract($loadone_phim);
}
?>

<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3> Phim <span>/ Sửa</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=updatephim" method="POST" enctype="multipart/form-data">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                <h4 class="title">Sửa  phim</h4>

                <div class="row"><div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" name="id" value="#0<?=$id?>" ></div>
                <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Tên Phim" name="tieu_de" value="<?=$tieu_de?>"></div><br>
                        <div class="col-lg-6 col-12 mb-30"><textarea class="form-control" name="mo_ta" ><?php echo $mo_ta ?></textarea></div>
                        <div class="col-lg-6 col-12 mb-30"><input  type="file" placeholder="Hình Ảnh" name="img" value="<?=$img?> "></div><br>
                        
                    
                </div>

                <h4 class="title">Thao tác</h4>

                <div class="product-upload-gallery row flex-wrap">


                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" name="capnhat">Cập Nhật</button>
                            <a href="index.php?act=QLphim"><button class="button button-outline button-info mb-10 ml-10 mr-0">Danh sách</button></a>
                        </div>
                    </div><!-- Button Group End -->

                </div>

            </div><!-- Add or Edit Product End -->

    </form>
</div><!-- Content Body End -->