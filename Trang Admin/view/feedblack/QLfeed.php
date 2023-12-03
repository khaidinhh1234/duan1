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
                        <h3 class="title">Quản Lý Feedblack  <span>/ Quản Lý Feedblack</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row"></div>

               

                <!--Edit Rows Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Feedbalck Đã Duyệt</h3>
                        </div>
                        <div class="box-body">

                            <table class="table footable-editing" data-paging="true" data-filtering="true" data-sorting="true" data-breakpoints='{ "xs": 480, "sm": 768, "md": 992, "lg": 1200, "xl": 1400 }'>
                                <thead>
                                    <tr>
                                        <th data-name="name">ID</th>
                                        <th data-name="position">TÊN NGƯỜI DÙNG</th>
                                        <th data-breakpoints="xs" data-name="office">TÊN PHIM</th>
                                        <th data-breakpoints="xs" data-name="age">NỘI DUNG</th>
                                        <th data-breakpoints="xs sm" data-name="startDate">NGÀY BÌNH LUẬN</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($listbl as $bl) { 
                 extract($bl);
                $xoabl = "index.php?act=xoabl&id=$id";
                ?>
                <tr>
                    <!-- <td><input type="checkbox" name="" id=""></td> -->
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= $tieu_de ?></td>
                    <td><?= $noidung ?></td>
                    <td><?= $ngaybinhluan ?></td>
                    <td><a href="<?= $xoabl ?>"><input type="button" value="Xóa"onclick="return confirm(\'Bạn có muốn xóa không\')"></a></td>
                    
                </tr>
            <?php  } ?>
            
                                   
                                </tbody>
                            </table>

                           
           

        </div><!-- Content Body End -->
                
       