        <!-- Start main-content -->
        <div class="main-content">
          <!-- Section: home -->
          <section id="home" class="divider">
            <div class="container-fluid p-0">

              <!-- START REVOLUTION SLIDER 5.0.7 -->
              <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                  <ul>
                    <?php
                    foreach ($slide as $sl) {
                    ?>
                      <!-- SLIDE 1 -->
                      <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1125" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url('assets/') ?>images/slide/<?= $sl->gambar ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 1.00);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['300','195','160','150']" data-fontsize="['60','50','40','35']" data-lineheight="['80','75','70','45']" data-fontweight="['800','700','700','700']" data-textalign="['center','center','center','center']" data-width="['800','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal; display: none">Our Best <span class="text-theme-colored2">Study</span> Institute
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['390','260','220','220']" data-fontsize="['16','16',16',16']" data-lineheight="['24','24','24','24']" data-fontweight="['400','400','400','400']" data-textalign="['center','center','center','center']" data-width="['800','650','600','460']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; display: none">EduPoints is a international leader in teaching students to write effectively,<br> learn from each other and think for themselves.
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['461','321','281','295']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                        </div>
                      </li>
                    <?php
                    }
                    ?>
                  </ul>
                  <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                </div>
              </div>

              <!-- END REVOLUTION SLIDER -->
              <script>
                var tpj = jQuery;
                var revapi34;
                tpj(document).ready(function() {
                  if (tpj("#rev_slider_home").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_home");
                  } else {
                    revapi34 = tpj("#rev_slider_home").show().revolution({
                      sliderType: "standard",
                      jsFileLocation: "js/revolution-slider/js/",
                      sliderLayout: "fullwidth",
                      dottedOverlay: "none",
                      delay: 3000,
                      navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                          touchenabled: "on",
                          swipe_threshold: 75,
                          swipe_min_touches: 1,
                          swipe_direction: "horizontal",
                          drag_block_vertical: false
                        },
                        arrows: {
                          style: "zeus",
                          enable: false,
                          hide_onmobile: true,
                          hide_under: 600,
                          hide_onleave: true,
                          hide_delay: 200,
                          hide_delay_mobile: 1200,
                          // tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                          left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                          },
                          right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                          }
                        },
                        // bullets: {
                        //     enable: true,
                        //     hide_onmobile: true,
                        //     hide_under: 600,
                        //     style: "metis",
                        //     hide_onleave: true,
                        //     hide_delay: 200,
                        //     hide_delay_mobile: 1200,
                        //     direction: "horizontal",
                        //     h_align: "center",
                        //     v_align: "bottom",
                        //     h_offset: 0,
                        //     v_offset: 30,
                        //     space: 5,
                        //     tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                        // }
                      },
                      viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                      },
                      responsiveLevels: [1240, 1024, 778, 480],
                      gridwidth: [1240, 1024, 778, 480],
                      gridheight: [900, 550, 500, 450],
                      lazyType: "none",
                      parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                      },
                      shadow: 0,
                      spinner: "off",
                      stopLoop: "off",
                      stopAfterLoops: -1,
                      stopAtSlide: -1,
                      shuffle: "off",
                      autoHeight: "off",
                      hideThumbsOnMobile: "off",
                      hideSliderAtLimit: 0,
                      hideCaptionAtLimit: 0,
                      hideAllCaptionAtLilmit: 0,
                      debugMode: false,
                      fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                      }
                    });
                  }
                }); /*ready*/
              </script>
              <!-- END REVOLUTION SLIDER -->
            </div>
          </section>

          <!-- <section class="little-menu" style="margin-top: -50px;">
            <div class="container" style="padding-right: 15px; padding-left: 15px; padding-top:0px; padding-bottom:0px; margin-right: auto; margin-left: auto;">
              <div class="little-menu-container">
                <ul>
                  <?php
                  foreach ($kaki as $kk) {
                  ?>
                    <li><a href="<?= $kk->link ?>"><?= $kk->menu ?></a></li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
          </section> -->
          <section style="background-color: #e2e2e2;">
            <div class="container" style="padding-top: 40px;padding-bottom: 30px;">

              <div class="section-content text-center">
                <div class="row mtli-row-clearfix">
                  <div class="col-md-3 col-xs-6">
                    <div class="horizontal-tab-centered">
                      <a href="Login/perusahaan" class="btn btn-primary btn-flat" style="padding: 20px;"><i class="fa fa-bank fa-5x"></i><br>Perusahaan</a>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <div class="horizontal-tab-centered">
                      <button class="btn btn-warning btn-flat" style="padding: 22px;margin-bottom:10px;"><i class="fa fa-users fa-5x"></i><br>JobSeeker</button>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <div class="horizontal-tab-centered">
                      <button class="btn btn-success btn-flat" style="padding: 20px;"><i class="fa fa-leanpub fa-5x"></i><br>Magang</button>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                    <div class="horizontal-tab-centered">
                      <button class="btn btn-danger btn-flat" style="padding: 20px;"><i class="fa fa-wechat fa-5x"></i><br>Konseling</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



          <section>
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="mt-0 mt-xs-20 line-height-1 line-bottom-edu"><span>Lowongan</span> Kerja</h2>
                  <div class="upcoming-events bg-white-f3 mb-20">
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-15">
                        <div class="thumb p-15">
                          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/brand/pertamina-head.jpg" alt="...">
                        </div>
                      </div>
                      <div class="col-sm-4 pl-0 pl-sm-15">
                        <div class="event-details p-15 mt-20">
                          <h4 class="media-heading text-uppercase font-weight-500">PT. PERTAMINA (PERSERO) TBK</h4>
                          <p>Pertamina merupakan Badan Usaha Milik Negara yang bergerak dalam bisnis Oil&Gas mengundang putra-putri.</p>
                          <a href="JobDetil" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                            <li class="p-15 mr-5 bg-lightest">Dec</li>
                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                            <li class="p-15 bg-lightest">2015</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Batas 17-Mar-2020</li>
                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Jakarta - Indonesia.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="upcoming-events bg-white-f3 mb-20">
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-15">
                        <div class="thumb p-15">
                          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/brand/bca-head.jpg" alt="...">
                        </div>
                      </div>
                      <div class="col-sm-4 pl-0 pl-sm-15">
                        <div class="event-details p-15 mt-20">
                          <h4 class="media-heading text-uppercase font-weight-500">PT. BANK CENTRAL ASIA TBK</h4>
                          <p>BCA merupakan salah satu bank terkemuka di Indonesia yang bergerak dalam bisnis perbankan mengundang..</p>
                          <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                            <li class="p-15 mr-5 bg-lightest">Dec</li>
                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                            <li class="p-15 bg-lightest">2015</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Batas 17-Mar-2020</li>
                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Jakarta - Indonesia.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="upcoming-events bg-white-f3 mb-20">
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-15">
                        <div class="thumb p-15">
                          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/brand/yazaki-head.jpg" alt="...">
                        </div>
                      </div>
                      <div class="col-sm-4 pl-0 pl-sm-15">
                        <div class="event-details p-15 mt-20">
                          <h4 class="media-heading text-uppercase font-weight-500">PT. JATIM AUTOCOMP INDONESIA</h4>
                          <p>PT. Jatim Autocomp Indonesia merupakan salah satu PMA Jepang yang bergerak dalam bisnis Wiring Harness.</p>
                          <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                            <li class="p-15 mr-5 bg-lightest">Dec</li>
                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                            <li class="p-15 bg-lightest">2015</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Batas 17-Mar-2020</li>
                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Jakarta - Indonesia.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="upcoming-events bg-white-f3 mb-20">
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-15">
                        <div class="thumb p-15">
                          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/brand/indo-head.jpg" alt="...">
                        </div>
                      </div>
                      <div class="col-sm-4 pl-0 pl-sm-15">
                        <div class="event-details p-15 mt-20">
                          <h4 class="media-heading text-uppercase font-weight-500">PT. INDONESIA POWER</h4>
                          <p>PT. Indonesia Power merupakan salah satu perusahaan skala nasional di Indonesia yang bergerak dalam bisnis power.</p>
                          <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                            <li class="p-15 mr-5 bg-lightest">Dec</li>
                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                            <li class="p-15 bg-lightest">2015</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Batas 17-Mar-2020</li>
                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Jakarta - Indonesia.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="upcoming-events bg-white-f3 mb-20">
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-15">
                        <div class="thumb p-15">
                          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/brand/samsung-head.jpg" alt="...">
                        </div>
                      </div>
                      <div class="col-sm-4 pl-0 pl-sm-15">
                        <div class="event-details p-15 mt-20">
                          <h4 class="media-heading text-uppercase font-weight-500">PT. SAMSUNG INDONESIA</h4>
                          <p>PT. Samsung Indonesia merupakan salah satu perusahaan PMA Korea di Indonesia yang bergerak dalam penjualan alat telekomunikasi</p>
                          <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                            <li class="p-15 mr-5 bg-lightest">Dec</li>
                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                            <li class="p-15 bg-lightest">2015</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Batas 17-Mar-2020</li>
                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Jakarta - Indonesia.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="JobDetil/all" type="button" class="btn btn-flat btn-sm btn-primary pull-right">Lihat Semua</a>

                </div>


                <div class="col-sm-5 col-md-4">
                  <h2 class="mt-0 mt-xs-20 line-height-1 line-bottom-edu"><span>Agend</span>a</h2>
                  <div class="bxslider bx-nav-top" data-minslides="10">
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored pl-10">
                        <ul class="mt-15 mt-sm-30">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Rekrutmen PT Indolakto Purwosari</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored2 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">AGENDA PSIKOTEST PT KAYABA INDONESIA</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored3 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Job Fair XVIII Universitas Kanjuruhan</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Pelatihan Softskill IV</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored2 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Psikotes PT. Pertamina</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored3 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Pengumuman Rekrutmen PT. Samsung</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Walk Interview PT. BCA</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored pl-10">
                        <ul class="mt-15 mt-sm-30">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Pengumuman Tes Kesehatan PT. PLN</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored2 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">Pengumuman Psikotes PT. Indonesia Power</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored3 p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">PT. Jatim Autocomp Walk Interview</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="event media mt-0 no-bg no-border">
                      <div class="event-date-new media-left text-center flip bg-theme-colored p-10">
                        <ul class="mt-5 mt-sm-20">
                          <li class="font-20 text-white font-weight-600">28</li>
                          <li class="font-14 text-uppercase text-white">Feb</li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <div class="event-content pull-left flip pl-20 pl-xs-10">
                          <h4 class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5"><a href="#">work in Japan Seminar & Career Counseling</a></h4>
                          <span class="mb-5 font-12 mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                          <span class="font-12"><i class="fa fa-map-marker mr-5 text-theme-colored"></i> 25 Newyork City</span>
                          <p class="mb-5">Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>




          <!-- Section: Mission -->
          <section class="bg-silver-light">
            <!-- <div class="container pb-0 pb-sm-60"> -->
            <!-- Video Area Start Here -->
            <?php
            foreach ($video as $vd) {
            ?>
              <div class="video-area overlay-video bg-common-style" style="background-image: url('<?= base_url('assets/') ?>images/video/<?= $vd->gambar ?>');">
                <div class="container">
                  <div class="video-content">
                    <h2 class="video-title"><?= $vd->judul ?></h2>
                    <p class="video-sub-title"><?= $vd->deskripsi ?></p>
                    <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="<?= $vd->link_youtube ?>"><i class="fa fa-play" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- Video Area End Here -->
            <!-- </div> -->
          </section>


          <!-- Section: -->
          <section>
            <div class="container">
              <div class="section-title text-center">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <h2 class="text-center line-height-1 mt-0">Galeri <span class="text-theme-colored3">Kegiatan</span> </h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus hic suscipit doloremque deleniti ipsa quia dolor laborum natus tenetur, excepturi?</p> -->
                  </div>
                </div>
              </div>
              <div class="section-content">
                <div class="row mtli-row-clearfix">
                  <div class="col-md-12">
                    <div class="horizontal-tab-centered">
                      <div class="text-center">
                        <ul class="nav nav-pills mb-10">
                          <?php
                          foreach ($album as $ab) {
                          ?>
                            <li class=""> <a href="#tab-<?= $ab->id ?>" class="" data-toggle="tab" aria-expanded="false"> <i class="fa fa-graduation-cap" aria-hidden="true"></i><?= $ab->menu ?></a> </li>
                            <!-- <li class=""> <a href="#tab-21" data-toggle="tab" aria-expanded="false"> <i class="fa fa-leanpub"></i>Faculty of Commerce</a> </li>
                            <li class=""> <a href="#tab-22" data-toggle="tab" aria-expanded="true"> <i class="fa fa-book"></i>Faculty of Science</a> </li>
                            <li class=""> <a href="#tab-23" data-toggle="tab" aria-expanded="false"> <i class="fa fa-certificate"> </i>Postgraduate</a> </li>
                            <li class=""> <a href="#tab-24" data-toggle="tab" aria-expanded="false"> <i class="fa fa-university" aria-hidden="true"></i>Research Higher Degree</a> </li> -->
                          <?php
                          }
                          ?>
                        </ul>
                      </div>
                      <div class="panel-body p-0">
                        <div class="tab-content p-0">
                          <?php
                          //ambil nilai min
                          $min_data = $this->db->query('select min(id) as min from tbl_galeri_menu')->row_array();

                          foreach ($galeri_gb as $gr) {
                            $tab = $gr->id;
                          ?>
                            <div class="tab-pane fade <?= ($min_data['min'] == $tab) ? "active" : "" ?> in" id="tab-<?= $tab ?>">
                              <div class="row">
                                <?php $aaa =
                                  $this->db->limit(4)->get_where('tbl_galeri_gb', ['menu' => $tab])->result();
                                foreach ($aaa as $gal) {
                                ?>
                                  <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class=" services mb-xs-30">
                                      <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="<?= base_url('assets/') ?>images/gallery/<?= $gal->gambar ?>">
                                      </div>
                                    </div>
                                  </div>
                                <?php
                                }
                                ?>
                              </div>
                            </div>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>




          <!-- Section: -->
          <?php
          foreach ($gb_testimoni as $gb) {
          ?>
            <section data-bg-img="<?= base_url('assets/') ?>images/testimoni/<?= $gb->gb_utama ?>">
            <?php
          }
            ?>
            <div class="container-fluid p-0">
              <div class="section-content">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6 bg-theme-colored">
                    <h3 class="text-center line-height-1 text-white mt-100 mb-15 mt-sm-0 pt-sm-100">Testimoni</h3>
                    <div class="owl-carousel-1col pr-150 pl-150 pr-sm-50 pl-sm-50 pb-90" data-dots="true">
                      <?php
                      foreach ($testimoni as $ts) {
                      ?>
                        <div class="item">
                          <div class="testimonial-wrapper text-center">
                            <div class="content">
                              <i class="fa fa-quote-left text-theme-colored2 font-42 mt-15 mb-10 mb-sm-0"></i>
                              <a class="mt-20 mb-15 display-block" href="#">
                                <img alt="" src="<?= base_url('assets/') ?>images/testimoni/klien/<?= $ts->gambar ?>" class="img-circle">
                              </a>
                              <p class="mb-sm-10 text-white-f3"><?= $ts->testimoni ?></p>
                              <h4 class="service-box-title font-weight-800 text-white-f3"><?= $ts->nama ?></h4>
                              <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0"><?= $ts->profesi ?></span>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </section>

            <!-- Section:  -->


            <?php
            foreach ($achievement as $ac) {
            ?>
              <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="<?= base_url('assets/') ?>images/achievement/<?= $ac->gambar ?>" data-parallax-ratio="0.7">
                <div class="container pt-100 pb-100">
                  <div class="section-title">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-white text-center line-height-1 mt-0"><?= $ac->judul ?></h2>
                        <p class="text-white-f2 text-center"><?= $ac->deskripsi ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="section-content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="funfact">
                              <i class="pe-7s-notebook text-theme-colored2 mt-20 font-48 pull-left flip"></i>
                              <div class="ml-60">
                                <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="<?= $ac->kursus ?>" data-animation-duration="2000">0</h2>
                                <div class="clearfix"></div>
                                <h5 class="text-white-f2">Pelatihan</h5>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="funfact">
                              <i class="pe-7s-users text-theme-colored2 mt-20 font-48 pull-left flip"></i>
                              <div class="ml-60">
                                <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="<?= $ac->jobseeker ?>" data-animation-duration="2500">0</h2>
                                <div class="clearfix"></div>
                                <h5 class="text-white-f2">Job Seeker</h5>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="funfact">
                              <i class="fa fa-building-o text-theme-colored2 mt-20 font-48 pull-left flip"></i>
                              <div class="ml-60">
                                <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="<?= $ac->company ?>" data-animation-duration="3000">0</h2>
                                <div class="clearfix"></div>
                                <h5 class="text-white-f2">Mitra Perusahaan</h5>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="funfact">
                              <i class="fa fa-bullhorn text-theme-colored2 mt-20 font-48 pull-left flip"></i>
                              <div class="ml-60">
                                <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="<?= $ac->lowongan ?>" data-animation-duration="3000">0</h2>
                                <div class="clearfix"></div>
                                <h5 class="text-white-f2">Lowongan</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            <?php
            }
            ?>

            <section>
              <!-- Students Join 1 Area Start Here -->
              <div class="students-join1-area">
                <div class="container">
                  <div class="students-join1-wrapper">
                    <div class="students-join1-left">
                      <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                        <ul class="ri-grid-list">
                          <?php
                          foreach ($member as $mr) {
                          ?>
                            <li>
                              <a href="#"><img src="<?= base_url('assets/') ?>images/member/<?= $mr->gambar ?>" alt=""></a>
                            </li>
                          <?php
                          }
                          ?>
                        </ul>
                      </div>
                    </div>
                    <div class="students-join1-right">
                      <div>
                        <h2><span> 2,541</span> <br> Member.</h2>
                        <a href="#" class="join-now-btn">Join With Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Students Join 1 Area End Here -->

              <!-- Caraousel -->
              <section>
                <div class="container">
                  <h2 class="text-center line-height-1 mt-0" style="margin-bottom: 30px;">Mitra<span class="text-theme-colored3"> Perusahaan</span></h2>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel-6col" data-dots="true" data-nav="true">
                        <?php
                        foreach ($partner as $pr) {
                        ?>
                          <div class="item"><img src="<?= base_url('assets/') ?>images/partner/<?= $pr->gambar ?>" alt=""></div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end caraousel --->
            </section>

            <!-- Section: blog -->

        </div>
        <!-- end main-content -->