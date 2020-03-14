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
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Melalui iklan di koran / majalah, brosur
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Pergi ke bursa / pameran kerja
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Mencari lewat internet / iklan online / milis
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Dihubungi oleh perusahaan
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Menghubungi Kemenakertrans
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Menghubungi agen tenaga kerja komersial/swasta
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Menghubungi kantor kemahasiswaan/hubungan alumni
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Membangun jejaring (network) sejak masih kuliah
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Melalui relasi (Misalnya dosen, orangtua, saudara, teman, dll)
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Membangun bisnis sendiri
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Melalui penempatan kerja atau magang
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Bekerja ditempat yang sama dengan tempat kerja semasa kuliah
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control" name="input" placeholder="jika ada lainnya sebutkan">
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
                                  $("#select-all-teammembers").click(function() {
                                      var checkBoxes = $("input[name=recipients\\[\\]]");
                                      checkBoxes.prop("checked", !checkBoxes.prop("checked"));
                                  });
                              });
                          </script>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->