
<?php
include "./view/home/sideheader.php";
$tong = count($loadtk);
$sotrang = ceil($tong/5);
?>
<!-- Content Body Start -->
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Quản Lý Tài Khoản <?php echo $tong?>/ <span>Tài Khoản Khách Hàng</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Order List Start-->
        <div class="col-12 mb-30">
            <div class="news-item">
                <div class="content">
            <div class="table-responsive">
                <table class="table table-vertical-middle">
                    <thead>
                    <tr>
                        <th># ID</th>
                        <th>Tên khách hàng </th>
                        <th>Tài Khoản </th>
                        <th>Mật khẩu </th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Vai Trò</th>
                        <th>Số Vé Đã Mua</th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($loadall_kh1 as $kh):?>
                        <?= extract($kh);
                        $linksua= "index.php?act=suatk&idsua=".$id;
                        $linkxoa= "index.php?act=xoatk&idxoa=".$id;?>
                        <tr>
                            <td>#<?=$kh['id']?></td>
                            <td><?=$kh['name']?></td>
                            <td><?=$kh['user']?></td>
                            <td><?=$kh['pass']?></td>
                            <td><?=$kh['email']?></td>
                            <td><?=$kh['phone']?></td>
                            <td><?=$kh['dia_chi']?></td>
                            <td>
                                <?php
                                if ($vai_tro == '1') {
                                    echo '<span class="badge badge-danger">Nhân Viên</span>';
                                } elseif ($vai_tro == '2') {
                                    echo '<span class="badge badge-primary">Chủ</span>';
                                } else {
                                    echo '<span class="badge badge-success">Khách Hàng</span>';
                                }
                                ?>
                            </td>

                            <td><?=$so_ve?></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="edit button button-box button-xs button-info" href="<?=$linksua?>"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="<?=$linkxoa?>"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
  <ul class="pagination" style="padding-bottom: 20px;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
   <?php for($i=1 ;$i<=$sotrang;$i++):?>
    <li class="page-item"><a class="page-link" href="index.php?act=khachhang&sotrang=<?php echo $i?>"><?php echo $i?></a></li> 
 <?php endfor?>
   
    
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

    </div>

</div><!-- Content Body End -->

       