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
                  <div class="col-md-10 col-md-push-1">
                      <div class="border-1px p-30 mb-0">
                          <h3 class="text-theme-colored mt-0 pt-5 text-center">Rektor Rektor Universitas Kanjuruhan Malang</h3>
                          <hr>
                          <h4>Sambutan</h4>
                          <p class="text-justify">Alumni Universitas Kanjuruhan Malang (UNIKAMA) yang kami banggakan, Apa kabar? semoga selalu dalam lindungan Tuhan Yang Maha Esa dan diberkahi segala aktivitasnya. Mohon maaf untuk mengganggu aktivitas dan waktunya beberapa saat. Saat ini UNIKAMA melalui Career Development Center (CDC) sedang terus meningkatkan hubungan dengan para Alumni, termasuk melalui Studi Penelusuran Alumni (Tracer Study) layaknya yang dilakukan universitas-universitas terkemuka di dunia. UNIKAMA dapat menjadi perguruan tinggi yang unggul dan mencapai status world class university tentunya dengan dukungan para Alumni yang kami banggakan. Oleh karenanya, diharapkan kesediaan para alumni UNIKAMA untuk bekerjasama mengisi kuesioner Tracer Study ini. Kuesioner ini ditujukan untuk alumni Program S1 yang lulus mulai tahun 2015. Studi ini bertujuan untuk mengetahui masa transisi dari dunia kampus menuju dunia kerja dan menganalisis tingkat kompetensi yang diperoleh pada saat pendidikan dan aplikasinya di dunia kerja. Studi ini juga akan menggali informasi terkait dengan proses dan kondisi pembelajaran di UNIKAMA dan akan digunakan untuk memberikan feedback bagi penyempurnaan kurikulum program studi di UNIKAMA. Hasil dari studi ini akan menjadi data berharga bagi UNIKAMA yang akan digunakan sebagai masukan untuk berbagai upaya dan program pengembangan UNIKAMA, termasuk diantaranya akreditasi universitas dan program studi. UNIKAMA dapat menjamin kerahasiaan informasi yang diberikan. Atas perhatian dan partisipasinya disampaikan terima kasih. Salam dan doa kami dari Almamater untuk kesuksesan Anda semua para Alumni UNIKAMA.<br><br>



                              Mengetahui,<br>
                              Rektor Universitas Kanjuruhan Malang<br>
                              <strong>Dr. Pieter Sahertian. M.Si</strong><br>
                              NIK. 298601102

                          </p>
                          <div class="form-group">
                              <!-- <input name="form_botcheck" class="form-control" type="check" value="" /> -->
                              <a href="<?= base_url('tracer/ask_wajib') ?>" type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Selanjutnya</a>
                          </div>
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