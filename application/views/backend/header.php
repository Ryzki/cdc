<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PPK | Pusat Pengembangan Karir</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets_backend') ?>/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"> -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/css/font.google.css" type="text/css">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/css/argon.min5438.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/quill/dist/quill.core.css">
    <link rel="stylesheet" href="<?= base_url('assets_backend') ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?= base_url('assets_backend') ?>/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Tinymce -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('assets_backend') ?>/tinymce/js/tinymce/tinymce.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script>
        tinymce.init({
            selector: '#textEditor',
            plugins: 'link lists image advlist fullscreen media code table emoticons textcolor codesample hr preview mediaGallery',
            menubar: false,
            toolbar: [
                'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | image media link',
                ' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code | fullscreen | mediaGallery',
            ],
        });
    </script>
</head>