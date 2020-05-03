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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 13 of 18</h3>
                          <hr>
                          <p>Kira-kira berapa pendapatan anda setiap bulannya ?</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask13') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group mt-10">
                                          <label class="control-label col-sm-12 col-md-4">Dari Pekerjaan Utama</label>
                                          <div class="col-md-6 col-sm-12">
                                              <div class="input-group">
                                                  <span class="input-group-addon" style="border:0px">Rp.</span>
                                                  <input type="text" class="form-control text-right" placeholder="isi dengan angka">
                                                  <span class="input-group-addon" style="border:0px">.00</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group mt-10">
                                          <label class="control-label col-sm-12 col-md-4">Dari Lembur dan Tips</label>
                                          <div class="col-md-6 col-sm-12">
                                              <div class="input-group">
                                                  <span class="input-group-addon" style="border:0px">Rp.</span>
                                                  <input type="text" class="form-control text-right" placeholder="isi dengan angka">
                                                  <span class="input-group-addon" style="border:0px">.00</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group mt-10">
                                          <label class="control-label col-sm-12 col-md-4">Dari Pekerjaan Lainnya</label>
                                          <div class="col-md-6 col-sm-12">
                                              <div class="input-group">
                                                  <span class="input-group-addon" style="border:0px">Rp.</span>
                                                  <input type="text" class="form-control text-right" placeholder="isi dengan angka">
                                                  <span class="input-group-addon" style="border:0px">.00</span>
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
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->

  <script>
      $(document).ready(function() {
          $("input:radio[name='opCariKerja']").change(function() {
              $(".input-lainnya").hide()
              if ($(this).val() == "5") {
                  $(".input-lainnya").show();
              }
          });
      });
  </script>