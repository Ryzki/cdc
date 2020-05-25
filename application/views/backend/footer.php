<!-- Footer -->
<?php
foreach ($footer as $ft) {
?>
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="#" class="font-weight-bold ml-1"><?= $ft->footer ?></a>
                </div>
            </div>
        </div>
    </footer>
<?php
}
?>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url('assets_backend') ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url('assets_backend') ?>/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url('assets_backend') ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets_backend') ?>/js/argon.min5438.js?v=1.2.0"></script>
<!-- Demo JS - remove this in your project -->
<script src="<?= base_url('assets_backend') ?>/js/demo.min.js"></script>
<!-- CKeditor -->
<!-- <script src="<?= base_url('assets_backend') ?>/ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets_backend') ?>/js/admin.js"></script>
<script src="<?= base_url('assets_backend') ?>/js/editors.js"></script> -->
<!-- Tinymce -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<script>
    $('.imageSelect').click(function() {
        var ed = tinymce.activeEditor;
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" alt="no-img" style="border-radius:.25rem;">';

        ed.selection.setContent(img);
        $('#exampleModalCenter').modal('hide');
    });
</script>

</body>


</html>