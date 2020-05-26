<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pusat Pengembangan Karir Unikama">
    <meta name="author" content="Solusi Cipta Media">
    <title>Login | Pusat Pengembangan Karir Unikama</title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="http://solusiciptamedia.com" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets_backend') ?>/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/css/argon.min5438.css?v=1.2.0" type="text/css">

</head>

<body style="background-color:#00bcd4;">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/') ?>images/logo-unikama-1.png">
            </a>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        <div class="container mt-8">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-4 pt-lg-4 pb-lg-0">
                            <div class="text-center text-muted mb-4">
                                <small>Please Login</small>
                            </div>
                            <form role="form" method="post" action="<?= base_url('backend/dashboard/login') ?>">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" name="username" placeholder="bening14" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" name="password" placeholder="admin" type="password">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url('assets_backend') ?>/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets_backend') ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets_backend') ?>/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets_backend') ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets_backend') ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets_backend') ?>/js/argon.min5438.js?v=1.2.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="<?= base_url('assets_backend') ?>/js/demo.min.js"></script>
</body>




</html>