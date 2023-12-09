
<?php
include "./view/home/sideheader.php";

 $tong = count($loadve); //tổng ve 
 $pase = ceil($tong / 10);
?>
<!-- Content Body Start -->
<div class="content-body" xmlns="http://www.w3.org/1999/html">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Quản Lý Vé Xem Phim</h3>
            </div>
        </div><!-- Page Heading End -->
        <form action="index.php?act=ve" method="post">
            <input type="text" name="ten" placeholder="tìm kiếm người dùng">
            <input type="text" name="tieude" placeholder="tìm kiếm phim">
            <input type="submit" name="seach" value="Tìm Kiếm">
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
                        <th>Ngày Chiếu</th>
                        <th>Khung Giờ Chiếu</th>
                        <th>Phòng</th>
                        <th>Trạng Thái Vé</th>
                        <th>Quản Lý</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($loadvephim as $ve):?>
                        <?php extract($ve)?>
                        <?php $linksua="index.php?act=suavephim&idsua=".$id;
                        $linkct = "index.php?act=ctve&id=".$id;?>
                        <tr>
                            <td>#<?=$ve['id']?></td>
                            <td><?=$ve['tieu_de']?></td>
                            <td><?=number_format($price)?> VNĐ</td>
                            <td><?=$ve['ngay_dat']?></td>
                            <td><?=$ve['ghe']?></td>
                            <td><?=$ve['combo']?></td>
                            <td><?=$ve['name']?></td>
                            <td><?=$ve['ngay_chieu']?></td>
                            <td><?=$ve['thoi_gian_chieu']?></td>
                            <td><?=$ve['tenphong']?></td>
                            <td>
                                <?php
                                switch ($ve['trang_thai']) {
                                    case '0':
                                        echo '<span class="badge badge-danger">Chưa Thanh Toán</span>';
                                        break;
                                    case '1':
                                        echo '<span class="badge badge-success">Đã thanh toán</span>';
                                        break;
                                    case '2':
                                        echo '<span class="badge badge-info">Đã Dùng</span>';
                                        break;
                                    case '3':
                                        echo '<span class="badge badge-info">Hủy</span>';
                                        break;
                                    case '4':
                                        echo '<span class="badge badge-info">Hết Hạn</span>';
                                        break;
                                    default:
                                        echo '<span class="badge badge-secondary">Trạng Thái Không Xác Định</span>';
                                }
                                ?>
                            </td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="edit button button-box button-xs button-info" href="<?='index.php?act=suavephim&idsua='.$id?>"><i class="zmdi zmdi-edit"></i></a>
                                    <?php if ($trang_thai != 0) : ?>
                                        <a href="<?=$linkct?>" class="edit button button-box button-xs button-info">
                                            <i class="zmdi zmdi-info"></i>
                                        </a>
                                    <?php endif; ?>



                                </div>
                            </td>
                        </tr
                    <?php endforeach?>
                   
                    </tbody> 
                </table><nav aria-label="Page navigation example">
  <ul class="pagination" style="padding-bottom: 20px;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php for ($i=1 ; $i <= $pase; $i++):?>
        
        <li class="page-item"><a class="page-link" href="index.php?act=ve&&pase=<?php echo $i?>"><?php echo $i ?></a></li>

    
    
   <?php endfor ?>
    <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li> -->
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
            </div>
        </div>
        <!--Order List End-->
    </form>
    </div>

</div><!-- Content Body End -->


