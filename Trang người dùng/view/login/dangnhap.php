
<!-- Form without bootstrap -->
<div class="auth-wrapper">
    <div class="auth-container" style="margin-top: 100px">
        <div class="auth-action-left">
            <div class="auth-form-outer">
                <?php if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                    $link_ve = "index.php?act=ve&id=".$id;
                    echo ' <h2 >Xin chào : ' .$name .' </h2>';
                    echo '<br><button class="btn btn-md btn--warning"><a href="index.php?act=suatk">Cập nhật tài khoản</a></button>';
                    echo '<br><button class="btn btn-md btn--warning"><a href="'.$link_ve.'">Vé đã mua</a></button>';
                    echo '<br><button class="btn btn-md btn--warning"><a href="index.php?act=dangxuat">Đăng xuất</a></button>';
                }else{ ?>
                <h2 class="auth-form-title" style="margin-bottom:10px;">
                  <div class="dn">  Đăng nhập</div>
               
                <div class="auth-external-container" style="margin-top: 20px;">
                </div>


                <form class="login-form" method="post" action="index.php?act=dangnhap">
                    <div class="loi" ><font  style="color: red; padding:100px;" ><?= $thongbao['dangnhap'] ?? "" ?></font></div>
                    <input type="text" class="auth-form-input" name="user"  placeholder="Tài khoản" required>
                    <div class="input-icon">
                        <input type="password" class="auth-form-input" name="pass" placeholder="Mật khẩu" required>
                        <i class="fa fa-eye show-password"></i>
                    </div>
                    <label class="btn active">
                            <input type="checkbox" name='ghinho' checked >
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span>Nhớ tài khoản</span>
                        </label>
                    <div class="footer-action">
                        <input type="submit" value="Đăng nhập" class="auth-submit" name="login">
                        <a href="index.php?act=dangky" class="auth-btn-direct">Đăng ký</a>
                    </div>
                </form>
                <div class="auth-forgot-password">
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </div>
                <?php } ?>

            </div>
        </div>

        <div class="auth-action-right">
            <div class="auth-image">
                <img src="login-ui2/login-ui2/assets/Rạp chiếu phim Xanh dương  Áp phích Hội thảo.png" alt="login">
            </div>
        </div>
    </div>
</div>

