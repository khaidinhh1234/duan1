<?php
include "./view/home/sideheader.php";
if (is_array($load_kgc)) {
    extract($load_kgc);
}
?>

<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3> Khung Giờ Chiếu  <span>/ Sửa Khung Giờ Chiếu <tg/span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <form action="index.php?act=updatethoigian" method="POST" enctype="multipart/form-data">
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">

                <h4 class="title">Sửa Khung Giờ Chiếu </h4>

                <div class="row">
                    <input  type="hidden" name="id" value="<?= $id ?>">
                    <div class="col-lg-6 col-12 mb-30">

                        <div class="row2 mb10 form_content_container">
                            <select name="id_lc" id="" class="form-control">
                             
                                <?php foreach ($loadlc as $lc){
                                    extract($lc);
                                    echo "<option value='.$id.'>'.$ngay_chieu.$tieu_de.'</option>";
                                   
                                } ?>
                            </select>
                        </div>  </div>
                        
                    <div class="col-lg-6 col-12 mb-30">
                        
                        <div class="row2 mb10 form_content_container">
                            <select name="id_phong" id="" class="form-control">
                          
                                <?php foreach ($loadphong as $phong):?>
                                    <?=extract($phong)?>
                                <option  type="text"   value="<?=$id ?>"><?php echo $name ?></option><br>
                                <?php endforeach ?>
                            </select></div>
                        </div>   
                        <div class="col-lg-6 col-12 mb-30"> 
                        <div class="row2 mb10 form_content_container">
                    <span class="title">Thời gian chiếu</span><br>
                    <input class="form-control" type="time"  name="tgc" value="<?=$thoi_gian_chieu ?>"></div></div><br>
                  
                  
</div>

                </div>

                <h4 class="title">Thao tác</h4>

                <div class="product-upload-gallery row flex-wrap">


                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" name="capnhat">Cập Nhật</button>
                            <a href="index.php?act=thoigian"><button class="button button-outline button-info mb-10 ml-10 mr-0">Danh sách</button></a>
                        </div>
                    </div><!-- Button Group End -->

                </div>

            </div><!-- Add or Edit Product End -->
 </div>
    </form>
</div><!-- Content Body End -->