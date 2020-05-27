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
    <title><?= $title ?></title>

    <!-- Favicon and Touch Icons -->
    <link href="<?= base_url('assets/') ?>images/favicon.png" rel="shortcut icon" type="image/png">
    <!-- <link href="<?= base_url('assets/') ?>images/apple-touch-icon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144"> -->

    <!-- Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/css-plugin-collections.css" rel="stylesheet" />
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

    <!-- external javascripts -->
    <script src="<?= base_url('assets/') ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?= base_url('assets/') ?>js/jquery-plugin-collection.js"></script>
</head>

<body class="">
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">
                            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="#">
                                <?php
                                foreach ($logo as $lg) {
                                ?>
                                    <img class="logo-default" src="<?= base_url('assets/') ?>images/logo/<?= $lg->logo ?>" alt="">
                                    <img class="logo-scrolled-to-fixed" src="<?= base_url('assets/') ?>images/logo/<?= $lg->logo ?>" alt="">
                                <?php
                                }
                                ?>
                            </a>
                            <ul class="menuzord-menu" style="color: #888">
                                <li class="active"><a href="#home">Home</a>
                                </li>

                                <?php foreach ($menu as $mn) { ?>
                                    <li class=""><a href="<?= $mn->link ?>"><?= $mn->menu ?></a>
                                        <!-- Buat kondisi apakah ada Submenu -->
                                        <?php $aaa = $this->db->get_where('tbl_submenu', ['menu' => $mn->menu])->result();
                                        if (!empty($aaa)) {
                                            echo '<ul class="dropdown">';
                                            foreach ($aaa as $sbm) {
                                                $d = $sbm->submenu;
                                                $e = $sbm->link; ?>
                                    <li><a href="<?= base_url($e) ?>"><?= $d ?></a></li>
                            <?php }
                                            echo '</ul>';
                                        } ?>
                            </li>
                        <?php  } ?>


                        <li class=""><a href="<?= base_url('tracer') ?>" class="button-trace">Tracer Study</a>
                        </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>