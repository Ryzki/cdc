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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 11</h3>
                          <hr>
                          <?= $this->session->flashdata('message') ?>
                          <p>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask16') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f1601">
                                                  Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan anda
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="2" name="f1602">
                                                  Saya belum mendapatkan pekerjaan yang lebih sesuai
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="3" name="f1603">
                                                  Di pekerjaan ini saya memeroleh prospek karir yang baik
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="4" name="f1604">
                                                  Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="5" name="f1605">
                                                  Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="6" name="f1606">
                                                  Saya dapat memeroleh pendapatan yang lebih tinggi dipekerjaan ini
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="7" name="f1607">
                                                  Pekerjaan saya saat ini lebih aman/terjamin/secure
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="8" name="f1608">
                                                  Pekerjaan saya saat ini lebih menarik
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="9" name="f1609">
                                                  Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang flesibel dll.
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="10" name="f1610">
                                                  Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="11" name="f1611">
                                                  Pekerjaan saya saati ini dapat lebih menjamin kebutuhan keluarga saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="12" name="f1612">
                                                  Pada awal meneliti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="13" name="f1613" id="check-lainnya">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control input-lainnya" name="f1614" placeholder="jika ada lainnya sebutkan" style="display: none;">
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