  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x855">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Job Application Form</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Job Apply Form -->
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-1px p-30 mb-0">
              <h3 class="text-theme-colored mt-0 pt-5">Apply Now</h3>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
              <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Sex <small>*</small></label>
                      <select name="form_sex" class="form-control required">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Job Post <small>*</small></label>
                      <select name="form_post" class="form-control required">
                        <option value="Finance Manager">Finance Manager</option>
                        <option value="Area Manager">Area Manager</option>
                        <option value="Country Manager">Country Manager</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Message <small>*</small></label>
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                </div>
                <div class="form-group">
                  <label>C/V Upload</label>
                  <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                  <small>Maximum upload file size: 12 MB</small>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                </div>
              </form>
              <!-- Job Form Validation-->
              <script type="text/javascript">
                $("#job_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status === 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="mt-5">
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list-border">
              <li><a href="index-mp-layout1.html">Home</a></li>
              <li><a href="page-about1.html">About us</a></li>
              <li><a href="shortcode-sitemap.html">Sitemap</a></li>
              <li><a href="page-faq-style1.html">Faq's</a></li>
              <li><a href="page-contact1.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Latest News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right flip"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix text-white"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right flip"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right flip"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right flip"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-222">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6 sm-text-center">
            <p class="font-13 text-black-777 m-0">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right flip sm-text-center">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-circled icon-sm">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
