        <!-- Footer -->
        <?php
        foreach ($footer as $ft) {
        ?>
            <footer id="footer" class="footer bg-black-111">

                <div class="footer-bottom bg-black">
                    <div class="container pt-10 pb-0">
                        <div class="row">
                            <div class="col-md-7 sm-text-center">
                                <br>
                                <p class="font-13 text-black-777 m-0">Hak Cipta © 2020 Unikama Career & Development Center. Hak cipta dilindungi oleh undang-undang. Powered by SCM </p>
                            </div><br>
                            <div class="col-md-5 text-right flip sm-text-center">
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