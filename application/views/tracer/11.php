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
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Question 11 of 18</h3>
                          <hr>
                          <p>Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang ?</p>
                          <form id="tracer_question1" name="tracer_question1" action="<?= base_url('tracer/ask11') ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <?= form_error('opCariKerja', '<label><small class="text-danger"><i>', '</i></small></label>') ?>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1101" id="rbCariKerja1" value="1" required>
                                                  Instansi pemerintah (termasuk BUMN)
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1101" id="rbCariKerja2" value="2">
                                                  Organisasi non-profit/Lembaga Swadaya Masyarakat
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1101" id="rbCariKerja2" value="3">
                                                  Perusahaan swasta
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1101" id="rbCariKerja2" value="4">
                                                  Wiraswasta/perusahaan sendiri
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="f1101" id="rbCariKerja2" value="5">
                                                  Lainnya
                                              </label>
                                          </div>
                                          <div class="form-line">
                                              <input type="text" class="form-control input-lainnya" name="f1102" placeholder="jika ada lainnya sebutkan" style="display: none;">
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