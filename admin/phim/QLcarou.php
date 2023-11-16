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
                        <h3 class="title">Quản Lý Phim <span>/ Danh Sách Carousel</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

          

             

                <!--Responsive Table Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Danh Sách Carousel</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã Phim </th>
                                            <th>Liên Kết</th>
                                            <th>Carousel</th>
                                            <th>Quản lý </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
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
              
                            echo '<tr> <th>#0'.$id.'</th>
                                        <td>Cell</td>
                                        <td>'.$img.'</td>
                                         <td>
                            <div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="'.$linksua.'"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="'.$linkxoa.'" onclick="return confirm(\'xóa ko\')"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                                           
                                        </tr>';}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Responsive Table End-->

                <!--How To Use Start-->
                <div class="col-12">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">How To Use</h4>
                        </div>
                        <div class="box-body">
                            <p>For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/4.3/content/tables/">Official Documentation</a></p>
                        </div>
                    </div>
                </div>
                <!--How To Use End-->

            </div>

        </div><!-- Content Body End -->

        