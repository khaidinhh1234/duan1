<?php include "view/search.php";

?>

<!-- Main content -->
<section class="container">
    <div class="col-sm-12">
        <div class="movie">


            <?php
            extract($phim);
            $hinh = "imgavt/".$img;
            $book1 = "index.php?act=datve&id=".$id;
            ?>
            <h2 class="page-heading"> <?php echo $tieu_de ?></h2>
            <div class="movie__info">
                <div class="col-sm-4 col-md-3 movie-mobile">
                    <div class="movie__images">
                        <span class="movie__rating">5.0</span>
                        <img alt='' src="<?php echo $hinh?>"  style="width: 260.3px;height: 295px">

                    </div>
                    <div class="movie__rate">Your vote: <div id='score' class="score"></div></div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <p class="movie__option"> <a href="#"class="heading" style="font-size: 1.5vw ;"><?php echo $tieu_de?></a></p>
                    <p class="movie__time">169 Phút</p>
                    <p class="movie__option"><strong>Quốc Gia: </strong><a href="#"></a> <a href="#"><?php echo $quoc_gia?></a></p>
                    <p class="movie__option"><strong>Năm: </strong><a href="#">2023</a></p>
                    <p class="movie__option"><strong>Thể Loại: </strong><a href="#"><?php echo $id_loai?></a></p>
                    <p class="movie__option"><strong>Ngày Phát Hành: </strong><?php echo $date_phat_hanh ?></</p>
                    <p class="movie__option"><strong>Đạo Diễn: </strong><a href="#"><?php echo $daodien ?></</a></p>
                    <p class="movie__option"><strong>Diễn Viên: </strong><a href="#"><?php echo $dienvien ?></</a>, <a href="#">...</a></p>
                    <p class="movie__option"><strong>Thời Lượng Phim: </strong><a href="#"><?php echo $thoi_luong_phim?></a></p>
                    <p class="movie__option"><strong>Giới Hạn độ tuổi: </strong><a href="#"><?php echo $gia_han_tuoi?></a></p>
                    <p ><a href="#" class="comment-link">Comments:  15</a></p>

                    <div class="movie__btns movie__btns--full">
                        <a href="<?=$book1?>" class="btn btn-md btn--warning">Đặt ngay</a>
                        <a href="#" class="watchlist">Phim yêu thích </a>
                    </div>

                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="page-heading">Mô Tả Phim</h2>

            <p class="movie__describe"><?=$mo_ta?></p>

            <h2 class="page-heading">Hình Ảnh &amp; Video</h2>

            <div class="movie__media">
                <div class="-switcmovie__mediah">
                    <a href="#" class="watchlist list--photo" data-filter='media-photo'>234 photos</a>
                    <a href="#" class="watchlist list--video" data-filter='media-video'>10 videos</a>
                    <a href="#"> 
                    <?=$link_trailer?></a>
                </div>

            </div>

          

            </div>
            <h2 class="page-heading">Bình Luận (15)</h2>

            <div class="comment-wrapper">
                <form id="comment-form" class="comment-form" method='post'>
                    <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                    <label class="comment-form__info">250 characters left</label>
                    <button type='submit' class="btn btn-md btn--danger comment-form__btn">Thêm Bình Luận </button>
                </form>

                <div class="comment-sets">

                    <div class="comment">
                        <div class="comment__images">
                            <img alt='' src="images/comment/avatar.jpg">
                        </div>

                        <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                        <p class="comment__date">today | 03:04</p>
                        <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                        <a href='#' class="comment__reply">Reply</a>
                    </div>

                    <div class="comment">
                        <div class="comment__images">
                            <img alt='' src="images/comment/avatar-olia.jpg">
                        </div>

                        <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                        <p class="comment__date">22.10.2013 | 14:40</p>
                        <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                        <a href='#' class="comment__reply">Reply</a>
                    </div>

                    <div class="comment comment--answer">
                        <div class="comment__images">
                            <img alt='' src="images/comment/avatar-dmitriy.jpg">
                        </div>

                        <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Dmitriy Pustovalov</a>
                        <p class="comment__date">today | 10:19</p>
                        <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                        <a href='#' class="comment__reply">Reply</a>
                    </div>

                    <div class="comment comment--last">
                        <div class="comment__images">
                            <img alt='' src="images/comment/avatar-sia.jpg">
                        </div>

                        <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Sia Andrews</a>
                        <p class="comment__date"> 22.10.2013 | 12:31 </p>
                        <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                        <a href='#' class="comment__reply">Reply</a>
                    </div>

                    <div id='hide-comments' class="hide-comments">
                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="images/comment/avatar.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                            <p class="comment__date">today | 03:04</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="images/comment/avatar-olia.jpg">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                            <p class="comment__date">22.10.2013 | 14:40</p>
                            <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                            <a href='#' class="comment__reply">Reply</a>
                        </div>
                    </div>

                    <div class="comment-more">
                        <a href="#" class="watchlist">Show more comments</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<div class="clearfix"></div>




