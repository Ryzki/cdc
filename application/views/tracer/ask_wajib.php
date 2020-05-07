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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 1</h3>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask4') ?>" method="post" enctype="multipart/form-data">

                              <hr>
                              <p><b>Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <hr>
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f501" id="rbCariKerja1" value="1" required>
                                                  Kira-kira <input id="input1" name="f502" type="number" style="width: 54px;"> bulan sebelum lulus
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f501" id="rbCariKerja2" value="2">
                                                  Kira-kira <input id="input2" name="f503" type="number" style="width: 54px;"> bulan setelah lulus
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <hr>
                              <p><b>Sebutkan sumber dana dalam pembiayaan kuliah ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja1" value="1" required>
                                                  Biaya Sendiri/Keluarga
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="2">
                                                  Beasiswa ADIK
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="3">
                                                  Beasiswa BIDIKMISI
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="4">
                                                  Beasiswa PPA
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="5">
                                                  Beasiswa AFIRMASI
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="6">
                                                  Beasiswa Perusahaan/Swasta
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1201" id="rbCariKerja2" value="7">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control input-lainnya" name="f1202" placeholder="jika ada lainnya sebutkan" style="display: none;">
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <hr>
                              <p><b>Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha) ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f8" id="rbCariKerja1" value="1" required>
                                                  Ya
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f8" id="rbCariKerja2" value="2">
                                                  Tidak
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <hr>
                              <p><b>Sebutkan sumber dana dalam pembiayaan kuliah ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f14" id="rbCariKerja1" value="1" required>
                                                  Sangat Erat
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f14" id="rbCariKerja2" value="2">
                                                  Erat
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f14" id="rbCariKerja2" value="3">
                                                  Cukup Erat
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f14" id="rbCariKerja2" value="4">
                                                  Kurang Erat
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f14" id="rbCariKerja2" value="5">
                                                  Tidak Sama Sekali
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <hr>
                              <p><b>Tingkat Pendidikan apa yang paling tepat / sesuai untuk pekerjaan anda saat ini ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f15" id="rbCariKerja1" value="1" required>
                                                  Setingkat lebih tinggi
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f15" id="rbCariKerja2" value="2">
                                                  Tingkat yang sama
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f15" id="rbCariKerja2" value="3">
                                                  Setingkat lebih rendah
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f15" id="rbCariKerja2" value="4">
                                                  Tidak perlu pendidikan tinggi
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <hr>
                              <p><b>Kira-kira berapa pendapatan anda setiap bulannya ?</b></p>
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group mt-10">
                                          <label class="control-label col-sm-12 col-md-4">Dari Pekerjaan Utama</label>
                                          <div class="col-md-6 col-sm-12">
                                              <div class="input-group">
                                                  <span class="input-group-addon" style="border:0px">Rp.</span>
                                                  <input type="number" class="form-control text-right" name="f1301" placeholder="isi dengan angka" required>
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
                                                  <input type="number" class="form-control text-right" name="f1302" placeholder="isi dengan angka" required>
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
                                                  <input type="number" class="form-control text-right" name="f1303" value="<?= set_value("f1303") ?>" placeholder="isi dengan angka" required>
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