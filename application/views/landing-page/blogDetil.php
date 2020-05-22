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
  <title>Study School College & University Template</title>

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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
  <div id="wrapper">
    <!-- preloader -->
    <!-- <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="dfg"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div> -->




    <!-- Start main-content -->
    <div class="main-content">



      <!-- Section: Blog -->
      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="blog-posts single-post">
                <article class="post clearfix mb-0">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/bg/bg3.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                  </div>
                  <div class="entry-content">
                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                      <?php
                      foreach ($pages as $pg) {
                      ?>
                        <div class="media-body">
                          <div class="event-content pull-left flip">
                            <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html"><?= $pg->judul ?></a></h3>
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                          </div>
                        </div>
                    </div>


                    <!-- Body Pages -->
                    <?= $pg->konten ?>


                    <!-- End Body Pages -->
                  <?php
                      }
                  ?>

                  <div class="mt-30 mb-0">
                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
                  </div>
                </article>
                <div class="tagline p-0 pt-20 mt-5">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="tags">
                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="share text-right flip">
                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <!-- end main-content -->


  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <!-- <script src="<?= base_url('assets/') ?>js/custom.js"></script> -->

</body>

</html>