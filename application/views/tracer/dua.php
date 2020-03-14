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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 2 of 18</h3>
                          <hr>
                          <p>Kapan anda mulai mencari pekerjaan ? Mohon pekerjaan sambilan tidak dimasukkan</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask2') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opCariKerja" id="rbCariKerja1" value="1">
                                                  Kira-kira bulan sebelum lulus
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opCariKerja" id="rbCariKerja2" value="2">
                                                  Kira-kira bulan setelah lulus
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="opCariKerja" id="rbCariKerja3" value="3">
                                                  Saya tidak mencari kerja
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