
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
                <h3>Quản Lý Vé Xem Phim <span>/ Order List</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Order List Start-->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-vertical-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Phim</th>
                        <th>Giá Vé</th>
                        <th>Ngày Đặt </th>
                        <th>Ghế</th>
                        <th>Combo Đồ Ăn</th>
                        <th>Tên Khách Hàng</th>
                        <th>Khung Giờ Chiếu</th>
                        <th>ID Hóa Đơn</th>
                        <th>Trạng Thái Vé</th>
                        <th>Quản Lý</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($loadvephim as $ve):?>
                        <?php extract($ve)?>
                        <?php $linksua="index.php?act=suavephim&idsua=".$id;?>
                        <tr>
                            <td>#<?=$ve['id']?></td>
                            <td><?=$ve['tieu_de']?></td>
                            <td><?=$ve['price']?> VNĐ</td>
                            <td><?=$ve['ngay_dat']?></td>
                            <td><?=$ve['ghe']?></td>
                            <td><?=$ve['combo']?></td>
                            <td><?=$ve['name']?></td>
                            <td><?=$ve['thoi_gian_chieu']?></td>
                            <td><?=$ve['id_hd']?></td>
                            <td>
                                <?php
                                switch ($ve['trang_thai']) {
                                    case '0':
                                        echo '<span class="badge badge-danger">Chưa Đặt Vé</span>';
                                        break;
                                    case '1':
                                        echo '<span class="badge badge-success">Đã thanh toán</span>';
                                        break;
                                    case '2':
                                        echo '<span class="badge badge-warning">Hết Hạn</span>';
                                        break;
                                    case '3':
                                        echo '<span class="badge badge-info">Đã Dùng</span>';
                                        break;
                                    case '4':
                                        echo '<span class="badge badge-info">Hủy</span>';
                                        break;
                                    default:
                                        echo '<span class="badge badge-secondary">Trạng Thái Không Xác Định</span>';
                                }
                                ?>
                            </td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="edit button button-box button-xs button-info" href="<?='index.php?act=suavephim&idsua='.$id?>"><i class="zmdi zmdi-edit"></i></a>
                                </div>
                            </td>
                        </tr
                    <?php endforeach?>

                    </tbody>
                </table>
            </div>
        </div>
        <!--Order List End-->

    </div>

</div><!-- Content Body End -->


