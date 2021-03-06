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
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-8 col-md-push-2">
                      <div class="border-1px p-30 mb-0">
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 2</h3>
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
                                                  <input type="radio" name="f301" id="rbCariKerja1" class="rbCariKerja" value="1" required>
                                                  Kira-kira <input id="input1" name="f302" type="number" style="width: 54px;"> bulan sebelum lulus
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f301" id="rbCariKerja2" class="rbCariKerja" value="2">
                                                  Kira-kira <input id="input2" name="f303" type="number" style="width: 54px;"> bulan setelah lulus
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f301" id="rbCariKerja3" class="rbCariKerja" value="3">
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
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->

  <script>
      $(document).ready(function() {
          $("#input1").hide();
          $("#input2").hide();
          $(".rbCariKerja").change(function() {
              //   alert("aaa");
              $("#input1, #input2").hide()
              if ($(this).val() == "1") {
                  $("#input1").show();
              } else if ($(this).val() == "2") {
                  $("#input2").show();
              } else {
                  $("#input1, #input2").hide()
              }
          });
      });
  </script>