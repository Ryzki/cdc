<!-- Start main-content -->
<div class="main-content">

  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="blog-posts">
            <div class="col-md-12">
              <div class="row list-dashed">
                <?php
                foreach ($artikel as $ar) {
                  //tanggal
                  $tgl = substr($ar->waktu, 0, 10);
                  $tanggal = substr($tgl, 8, 2); //tanggal
                  $bulan = substr($tgl, 5, 2); //tanggal
                  //buat kondisi bulan
                  if ($bulan == '01') {
                    $bln = 'JAN';
                  } else if ($bulan == '02') {
                    $bln = 'FEB';
                  } else if ($bulan == '03') {
                    $bln = 'MAR';
                  } else if ($bulan == '04') {
                    $bln = 'APR';
                  } else if ($bulan == '05') {
                    $bln = 'MAY';
                  } else if ($bulan == '06') {
                    $bln = 'JUN';
                  } else if ($bulan == '07') {
                    $bln = 'JUL';
                  } else if ($bulan == '08') {
                    $bln = 'AUG';
                  } else if ($bulan == '09') {
                    $bln = 'SEP';
                  } else if ($bulan == '10') {
                    $bln = 'OCT';
                  } else if ($bulan == '11') {
                    $bln = 'NOV';
                  } else if ($bulan == '12') {
                    $bln = 'DEC';
                  }

                ?>



                  <article class="post clearfix mb-30 pb-30">
                    <div class="entry-content border-1px p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                          <ul>
                            <li class="font-16 text-white font-weight-600"><?= $tanggal ?></li>
                            <li class="font-12 text-white text-uppercase"><?= $bln ?></li>
                          </ul>
                        </div>
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?= $ar->judul ?></a></h4>
                            <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                          </div>
                        </div>
                      </div>
                      <p class="mt-10"><?= substr($ar->konten, 0, 500) ?> ...</p>
                      <a href="blogDetil" class="btn-read-more">Read more</a>
                      <div class="clearfix"></div>
                    </div>
                  </article>





                <?php
                }
                ?>
              </div>
            </div>
            <div class="col-md-12">
              <nav>
                <ul class="pagination theme-colored">
                  <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->