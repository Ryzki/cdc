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
                          <?= $this->session->flashdata('message') ?>
                          <p>Bagaimana anda mencari pekerjaan tersebut ? Jawaban bisa lebih dari satu</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask3') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f401" id="cb_1">
                                                  Melalui iklan di koran / majalah, brosur
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f402" id="cb_2">
                                                  Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f403" id="cb_3">
                                                  Pergi ke bursa / pameran kerja
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f404" id="cb_4">
                                                  Mencari lewat internet / iklan online / milis
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f405" id="cb_5">
                                                  Dihubungi oleh perusahaan
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f406" id="cb_6">
                                                  Menghubungi Kemenakertrans
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f407" id="cb_7">
                                                  Menghubungi agen tenaga kerja komersial/swasta
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f408" id="cb_8">
                                                  Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f409" id="cb_9">
                                                  Menghubungi kantor kemahasiswaan/hubungan alumni
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f410" id="cb_10">
                                                  Membangun jejaring (network) sejak masih kuliah
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f411" id="cb_11">
                                                  Melalui relasi (Misalnya dosen, orangtua, saudara, teman, dll)
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f412" id="cb_12">
                                                  Membangun bisnis sendiri
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f413" id="cb_13">
                                                  Melalui penempatan kerja atau magang
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f414" id="cb_14">
                                                  Bekerja ditempat yang sama dengan tempat kerja semasa kuliah
                                              </label>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" name="f415" id="cb_15">
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
                                  <button id="btn-submit" type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Selanjutnya</button>
                              </div>
                          </form>
                          <!-- Job Form Validation-->
                          <script type="text/javascript">
                              $(document).ready(function() {
                                  $("#check-lainnya").change(function() {
                                      $(".input-lainnya").toggle(this.checked);
                                  }).change();
                              });
                              //   $("#btn-submit").on("click", function() {
                              //     //   console.log("aaa");
                              //       if ($("#cb_1").val() !== '1' && $("#cb_2").val() !== '1' && $("#cb_3").val() !== '1' && $("#cb_4").val() !== '1' && $("#cb_5").val() !== '1' && $("#cb_6").val() !== '1' && $("#cb_7").val() !== '1' && $("#cb_8").val() !== '1' && $("#cb_9").val() !== '1' && $("#cb_10").val() !== '1' && $("#cb_11").val() !== '1' && $("#cb_12").val() !== '1' && $("#cb_13").val() !== '1' && $("#cb_14").val() !== '1' && $("#cb_15").val() !== '1' && $("#input").val() == '') {
                              //           alert("Data Tidak Boleh Kosong !!");
                              //       } else {
                              //           //   $("#tracer_question1").submit();
                              //       }
                              //   })
                          </script>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->