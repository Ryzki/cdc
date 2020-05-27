<body class="">
  <div id="wrapper">

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
                    <!-- <div class="post-thumb thumb"> <img src="images/bg/gabung.jpg" alt="" class="img-responsive img-fullwidth"> </div> -->
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


</body>

</html>