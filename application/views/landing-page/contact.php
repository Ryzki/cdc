<!-- Start main-content -->

<?php
foreach ($contact as $ct) {
?>
  <!-- Divider: Contact -->
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <div class="col-md-4">
          <img class="img-fullwidth" src="<?= base_url('assets/') ?>images/contact/<?= $ct->gambar ?>" alt="contact us">
        </div>
        <div class="col-md-4">
          <h3 class="line-bottom mt-0 mb-30">Hubungi Kami</h3>
          <p class="lead"><?= $ct->text1 ?></p>
          <p><?= $ct->text2 ?></p>
          <ul class="list angle-double-right">
            <li><strong>Phone:</strong> <?= $ct->phone ?></li>
            <li><strong>Email:</strong> <?= $ct->email ?></li>
            <li><strong>Alamat:</strong> <?= $ct->alamat ?></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="mt-0 mb-10 mt-sm-30">Kirim Pesan:</h3>
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input name="form_name" class="form-control" type="text" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email</label>
                  <input name="form_email" class="form-control required email" type="email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="form_subject" class="form-control required" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input name="form_phone" class="form-control" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Pesan</label>
              <textarea name="form_message" class="form-control required" rows="5"></textarea>
            </div>
            <div class=" form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Kirim pesan</button>
              <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
            </div>
          </form>
        <?php
      }
        ?>

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
        <iframe src="<?= $ct->map ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>
    </div>
  </section>
  </div>
  <!-- end main-content -->