  <!-- Start main-content -->
  <div class="main-content">

      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x855">
          <div class="container pt-10 pb-10">
              <!-- Section Content -->
              <div class="section-content">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          <h2 class="title">UNIKAMA Tracer Study</h2>
                          <!-- <ol class="breadcrumb text-center text-black mt-10">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li class="active text-theme-colored">Page Title</li>
                          </ol> -->
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Section: Job Apply Form -->
      <section class="divider">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-push-2">
                      <div class="border-1px p-30 mb-0">
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 1 of 18</h3>
                          <hr>
                          <p>Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan di program studi anda ?</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask1') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Perkuliahan <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPerkuliahan" id="rbPerkuliahan1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPerkuliahan" id="rbPerkuliahan2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPerkuliahan" id="rbPerkuliahan3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPerkuliahan" id="rbPerkuliahan4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPerkuliahan" id="rbPerkuliahan5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Demonstrasi <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDemonstrasi" id="rbDemonstrasi1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDemonstrasi" id="rbDemonstrasi2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDemonstrasi" id="rbDemonstrasi3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDemonstrasi" id="rbDemonstrasi4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDemonstrasi" id="rbDemonstrasi5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Partisipasi dalam proyek riset <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPartisipasi" id="rbPartisipasi1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPartisipasi" id="rbPartisipasi2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPartisipasi" id="rbPartisipasi3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPartisipasi" id="rbPartisipasi4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPartisipasi" id="rbPartisipasi5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Magang <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opMagang" id="rbMagang1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opMagang" id="rbMagang2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opMagang" id="rbMagang3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opMagang" id="rbMagang4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opMagang" id="rbMagang5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Praktikum <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPraktikum" id="rbPraktikum1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPraktikum" id="rbPraktikum2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPraktikum" id="rbPraktikum3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPraktikum" id="rbPraktikum4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opPraktikum" id="rbPraktikum5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Kerja Lapangan <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opKerjaLapangan" id="rbKerjaLapangan1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opKerjaLapangan" id="rbKerjaLapangan2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opKerjaLapangan" id="rbKerjaLapangan3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opKerjaLapangan" id="rbKerjaLapangan4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opKerjaLapangan" id="rbKerjaLapangan5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <label>Diskusi <small>*</small> <?= form_error('opPerkuliahan', '<small class="text-danger"><i>', '</i></small>') ?></label>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDiskusi" id="rbDiskusi1" value="1" required>
                                                  Sangat Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDiskusi" id="rbDiskusi2" value="2">
                                                  Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDiskusi" id="rbDiskusi3" value="3">
                                                  Cukup Besar
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDiskusi" id="rbDiskusi4" value="4">
                                                  Kurang
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opDiskusi" id="rbDiskusi5" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Selanjutnya</button>
                              </div>
                          </form>
                          <!-- Job Form Validation-->
                          <!-- <script type="text/javascript">
                              $("#job_apply_form").validate({
                                  submitHandler: function(form) {
                                      var form_btn = $(form).find('button[type="submit"]');
                                      var form_result_div = '#form-result';
                                      $(form_result_div).remove();
                                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                      var form_btn_old_msg = form_btn.html();
                                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                      $(form).ajaxSubmit({
                                          dataType: 'json',
                                          success: function(data) {
                                              if (data.status === 'true') {
                                                  $(form).find('.form-control').val('');
                                              }
                                              form_btn.prop('disabled', false).html(form_btn_old_msg);
                                              $(form_result_div).html(data.message).fadeIn('slow');
                                              setTimeout(function() {
                                                  $(form_result_div).fadeOut('slow')
                                              }, 6000);
                                          }
                                      });
                                  }
                              });
                          </script> -->
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->