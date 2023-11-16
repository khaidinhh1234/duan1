<!doctype html>
<html>

<!-- Mirrored from amovie.gozha.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:37:36 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>CinePass: Trang bán vé số 1 Việt Nam</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gozha.net">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <link rel="shortcut icon" type="image/x-icon" href="../images/movie-img1.jpg">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="login-ui2/login-ui2/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- Mobile menu -->
    <link href="../web_cine_pass/css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <link href="../web_cine_pass/css/external/jquery.selectbox.css" rel="stylesheet" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="../web_cine_pass/rs-plugin/css/settings.css" media="screen" />

    <!-- Custom -->
    <link href="../web_cine_pass/css/style3860.css?v=1" rel="stylesheet" />


    <!-- Modernizr -->
    <script src="../web_cine_pass/js/external/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">

    <!-- Header section -->
    <header class="header-wrapper header-wrapper--home">
        <div class="container">
            <!-- Logo link-->
            <a href='index.php' class="logo">
                <img alt='logo' src="../web_cine_pass/images/logo.png">
            </a>

            <!-- Main website navigation-->
            <nav id="navigation-box">
                <!-- Toggle for mobile menu mode -->
                <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                </a>

                <!-- Link navigation -->
                <ul id="navigation">
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php">Trang chủ</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=dsphim">Phim</a>

                    </li>

                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=tintuc">Thể loại</a>
                        <ul>
                            <?php foreach ($loadloai as $loai){
                                extract($loai);
                                $linkloai = 'index.php?act=loaiphim&id='.$id;
                                echo '<li class="menu__nav-item"><a href="'.$linkloai.'" >'.$name.'</a></li>';
                            } ?>

                        </ul>
                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=rapchieu">Rạp chiếu</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=lienhe">Liên hệ</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=tintuc">Tin tức</a>

                    </li>
                </ul>
            </nav>

            <!-- Additional header buttons / Auth and direct link to booking-->
            <div class="control-panel">
<!--                <div class="auth auth--home">-->
<!--                    <div class="auth__show">-->
<!--                        <span class="auth__image">-->
<!--                          <img alt="" src="../web_cine_pass/images/client-photo/auth.png">-->
<!--                        </span>-->
<!--                    </div>-->
<!--                    <a href="#" class="btn btn--sign btn--singin">-->
<!--                        me-->
<!--                    </a>-->
<!---->
<!--                </div>-->
                <a href="index.php?act=dangnhap" class="btn btn-md btn--warning btn--book ">Đăng nhập</a>
            </div>

        </div>
    </header>




