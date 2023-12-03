<?php

$ghes = [
    "A" => ["1", "2", "3", "4", "5", "6", "7", "8","9"],
    "B" => ["1", "2", "3", "4", "5", "6", "7", "8"],
    "C" => ["1", "2", "3", "4", "5", "6", "7", "8"],
    "D" => ["1", "2", "3", "4", "5", "6", "7", "8"],
    "E" => ["1", "2", "3", "4", "5", "6", "7", "8","9"],
];
$id_kgc = $_SESSION['tong']['id_gio'];
$id_lc = $_SESSION['tong']['id_lichchieu'];
$id_phim = $_SESSION['tong']['id_phim'];
$khoa_ghe = khoa_ghe($id_kgc, $id_lc, $id_phim);
if (isset($khoa_ghe) && $khoa_ghe != array()) {
    $khoa_ghe_ = [];
    foreach ($khoa_ghe as $sub_array) {
        $khoa_ghe_ = array_merge($khoa_ghe_, $sub_array);
    }
    $khoa_ghe__ = implode(',', $khoa_ghe_);
    $khoa_ghe_all = explode(',', $khoa_ghe__);
} else {
    $khoa_ghe_all = array();
}
?>

<!-- Main content -->
<div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">Tận Hưởng Thời Gian Xem Phim Vui Vẻ</span></p>
                    
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1.   Lịch Chiếu &amp; Thời Gian</div>
                    <div class="order-step second--step">2. Chọn ghế </div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Giá </strong></li>
                        <li class="sits-price sits-price--cheap">100.000 VND</li>
                       
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not"> Đã được chọn</li>
                        <li class="sits-state sits-state--your">Lựa chọn của bạn </li>
                    </ul>
                </div>
                <div class="ghe12">
                <div class=" col-lg-10 col-lg-offset-1">
              
                    <div class="sits-anchor">screen</div>

                    <div class="sits">
                        <aside class="sits__line">
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                           
                        </aside>

                        <?php foreach ($ghes as $key => $value) : ?>
                        <div class="sits__row">
                            <?php foreach ($value as $item) : ?>
                                <span class="sits__place sits-price--cheap <?php if( in_array( $key . $item ,$khoa_ghe_all)){echo 'sits-state--not';}else{}?>" data-place='<?= $key . $item ?>' data-price='10'><?= $key . $item ?></span>

                            <?php endforeach ?>
                        </div>
                    <?php endforeach ?>
           
           
                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                      
                        </footer>
                    </div>
                </div></div>
            </div>
                
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                    </aside>

                    <img alt="" src="">
                </div>
            </div>   
                
            </div>
                

    </div>




