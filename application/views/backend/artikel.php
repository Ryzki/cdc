<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Buat Artikel</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Area</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Artikel</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 mt-4">
                        <?php echo form_open_multipart('backend/upload/artikel_gambar'); ?>
                        <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Media Gallery : </strong> Upload gambar yang ingin ditampilkan di dalam Artikel.
                        </div>
                        <div class="form-group">
                            <label>Media Gallery</label>
                            <input type="file" class="form-control" id="customFileLang" lang="en" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <hr>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 mt-4">
                        <form action="tambahArtikel" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="mt-4">Isi Artikel</label>
                                <textarea name="konten" id="textEditor" placeholder="Masukan konten disini..." cols="80" rows="15">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Media Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-row">
                        <?php
                        $folder = 'images/';
                        $scandir = scandir($folder);

                        foreach ($scandir as $file) {
                            if (!in_array($file, ['.', '..'])) {
                                $filePath = $folder . $file;
                                if (is_file($filePath) && preg_match('/^.*\.(jpg|jpeg|png|bmp)$/', $file)) {
                                    print '<div class="col-2"><img class="imageSelect rounded img-fluid" src="' . base_url($filePath) . '" alt="no-img"></div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>