
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
                        <h3>Quản Lý Phim  <span>/ Danh Sách Phim</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-30">
                <form action="" method="post"  enctype="multipart/form-data">
                <!--Alert Start-->
                <div class="col-12 mb-30">
                    <div class="alert alert-primary">
                        <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                        <i class="zmdi zmdi-alert-polygon"></i> Trang này đã được cải tiến để tải xuống. Bấm vào nút in ở cuối hoá đơn để <a href="#" class="alert-link">  Tải xuống.</a>
                    </div>
                </div>
                <!--Alert End-->

                <!-- Invoice List Start -->
                <div class="col-12 mb-30">
                <div class="news-item">
                <div class="content">
                <div class="categories"><a href="index.php?act=themphim" class="product">Thêm Phim</a></div></div></div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                       
                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th>Mã Phim</th>
                                    <th>Tên Phim</th>
                                    <th>Hình Ảnh</th>
                                    <th>Mô Tả</th>
                                    <th>Thời gian</th>
                                    <th>Lịch Chiếu</th>
                                    <th>Loại Phim</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                            <?php foreach ($loadphim as $phim){
                            extract($phim);
                            $linksua = "index.php?act=suaphim&idsua=".$id;
                            $linkxoa = "index.php?act=xoaphim&idxoa=".$id;
                            $hinhpath="../Trang người dùng/imgavt/".$img;
                            if(is_file($hinhpath)){
                            $img="<img src='".$hinhpath."' height='100' >";
                            }else{
                            $img="no Img";
                            }
              
                            echo '<tr> <td>#'.$id.'</td>
                                       <td>'.$tieu_de.'</td>
                                       <td>'.$img.'</td>
                                       <td>'.$mo_ta.'</td>
                                       <td>'.$thoi_luong_phim.'</td>
                                       <td>'.$date_phat_hanh.'</td>
                                       <td>'.$id_loai.'</td>
                                       
                        <td>
                            <div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="'.$linksua.'"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="'.$linkxoa.'" onclick="return confirm(\'xóa ko\')"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                        </tr>';
                        } ?>
                            
                               
                            </tbody><!-- Table Body End -->

                        </table>
                    </div></form>
                </div><!-- Invoice List End -->

            </div>

        </div><!-- Content Body End -->

        