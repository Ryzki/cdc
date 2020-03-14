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
          <div class="container-fluid pt-60">
              <div class="row">
                  <div class="col-md-8 col-md-push-2">
                      <div class="border-1px p-30 mb-0">
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 3 of 18</h3>
                          <hr>
                          <p>Bagaimana anda mencari pekerjaan tersebut ? Jawaban bisa lebih dari satu</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask3') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                      <div class="input-group">

                                          <div class="demo-checkbox">
                                              <input type="checkbox" name="f401" id="md_checkbox_21" value="1" class="filled-in chk-col-red" />
                                              <label for="md_checkbox_21">Melalui iklan di koran / majalah, brosur</label><br />
                                              <input type="checkbox" name="f402" id="md_checkbox_22" value="1" class="filled-in chk-col-pink" />
                                              <label for="md_checkbox_22">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</label><br />
                                              <input type="checkbox" name="f403" id="md_checkbox_23" value="1" class="filled-in chk-col-purple" />
                                              <label for="md_checkbox_23">Pergi ke bursa / pameran kerja</label><br />
                                              <input type="checkbox" name="f404" id="md_checkbox_24" value="1" class="filled-in chk-col-deep-purple" />
                                              <label for="md_checkbox_24">Mencari lewat internet / iklan online / milis</label><br />
                                              <input type="checkbox" name="f405" id="md_checkbox_25" value="1" class="filled-in chk-col-indigo" />
                                              <label for="md_checkbox_25">Dihubungi oleh perusahaan</label><br />
                                              <input type="checkbox" name="f406" id="md_checkbox_26" value="1" class="filled-in chk-col-blue" />
                                              <label for="md_checkbox_26">Menghubungi Kemenakertrans</label><br />
                                              <input type="checkbox" name="f407" id="md_checkbox_27" value="1" class="filled-in chk-col-light-blue" />
                                              <label for="md_checkbox_27">Menghubungi agen tenaga kerja komersial/swasta</label><br />
                                              <input type="checkbox" name="f408" id="md_checkbox_28" value="1" class="filled-in chk-col-cyan" />
                                              <label for="md_checkbox_28">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</label><br />
                                              <input type="checkbox" name="f409" id="md_checkbox_29" value="1" class="filled-in chk-col-teal" />
                                              <label for="md_checkbox_29">Menghubungi kantor kemahasiswaan/hubungan alumni</label><br />
                                              <input type="checkbox" name="f410" id="md_checkbox_30" value="1" class="filled-in chk-col-green" />
                                              <label for="md_checkbox_30">Membangun jejaring (network) sejak masih kuliah</label><br />
                                              <input type="checkbox" name="f411" id="md_checkbox_31" value="1" class="filled-in chk-col-light-green" />
                                              <label for="md_checkbox_31">Melalui relasi (Misalnya dosen, orangtua, saudara, teman, dll)</label><br />
                                              <input type="checkbox" name="f412" id="md_checkbox_32" value="1" class="filled-in chk-col-lime" />
                                              <label for="md_checkbox_32">Membangun bisnis sendiri</label><br />
                                              <input type="checkbox" name="f413" id="md_checkbox_33" value="1" class="filled-in chk-col-yellow" />
                                              <label for="md_checkbox_33">Melalui penempatan kerja atau magang</label><br />
                                              <input type="checkbox" name="f414" id="md_checkbox_34" value="1" class="filled-in chk-col-amber" />
                                              <label for="md_checkbox_34">Bekerja ditempat yang sama dengan tempat kerja semasa kuliah</label><br />
                                              <input type="checkbox" name="f415" id="md_checkbox_35" value="1" class="filled-in chk-col-orange" />
                                              <label for="md_checkbox_35">Lainnya</label><br />
                                              <input type="checkbox" name="f416" id="md_checkbox_36" value="1" class="filled-in chk-col-deep-orange" />
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="input" placeholder="jika ada lainnya sebutkan">
                                              </div>

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