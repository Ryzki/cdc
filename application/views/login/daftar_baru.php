<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Partner Employer</title>
    <!-- Favicon-->
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
    <!-- Custom Css -->
    <link href="<?= base_url('assets/') ?>css/login-style.css" rel="stylesheet">



</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo text-center">
            <a href="<?= base_url('login/perusahaan') ?>"><img src="<?= base_url('assets/') ?>images/ppk.png" width="200" height="130" /></a>
        </div>
        <div class="card pb-0">
            <div class="body">
                <h3>Sign Up Partner Employer</h3>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 bg-lightest border-1px">
                        <div class="row pt-30">
                            <form action="<?= base_url('login/sign_up') ?>" method="POST" id="form_sign_up" class="form-horizontal">
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Nama Perusahaan </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control border-1px" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?= set_value('nama_perusahaan') ?>" required>
                                    </div>
                                    <?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Jenis Perusahaan </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control border-1px" id="jenis_perusahaan" name="jenis_perusahaan" placeholder="Jenis Perusahaan" value="<?= set_value('jenis_perusahaan') ?>" required>
                                    </div>
                                    <?= form_error('jenis_perusahaan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Email </label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control border-1px" id="email_perusahaan" name="email_perusahaan" placeholder="Email" value="<?= set_value('email_perusahaan') ?>" required>
                                    </div>
                                    <?= form_error('email_perusahaan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Password </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control border-1px" id="password_1" name="password_1" placeholder="Password" required>
                                    </div>
                                    <?= form_error('password_1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label"> </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control border-1px" id="password_2" name="password_2" placeholder="Repeat Password" required>
                                    </div>
                                    <?= form_error('password_2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Sign Up</>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets/') ?>js/waves.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url('assets/') ?>js/admin.js"></script>
    <script>
        $('#form_sign_up').on('submit', function(e) {
            e.preventDefault();
            if ($('#nama_perusahaan').val() == "") {
                alert("Nama Perusahaan Harus Diisi!");
            } else if ($('#jenis_perusahaan').val() == "") {
                alert("Jenis Perusahaan Harus Diisi!");
            } else if ($('#email_perusahaan').val() == "") {
                alert("Email Perusahaan Harus Diisi!");
            } else if ($('#password_1').val() == "") {
                alert("Password Harus Diisi!");
            } else if ($('#password_2').val() == "") {
                alert("Repeat Password Harus Diisi!");
            } else if ($('#password_2').val() !== $('#password_1').val()) {
                alert("Password Tidak Sama!");
            } else {
                this.submit();
            }
        })
    </script>
</body>

</html>