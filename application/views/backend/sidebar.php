<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  d-flex  align-items-center">
                <?php
                foreach ($logo as $lg) {
                ?>
                    <a class="navbar-brand" href="<?= base_url('backend/dashboard/profile') ?>">
                        <img src="<?= base_url('assets/') ?>images/logo/<?= $lg->logo ?>" class="navbar-brand-img" alt="...">
                    </a>
                <?php
                }
                ?>
                <div class=" ml-auto ">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('backend/dashboard/admin') ?>">
                                <i class="ni ni-shop text-red"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                                <i class="ni ni-world text-blue"></i>
                                <span class="nav-link-text">Website CDC</span>
                            </a>
                            <div class="collapse" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/profile') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> H </span>
                                            <span class="sidenav-normal"> Header </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/contact') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> C </span>
                                            <span class="sidenav-normal"> Contact Us </span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/lowongan') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> L </span>
                                            <span class="sidenav-normal"> Lowongan Area </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/agenda') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal"> Agenda Area </span>
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/video') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal"> Video Area </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/galeri') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal"> Galeri Gambar </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/testimoni') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> T </span>
                                            <span class="sidenav-normal"> Testimoni Alumni </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/achievement') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal"> Info Pencapaian </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/member') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> M </span>
                                            <span class="sidenav-normal"> Member </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/partner') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal"> Partner Kampus </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/footer') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> F </span>
                                            <span class="sidenav-normal"> Footer </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="ni ni-hat-3 text-black"></i>
                                <span class="nav-link-text">Tracer Study</span>
                            </a>
                            <div class="collapse" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/kodept') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> K </span>
                                            <span class="sidenav-normal"> Kode PT </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/sambutan') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal"> Sambutan </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/prodi') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> P </span>
                                            <span class="sidenav-normal"> Program Studi </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/alumni') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> A </span>
                                            <span class="sidenav-normal"> Alumni </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/analisa') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> G </span>
                                            <span class="sidenav-normal"> Analisa Tracer </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/laporan') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> R </span>
                                            <span class="sidenav-normal"> Laporan Tracer </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-perusahaan" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                                <i class="ni ni-building text-green"></i>
                                <span class="nav-link-text">Mitra Perusahaan</span>
                            </a>
                            <div class="collapse" id="navbar-perusahaan">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/perusahaan_outstanding') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> O </span>
                                            <span class="sidenav-normal"> Outstanding </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/perusahaan_mou') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> M </span>
                                            <span class="sidenav-normal"> Waiting MoU </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('backend/dashboard/perusahaan_verified') ?>" class="nav-link">
                                            <span class="sidenav-mini-icon"> V </span>
                                            <span class="sidenav-normal"> Verified </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../widgets.html">
                                <i class="ni ni-badge text-orange"></i>
                                <span class="nav-link-text">Job Seeker</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../widgets.html">
                                <i class="ni ni-book-bookmark text-blue"></i>
                                <span class="nav-link-text">Magang</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('backend/dashboard/konselor') ?>">
                                <i class="ni ni-chat-round text-green"></i>
                                <span class="nav-link-text">Konselor</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('backend/dashboard/user') ?>">
                                <i class="ni ni-single-02 text-purple"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('backend/dashboard/version') ?>">
                                <i class="ni ni-key-25 text-black"></i>
                                <span class="nav-link-text">Version</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('backend/dashboard/logout') ?>">
                                <i class="ni ni-lock-circle-open text-black"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="<?= base_url('assets/images/user') . $this->session->userdata('image'); ?>" src="<?= base_url('assets/images/user/') . $this->session->userdata('image'); ?>">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->userdata('username'); ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="user_profile" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->