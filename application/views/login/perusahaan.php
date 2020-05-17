<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Partner Employer</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url('assets/') ?>images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('assets/') ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?= base_url('assets/') ?>css/login-style.css" rel="stylesheet">



</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo text-center">
            <img src="<?= base_url('assets/') ?>images/ppk.png" width="200" height="130" /><a href="javascript:void(0);"></a>
        </div>
        <div class="card">
            <?= $this->session->flashdata('message') ?>
            <div class="body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-sm bg-pink" style="margin-top: -40px;font-size: 16px;padding: 15px 30px;">INFORMASI</button>
                            </div>
                        </div> <br>
                        <div class="row" style="margin:auto;">
                            <div class="col-md-4 col-xs-4" style="padding-left:0px;padding-right:0px;">
                                <button class="btn btn-primary" style="padding:5px;"><img src="<?= base_url('assets/') ?>images/notepad.png" width="72" height="72" /><br>Prosedur</button>
                            </div>
                            <div class="col-md-4 col-xs-4" style="padding-left:0px;padding-right:0px;">
                                <button class="btn btn-warning" style="padding:5px;"><img src="<?= base_url('assets/') ?>images/bill.png" width="72" height="72" /><br>Biaya</button>
                            </div>
                            <div class="col-md-4 col-xs-4" style="padding-left:0px;padding-right:0px;">
                                <button class="btn btn-success" style="padding:5px;"><img src="<?= base_url('assets/') ?>images/board.png" width="72" height="72" /><br>Fasilitas</button>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="background-color: #123851;color: white; padding: 10px;">
                                    <p>Informasi Lebih lanjut<br>
                                        Pusat Pengembangan Karir (PPK-UNIKAMA)<br>
                                        Website : https://cdc.unikama.ac.id<br>
                                        Telp. 0341-801488<br>
                                        Email : cdc@unikama.ac.id</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form id="sign_in" method="POST" action="<?= base_url('login/perusahaan') ?>">
                            <div class="judul-login">Sign In Your Account</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="email" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12">
                                    <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit" id="submit" value="sign">MASUK</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 p-t-5">
                                    <p><a href="#">&nbsp;</a><a href="<?= base_url('') ?>" class="pull-leftt">
                                            Halaman Depan</a> <a href="#">&nbsp;
                                        </a><a href="<?= base_url('login/daftar_baru') ?>" class="pull-right">Daftar Baru</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
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
</body>

</html>