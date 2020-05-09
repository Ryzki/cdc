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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 9</h3>
                          <hr>
                          <?= $this->session->flashdata('message') ?>
                          <p>Bagaimana anda menggambarkan situasi anda saat ini? Jawaban bisa lebih dari satu</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask9') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f901">
                                                  Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="2" name="f902">
                                                  Saya menikah
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="3" name="f903">
                                                  Saya sibuk dengan keluarga dan anak-anak
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="4" name="f904">
                                                  Saya sekarang sedang mencari pekerjaan
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="5" name="f905" id="check-lainnya">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control input-lainnya" name="f906" placeholder="jika ada lainnya sebutkan" style="display: none;">
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
                          <script type="text/javascript">
                              $(document).ready(function() {
                                  $("#check-lainnya").change(function() {
                                      $(".input-lainnya").toggle(this.checked);
                                  }).change();
                              });
                          </script>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->