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
                        <h3 class="title">Quản Lý Suất Chiếu <span>/ Lịch Chiếu</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                

                <!--Responsive Table Start-->
                <div class="col-12 mb-30">
                    <div class="box"><div class="d-flex justify-content-between row mbn-20">
                    <div class="text-left col-12 col-sm-auto mb-20">
                        <div class="box-head">
                            <h4 class="phim">Tạo Lịch Chiếu Cho Phim  </h4>
                            <h3 >Phim : Người Vợ Cuối Cùng  </h3>
                            <span class="phim">Ngày Khởi Chiếu : 20-11-2023</span><br>
                            <img src="../imgavt/img1.jpg" alt="ảnh lè" width="300">
                        </div></div>
                        <div class="text-left  col-12 col-sm-auto mb-20">
                        <div class="box-head">
                                <h4 class="phim">Thêm Lịch Chiếu Phim </h4>
                                <div class="row">
                                <input class="form-control" type="text" placeholder="Rạp Chiếu" name="rapchieu"><br>
                                <input class="form-control" type="text" placeholder="Ngày Chiếu" name="ngaychieu"><br>
                                <input class="form-control" type="text" placeholder="Giờ Chiếu" name="giochieu"><br>
                                <input class="form-control" type="text" placeholder="Vé Thường" name="vethuong"><br>
                                <input class="form-control" type="text" placeholder="Vé VIP" name="vevip"><br>
                                
                                </div>
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" name="gui">Thêm</button>
                            </div></div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã Lịch Chiếu  </th>
                                            <th>Rạp Chiếu  </th>
                                            <th>Ngày Chiếu  </th>
                                            <th>Giờ chiếu </th>
                                            <th>Giá Vé Thường </th>
                                            <th>Giá Vé VIP</th>
                                            <th>Quản Lý </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#" ><i class="zmdi zmdi-delete"></i></a>
                            </div></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#" ><i class="zmdi zmdi-delete"></i></a>
                            </div></td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td><div class="table-action-buttons">
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#" ><i class="zmdi zmdi-delete"></i></a>
                            </div></td>
                                            
                                        </tr>
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

        