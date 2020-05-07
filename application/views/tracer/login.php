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
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
    <link href="<?= base_url('assets/') ?>images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144">

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
<style>
    html,
    body {
        height: 100% !important;
    }

    #Header {
        width: 960px;
        height: 150px;
    }
</style>

<body class="">
    <div id="wrapper" style="height: 100%">
        <!-- Start main-content -->
        <div class="main-content" style="height: 100%">
            <!-- Section: Job Apply Form -->
            <section class="divider parallax layer-overlay overlay-dark-9 pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="bg-lightest border-1px p-30 mb-0">
                                <h3 class="text-theme-colored mt-0 pt-5 text-center mb-30">SIGNIN TO YOUR ACCOUNT</h3>
                                <?= $this->session->flashdata('message') ?>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <form action="<?= base_url('tracer') ?>" method="POST" class="form-horizontal">
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">NPM </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="npm" placeholder="NPM" value="<?= set_value('npm') ?>" required>
                                                </div>
                                                <?= form_error('npm', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Phone </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="<?= set_value('phone') ?>" required>
                                                </div>
                                                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Email </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?= set_value('email') ?>" required>
                                                </div>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Sign In</>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <p class="font-13 text-black-777 m-0 text-center mt-10"><b>Copyright &copy;2020 Solusiciptamedia. All Rights Reserved</b></p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </section>
            <!-- end main-content -->
            <script src="<?= base_url('assets/') ?>js/custom.js"></script>

</body>

</html>