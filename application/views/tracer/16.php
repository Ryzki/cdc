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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 16 of 18</h3>
                          <hr>
                          <p>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask16') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan anda
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Saya belum mendapatkan pekerjaan yang lebih sesuai
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Di pekerjaan ini saya memeroleh prospek karir yang baik
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Saya dapat memeroleh pendapatan yang lebih tinggi dipekerjaan ini
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pekerjaan saya saat ini lebih aman/terjamin/secure
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pekerjaan saya saat ini lebih menarik
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang flesibel dll.
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pekerjaan saya saati ini dapat lebih menjamin kebutuhan keluarga saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pada awal meneliti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="" id="check-lainnya">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control input-lainnya" name="input" placeholder="jika ada lainnya sebutkan" style="display: none;">
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