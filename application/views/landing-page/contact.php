<!-- Start main-content -->


<!-- Divider: Contact -->
<section class="divider">
  <div class="container">
    <div class="row pt-30">
      <div class="col-md-4">
        <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/cowok2.jpg" alt="">
      </div>
      <div class="col-md-4">
        <h3 class="line-bottom mt-0 mb-30">Hubungi Kami</h3>
        <p class="lead">Pusat Pengembangan Karir Unikama berkomitmen untuk terus mendedikasikan lembaga demi kemajuan seluruh almamater pendidikan dan seluruh mitra perusahaan.</p>
        <p>Untuk infromasi lebih lanjut silahkan hubungi kami di informasi bawah ini, atau anda dapat langsung menghubungi kami melalui form disamping.</p>
        <ul class="list angle-double-right">
          <li><strong>Phone:</strong> (+62)341-801488</li>
          <li><strong>Email:</strong> email@unikama.ac.id</li>
          <li><strong>Skype:</strong> Unikama</li>
          <li><strong>Alamat:</strong> Jl. S.Supriadi No.48 Malang Jawa Timur, Indonesia</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3 class="mt-0 mb-10 mt-sm-30">Kirim Pesan:</h3>
        <!-- Contact Form -->
        <form id="contact_form" name="contact_form" class="" action="" method="post">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama <small>*</small></label>
                <input name="form_name" class="form-control" type="text" placeholder="Masukan nama" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Email <small>*</small></label>
                <input name="form_email" class="form-control required email" type="email" placeholder="Masukan Email">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Judul <small>*</small></label>
                <input name="form_subject" class="form-control required" type="text" placeholder="Masukan Judul">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Phone</label>
                <input name="form_phone" class="form-control" type="text" placeholder="Nomor Telepon">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Pesan</label>
            <textarea name="form_message" class="form-control required" rows="5" placeholder="Tulis pesan disini"></textarea>
          </div>
          <div class="form-group">
            <input name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Kirim pesan</button>
            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
          </div>
        </form>

        <!-- Contact Form Validation-->
        <script type="text/javascript">
          $("#contact_form").validate({
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
        </script>
      </div>
    </div>
  </div>
</section>

<!-- Divider: Google Map -->
<section>
  <div class="container-fluid pt-0 pb-0">
    <div class="row">

      <!-- Google Map HTML Codes -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.923344331342!2d112.61793221425577!3d-8.006842182103439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789d55fbd71693%3A0x8dbd37f286b57bff!2sUniversity%20Kanjuruhan%20Malang!5e0!3m2!1sen!2sid!4v1584188987616!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
  </div>
</section>
</div>
<!-- end main-content -->