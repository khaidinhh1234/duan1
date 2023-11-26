<?php include "view/search.php"?>



<!-- Main content -->
<section class="container">
    <div class="col-sm-12">
        <h2 class="page-heading">Danh sách phim  /
            <span ><?=$ten_loai?> </span></h2>

        <div class="tags-area">
            <div class="tags tags--unmarked">
                <span class="tags__label">Sắp xếp theo:</span>
                <ul>
                    <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>Tất cả</a></li>
                    <li class="item-wrap"><a href="#" class="tags__item" data-filter='release'>Ngày phát hành</a></li>
                    <li class="item-wrap"><a href="#" class="tags__item" data-filter='popularity'>Phổ biến</a></li>
                    <li class="item-wrap"><a href="#" class="tags__item" data-filter='comments'>Bình luận</a></li>
                    <li class="item-wrap"><a href="#" class="tags__item" data-filter='ending'>Sắp kết thúc</a></li>
                </ul>
            </div>
        </div>



        <!-- Movie preview item -->
        <?php foreach($dsp as $phim):{
            extract($phim);
            $hinhpath="imgavt/" . $img;
            $linkp = "index.php?act=ctphim&id=".$id;
            $book1 = "index.php?act=datve&id=".$id;
        }?>
            <div class="movie movie--preview movie--full comments">
                <div class="col-sm-3 col-md-2 col-lg-2">
                    <div class="movie__images">
                        <img src="<?=$hinhpath?>" alt="lỗi">
                    </div>
                    <div class="movie__feature">
                        <a href="#" class="movie__feature-item movie__feature--comment">23</a>
                        <a href="#" class="movie__feature-item movie__feature--video">2</a>
                        <a href="#" class="movie__feature-item movie__feature--photo">85</a>
                    </div>
                </div>

                <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                    <a href="<?=$linkp?>" class="movie__title link--huge"><?= $phim['tieu_de']?></a>

                    <p class="movie__time"><?=$phim['thoi_luong_phim']?>phút</p>
                    <p class="movie__option"><strong>Quốc gia: </strong><a href="#">Việt nam</a></p>
                    <p class="movie__option"><strong>Thể loại: </strong><a href="#"><?=$phim['id_loai']?></a></p>
                    <p class="movie__option"><strong>Ngày phát hành: </strong><?=$phim['date_phat_hanh']?></p>
                    <p class="movie__option"><strong>Đạo diễn: </strong><a href="#"><?=$phim['daodien']?></a></p>
                    <p class="movie__option"><strong>Diễn viên: </strong><a href="#"><?=$phim['dienvien']?></a>, <a href="#">...</a></p>
                    <p class="movie__option"><strong>Giới hạn độ tuổi: </strong><a href="#"><?=$phim['gia_han_tuoi']?>+</a></p>
                    <div class="movie__btns">
                        <a href="<?=$book1?>" class="btn btn-md btn--warning">Đặt Vé <span class="hidden-sm">Xem Phim</span></a>
                        <a href="#" class="watchlist">Thêm vào danh sách yêu thích</a>
                    </div>
                    <div class="preview-footer">
                        <div class="movie__rate"><div >
                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                                <i class="zmdi zmdi-star zmdi-hc-fw" style="color: #fbff00;"></i></div>
                                <span class="movie__rate-number">3495 LIKE</span> <span class="movie__rating">5.0</span></div>


                        <a href="#" class="movie__show-btn">Lịch Chiếu</a><i class="zmdi zmdi-star zmdi-hc-fw"></i>
                    </div>
                </div>

                <div class="clearfix"></div>

               
            
        <?php endforeach ?>
        <!-- end movie preview item -->


        <div class="coloum-wrapper">
            <div class="pagination paginatioon--full">
                <a href='#' class="pagination__prev">prev</a>
                <a href='#' class="pagination__next">next</a>
            </div>
        </div>

    </div>

</section>

<div class="clearfix"></div>