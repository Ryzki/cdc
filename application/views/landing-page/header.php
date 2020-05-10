<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Digital Marketing Agencies, SEO companies & Social Media specialists HTML5 Template" />
    <meta name="keywords" content="marketing,seo,ppc,mapping,linkbuilding,analytics,ads" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>PPK | Universitas Kanjuruhan Malang</title>

    <!-- Favicon and Touch Icons -->
    <link rel="icon" href="<?= base_url('assets/') ?>images/favicon.png" type="image/x-icon">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/css-plugin-collections.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/css-add.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="<?= base_url('assets/') ?>css/menuzord-megamenu.css" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="<?= base_url('assets/') ?>css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="<?= base_url('assets/') ?>css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?= base_url('assets/') ?>css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?= base_url('assets/') ?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="<?= base_url('assets/') ?>css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="<?= base_url('assets/') ?>css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="<?= base_url('assets/') ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- external javascripts -->
    <script src="<?= base_url('assets/') ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?= base_url('assets/') ?>js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="<?= base_url('assets/') ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/style.css" />
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/modernizr.custom.26633.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/fallback.css" />
    </noscript>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style>
    .header-nav:hover {
        background-color: rgba(0, 0, 0, .90);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .header-nav:hover .menuzord-menu>li:not(.active)>a {
        color: #FFF !important;
    }

    .header.header-floating .sticky-wrapper.is-sticky .header-nav.navbar-sticky {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .header.header-floating .sticky-wrapper .header-nav.navbar-sticky .menuzord-menu>li>a {
        color: #FFF;
    }

    .header.header-floating .sticky-wrapper:not(.is-sticky) .header-nav.navbar-sticky .menuzord-menu>li:not(.active):not(:hover)>a {
        color: #888;
    }

    .sticky-wrapper.is-sticky .header-nav.navbar-sticky {
        background-color: rgba(0, 0, 0, .90);
    }

    .button-trace {
        color: white !important;
        border: 2px solid orange;
        background-color: orange;
    }

    .little-menu {
        z-index: 990;
        padding-top: 10px;
        padding-bottom: 10px;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 15px 0;
        background-color: rgba(0, 0, 0, .45);
        transition: all .2s;
    }

    .little-menu:hover {
        background-color: rgba(0, 0, 0, .90);
    }

    .little-menu a {
        color: #FFF;
        margin-left: 15px;
        margin-right: 10px;
        font-family: Roboto, sans-serif;
        letter-spacing: .25em;
        text-transform: uppercase;
    }

    .little-menu a:hover {
        color: orange;
        transition: all .2s;
    }

    .little-menu ul {
        text-align: center;
        display: block;
        margin: 0;
        padding: 0;
    }

    .little-menu li {
        display: inline-block;
        border-left: solid 1px #fff;
    }

    .little-menu li:first-child {
        border-left: none;
    }

    .little-menu-container {
        width: 100%;
        height: 20px;
    }

    .job-vacancy-box {
        /* overflow-y: auto; */
        visibility: hidden;
        /* height: 400px; */
    }

    .job-vacancy-list,
    .job-vacancy-box:hover,
    .job-vacancy-box:focus {
        visibility: visible;
        transition: all 0.2s;
        /* overflow-y: scroll; */
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        transition: all 0.2s;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: orange;
    }

    .section-box {
        height: 570px;
    }

    .event-media-box {
        background-color: #FFF;
        box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.05);
        border-radius: 5px;
    }

    .btn-blue {
        background-color: #0d5189;
        color: #FFF !important;
    }

    .btn-blue:hover {
        background-color: #0c406c;
    }
</style>

<body>
    <div id="wrapper">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        <header id="header" class="header header-floating">
            <div class="header-nav navbar-sticky navbar-sticky-animated">
                <div class="header-nav-wrapper">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">
                            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="#">
                                <img class="logo-default" src="<?= base_url('assets/') ?>images/logo/logo.png" alt="">
                                <img class="logo-scrolled-to-fixed" src="<?= base_url('assets/') ?>images/logo/logo.png" alt="">
                            </a>
                            <ul class="menuzord-menu" style="color: #888">
                                <li class="active"><a href="#home">Home</a>
                                </li>
                                <?php
                                foreach ($menu as $mn) {
                                ?>
                                    <li class=""><a href="#about"><?= $mn->menu ?></a>
                                        <!-- Buat kondisi apakah ada Submenu -->
                                        <?php
                                        $submenu = $this->db->get_where('tbl_submenu', ['menu' => $mn->menu])->result();
                                        if (!empty($submenu)) {
                                            foreach ($submenu as $sbm) {
                                                $d = $sbm->submenu;
                                        ?>
                                                <ul class="dropdown">
                                                    <li><a href=""><?= $d ?></a></li>
                                                </ul>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                                <li class=""><a href="<?= base_url('tracer') ?>" class="button-trace">Tracer Study</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>