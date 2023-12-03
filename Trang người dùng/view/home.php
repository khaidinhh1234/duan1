<?php include "banner.php"?>

<!--end slider -->
<!-- Main content -->
<section class="container">
    <div class="movie-best">
        <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Phim hay nhất</div>
        <div class="col-sm-12 change--col">
            <?php foreach ($loadphimhot as $hot){
                extract($hot);
                $linkp="index.php?act=ctphim&id=".$id;
                $hinh = "imgavt/".$img;
                echo '<div class="movie-beta__item ">
                <img alt="lỗi cmmr" src="'.$hinh.'"  style="width: 190px;height: 285px">
                <span class="best-rate">5.0</span>

                <ul class="movie-beta__info">
                    <li><span class="best-voted">71 people voted today</span></li>
                    <li>
                        <p class="movie__time">'.$thoi_luong_phim.'</p>
                        <p>'.$id_loai.'</p>
                        <p>38 comments</p>
                    </li>
                    <li class="last-block">
                        <a href=" '.$linkp. '" class="slide__link">Chi tiết</a>
                    </li>
                </ul>
            </div>';
            } ?>


        </div>
        <div class="col-sm-10 col-sm-offset-1 movie-best__check">KIỂM TRA TẤT CẢ CÁC PHIM ĐANG CHIẾU</div>
    </div>

