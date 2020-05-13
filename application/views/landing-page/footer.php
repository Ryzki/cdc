        <!-- Footer -->
        <?php
        foreach ($footer as $ft) {
        ?>
            <footer id="footer" class="footer bg-black-111">
                <div class="container pt-70 pb-40">
                    <div class="row border-bottom-black">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/logo-footer/<?= $ft->logo ?>">
                                <p><?= $ft->alamat ?></p>
                                <ul class="mt-5">
                                    <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= $ft->telp ?></a> </li>
                                    <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= $ft->email ?></a> </li>
                                    <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= $ft->website ?></a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title">Sitemaps</h4>
                                <ul class="list-border">
                                    <li><a href="https://unikama.ac.id" target="_blank">Home</a></li>
                                    <li><a href="https://ristekdikti.go.id" target="_blank">About</a></li>
                                    <li><a href="https://lppm.unikama.ac.id" target="_blank">Magang</a></li>
                                    <li><a href="https://mhs.unikama.ac.id" target="_blank">Tracer</a></li>
                                    <li><a href="https://infopmb.unikama.ac.id" target="_blank">Magang</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title">Tautan Penting</h4>
                                <ul class="list-border">
                                    <li><a href="<?= $ft->link1 ?>" target="_blank"><?= $ft->taut1 ?></a></li>
                                    <li><a href="<?= $ft->link2 ?>" target="_blank"><?= $ft->taut2 ?></a></li>
                                    <li><a href="<?= $ft->link3 ?>" target="_blank"><?= $ft->taut3 ?></a></li>
                                    <li><a href="<?= $ft->link4 ?>" target="_blank"><?= $ft->taut4 ?></a></li>
                                    <li><a href="<?= $ft->link5 ?>" target="_blank"><?= $ft->taut5 ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h4 class="widget-title">Galeri Aktivitas</h4>
                                <div class="opening-hours">
                                    <div class="row">
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/1.jpg">
                                        </div>
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/2.jpg">
                                        </div>
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/3.jpg">
                                        </div>
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/4.jpg">
                                        </div>
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/1.jpg">
                                        </div>
                                        <div class="col-md-4 sm-text-center" style="padding-left: 0px;padding-right: 10px;">
                                            <img class="mt-10 mb-20" alt="" src="<?= base_url('assets/') ?>images/gallery/2.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg-black">
                    <div class="container pt-10 pb-0">
                        <div class="row">
                            <div class="col-md-6 sm-text-center">
                                <p class="font-13 text-black-777 m-0">Hak Cipta © 2020 Unikama Career & Development Center. Hak cipta dilindungi oleh undang-undang. Powered by SCM </p>
                            </div>
                            <div class="col-md-6 text-right flip sm-text-center">
                                <div class="widget no-border m-0">
                                    <ul class="styled-icons icon-dark icon-circled icon-sm">
                                        <li><a href="<?= $ft->facebook ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?= $ft->twitter ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?= $ft->skype ?>"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="<?= $ft->youtube ?>"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="<?= $ft->instagram ?>"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?= $ft->pinterest ?>"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <?php
        }
        ?>
        <a class="scrollToTop" href="#" style="background-color: transparent"><i class="flaticon-seo-transport-3"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="<?= base_url('assets/') ?>js/custom.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/jquery.meanmenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/') ?>js/jquery.scrollUp.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/') ?>js/main.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/') ?>js/jquery.gridrotator.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {

                $('#ri-grid').gridrotator({
                    w320: {
                        rows: 3,
                        columns: 4
                    },
                    w240: {
                        rows: 3,
                        columns: 3
                    }
                });

            });
        </script>


        </body>

        </html>