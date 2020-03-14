  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="<?= base_url('assets/') ?>images/slide/h.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">PT. Pertamina (Persero) Tbk.</h2>
              <!--  -->
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="job-overview">
              <dl class="dl-horizontal">
                <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Date Posted:</h5>
                  <p>25-Februari-2020</p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Location:</h5>
                  <p>Surabaya</p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Job Title:</h5>
                  <p>Supervisor IT</p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Salary:</h5>
                  <p>Rp. 10,000,000 - 15,000,000</p>
                </dd>
              </dl>
              <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#myModal" href="#">Apply Now</a>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Apply Now</h3>
                    <form id="job_apply_form" name="job_apply_form" action="http://html.kodesolution.live/f/edupoints/v3/demo/includes/job.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nama <small>*</small></label>
                            <input name="form_name" type="text" placeholder="Masukan Nama" required="" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_email">Email <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email" placeholder="Masukan Email">
                          </div>
                        </div>
                      </div>
                      <div class="row">               
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Jenis Kelamin <small>*</small></label>
                            <select name="form_sex" class="form-control required">
                              <option value="Male">Pria</option>
                              <option value="Female">Wanita</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Posisi yang dilamar <small>*</small></label>
                            <select name="form_post" class="form-control required">
                              <option value="Finance Manager">Supervisor IT</option>
                              <option value="Area Manager">Supervisor EXIM</option>
                              <option value="Country Manager">Supervisor ISS</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Pesan <small>*</small></label>
                        <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Tuliskan pesan dengan baik dan sopan, karena pesan ini akan dikirimkan kepada perusahaan"></textarea>
                      </div>
                      <div class="form-group">
                        <label>C/V Upload</label>
                        <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                        <small>Maximum upload file size: 12 MB</small>
                      </div>
                      <div class="form-group">
                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
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
          </div>
          <div class="col-md-9">
            <div class="icon-box mb-0 p-0">
              <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                <i class="pe-7s-users"></i>
              </a>
              <h3 class="icon-box-title pt-15 mt-0 mb-40">Supervisor IT</h3>
              <hr>
              <p class="text-gray">PT. PERTAMINA (Persero) mencari individu-individu berbakat dan berpotensi yang mampu mencerminkan tata nilai perusahaan untuk menjadi bagian dari tim yang mengakselerasi pencapaian visi: menjadi perusahaan energy nasional kelas dunia. PT Pertamina (Persero) kembali membuka Kesempatan kepada Putra-Putri Indonesia terbaik untuk bergabung dan berkembang bersama menjadi Karyawan PT Pertamina (Persero).
            </div>
            <h5 class="mt-30">Requirments:</h5>
            <ul class="list theme-colored">
              <li>Pria / Wanita Umur Max 24 Tahun</li>
              <li>Pendidikan S1 Jurusan Teknik Informatika</li>
              <li>Mempunyai kemampuan analisa yang baik</li>
              <li>Memiliki kemampuan dan dapat berkomunikasi dengan baik</li>
              <li>Teliti, disiplin dan bertanggungjawab serta motivasi kerja tinggi</li>
              <li>Dapat bekerja secara individu maupun dalam team</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->