<!--    <div class="col-sm-12">-->
<!--        <div class="mega-select-present mega-select-top mega-select--full">-->
<!--            <div class="mega-select-marker">-->
<!--                <div class="marker-indecator location">-->
<!--                    <p class="select-marker"><span>movie to watch now</span> <br>in your city</p>-->
<!--                </div>-->
<!---->
<!--                <div class="marker-indecator cinema">-->
<!--                    <p class="select-marker"><span>find your </span> <br>cinema</p>-->
<!--                </div>-->
<!---->
<!--                <div class="marker-indecator film-category">-->
<!--                    <p class="select-marker"><span>find movie due to </span> <br> your mood</p>-->
<!--                </div>-->
<!---->
<!--                <div class="marker-indecator actors">-->
<!--                    <p class="select-marker"><span> like particular stars</span> <br>find them</p>-->
<!--                </div>-->
<!---->
<!--                <div class="marker-indecator director">-->
<!--                    <p class="select-marker"><span>admire personalities - find </span> <br>by director</p>-->
<!--                </div>-->
<!---->
<!--                <div class="marker-indecator country">-->
<!--                    <p class="select-marker"><span>search for movie from certain </span> <br>country?</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="mega-select pull-right">-->
<!--                <span class="mega-select__point">Search by</span>-->
<!--                <ul class="mega-select__sort">-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter='location'>Location</a></li>-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Cinema</a></li>-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='film-category'>Category</a></li>-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>Actors</a></li>-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='director'>Director</a></li>-->
<!--                    <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='country'>Country</a></li>-->
<!--                </ul>-->
<!---->
<!--                <input name="search-input" type='text' class="select__field">-->
<!---->
<!--                <div class="select__btn">-->
<!--                    <a href="#" class="btn btn-md btn--danger location">find <span class="hidden-exrtasm">your city</span></a>-->
<!--                    <a href="#" class="btn btn-md btn--danger cinema">find <span class="hidden-exrtasm">suitable cimema</span></a>-->
<!--                    <a href="#" class="btn btn-md btn--danger film-category">find <span class="hidden-exrtasm">best category</span></a>-->
<!--                    <a href="#" class="btn btn-md btn--danger actors">find <span class="hidden-exrtasm">talented actors</span></a>-->
<!--                    <a href="#" class="btn btn-md btn--danger director">find <span class="hidden-exrtasm">favorite director</span></a>-->
<!--                    <a href="#" class="btn btn-md btn--danger country">find <span class="hidden-exrtasm">produced country</span></a>-->
<!--                </div>-->
<!---->
<!--                <div class="select__dropdowns">-->
<!--                    <ul class="select__group location">-->
<!--                        <li class="select__variant" data-value='London'>London</li>-->
<!--                        <li class="select__variant" data-value='New York'>New York</li>-->
<!--                        <li class="select__variant" data-value='Paris'>Paris</li>-->
<!--                        <li class="select__variant" data-value='Berlin'>Berlin</li>-->
<!--                        <li class="select__variant" data-value='Moscow'>Moscow</li>-->
<!--                        <li class="select__variant" data-value='Minsk'>Minsk</li>-->
<!--                        <li class="select__variant" data-value='Warsawa'>Warsawa</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul class="select__group cinema">-->
<!--                        <li class="select__variant" data-value='Cineworld'>Cineworld</li>-->
<!--                        <li class="select__variant" data-value='Empire'>Empire</li>-->
<!--                        <li class="select__variant" data-value='Everyman'>Everyman</li>-->
<!--                        <li class="select__variant" data-value='Odeon'>Odeon</li>-->
<!--                        <li class="select__variant" data-value='Picturehouse'>Picturehouse</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul class="select__group film-category">-->
<!--                        <li class="select__variant" data-value="Children's">Children's</li>-->
<!--                        <li class="select__variant" data-value='Comedy'>Comedy</li>-->
<!--                        <li class="select__variant" data-value='Drama'>Drama</li>-->
<!--                        <li class="select__variant" data-value='Fantasy'>Fantasy</li>-->
<!--                        <li class="select__variant" data-value='Horror'>Horror</li>-->
<!--                        <li class="select__variant" data-value='Thriller'>Thriller</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul class="select__group actors">-->
<!--                        <li class="select__variant" data-value='Leonardo DiCaprio'>Leonardo DiCaprio</li>-->
<!--                        <li class="select__variant" data-value='Johnny Depp'>Johnny Depp</li>-->
<!--                        <li class="select__variant" data-value='Jack Nicholson'>Jack Nicholson</li>-->
<!--                        <li class="select__variant" data-value='Robert De Niro'>Robert De Niro</li>-->
<!--                        <li class="select__variant" data-value='Morgan Freeman'>Morgan Freeman</li>-->
<!--                        <li class="select__variant" data-value='Jim Carrey'>Jim Carrey</li>-->
<!--                        <li class="select__variant" data-value='Adam Sandler'>Adam Sandler</li>-->
<!--                        <li class="select__variant" data-value='Ben Stiller'>Ben Stiller</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul class="select__group director">-->
<!--                        <li class="select__variant" data-value='Steven Spielberg'>Steven Spielberg</li>-->
<!--                        <li class="select__variant" data-value='Martin Scorsese'>Martin Scorsese</li>-->
<!--                        <li class="select__variant" data-value='Guy Ritchie'>Guy Ritchie</li>-->
<!--                        <li class="select__variant" data-value='Christopher Nolan'>Christopher Nolan</li>-->
<!--                        <li class="select__variant" data-value='Tim Burton'>Tim Burton</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul class="select__group country">-->
<!--                        <li class="select__variant" data-value='USA'>USA</li>-->
<!--                        <li class="select__variant" data-value='Germany'>Germany</li>-->
<!--                        <li class="select__variant" data-value='Australia'>Australia</li>-->
<!--                        <li class="select__variant" data-value='UK'>UK</li>-->
<!--                        <li class="select__variant" data-value='Japan'>Japan</li>-->
<!--                        <li class="select__variant" data-value='Serbia'>Serbia</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="clearfix"></div>

    <h2 id='target' class="page-heading heading--outcontainer">Suất Chiếu Đặc Biệt</h2>

    <div class="col-sm-12">
        <div class="row" >
            <div class="col-sm-8 col-md-12">
                <?php foreach ($loadphimhome as $phim){
                    extract($phim);
                    $hinh ="imgavt/".$img;
                    $linkp="index.php?act=ctphim&id=".$id;
                    echo '<!-- Movie variant with time -->
                <div class="movie movie--test movie--test--dark movie--test--left" style="height: 350px;">
                    <div class="movie__images">
                        <a href="'.$linkp.'" class="movie-beta__link">
                            <img alt="lỗi cmnr" src="'.$hinh.'"  style="width: 280px;height: 350px">
                        </a>
                    </div>

                    <div class="movie__info">
                        <a href="movie-page-left.html" class="movie__title" style="font-size:1.4vw">'.$tieu_de.'</a>

                        <p class="movie__time">Thời Lượng Phim : '.$thoi_luong_phim.'</p>

                        <p class="movie__option"><a href="#">Thể Loại : '.$id_loai.'</a></p>

                        <div class="movie__rate">
                            <span class="movie__rating" >5.0</span>
                        </div>
                    </div>
                </div>
                <!-- Movie variant with time -->';
                } ?>

                <div class="row">
                    <div class="social-group">
                        <div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4">
                            <div class="social-group__head" >Tết Làng Địa Ngục <br><p style="padding: 5px;font-size: 2vw;">Kẻ ăn hồn</p></div>
                            <div class="social-group__content">Giữa lúc series kinh dị Tết ở làng địa ngục gây sốt, bộ đôi đạo diễn Trần Hữu Tấn <br class="hidden-xs"><br>nhà sản xuất Hoàng Quân tiếp tục quay trở lại với Kẻ Ăn Hồn, dự án kinh dị ma mị mang đậm chất Việt.</div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-4">
                            <div class="facebook-group">

                              <img src="imgavt/kẻ ăn hồn.jpg" alt="" height="400px">
                            </div>
                        </div>

                        <div class="clearfix visible-sm"></div>
                        <div class="col-sm-6 col-md-4">
                            <div class="twitter-group">
                            <div ><p class="twitter__head"> <div class="social-group__head">Phim Hot</div></p><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 76px; height: 20px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.d37472b4a6622d0b1fff46ad904f6896.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=OliaGozha&amp;show_count=false&amp;show_screen_name=false&amp;size=m&amp;time=1701421844081" data-screen-name="OliaGozha"></iframe><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");</script><div ><img src="imgavt/kẻ ăn hồn2.jpeg" width="300" height="250"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "view/tintuc.php"?>

</section>

<div class="clearfix"></div>