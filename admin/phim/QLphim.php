
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
                        <form action="index.php?act=QLphim" method="post">
                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" name="keyw" placeholder="Tìm kiếm Thể Loại Phim" >
                <select name="idloai" id="" class="clickOK">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        echo'<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                </select>
                <input  class="clickOK"
                 type="submit" name="clickOK" value="CLICK"></div>
            </form>
                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th>Mã Phim</th>
                                    <th>Tên Phim</th>
                                    <th>Hình Ảnh</th>
                                    <th>Mô Tả</th>
                                    <th>Lịch Chiếu</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                            <?php foreach ($loadphim as $phim){
                            extract($phim);
                            $linksua = "index.php?act=suaphim&idsua=".$id;
                            $linkxoa = "index.php?act=xoaphim&idxoa=".$id;
                            $hinhpath="../imgavt/".$img;
                            if(is_file($hinhpath)){
                            $img="<img src='".$hinhpath."' height='100' >";
                            }else{
                            $img="no Img";
                            }
              
                            echo '<tr> <td>#'.$id.'</td>
                                       <td>'.$tieu_de.'</td>
                                       <td>'.$img.'</td>
                                       <td>'.$mo_ta.'</td>
                                       <td><a href="index.php?act=lichchieu"><span class="badge badge-success">Lịch Chiếu</span></a></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="'.$linksua.'"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="'.$linkxoa.'" onclick="return confirm(\'xóa ko\')"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                        </tr>';
                        } ?>
                            
                               <br>
                            </tbody><!-- Table Body End -->

                        </table>
                    </div></form>
                </div><!-- Invoice List End -->

            </div>

        </div><!-- Content Body End -->

        