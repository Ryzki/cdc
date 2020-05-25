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
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> -->
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
                        <form action="<?= base_url('backend/dashboard/editArtikelAksi') ?>" method="POST">
                            <?php
                            foreach ($artikel as $ar) {
                            ?>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?= $ar->judul ?>">
                                    <input type="hidden" name="id" class="form-control" value="<?= $ar->id ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mt-4">Isi Artikel</label>
                                    <textarea name="konten" id="textEditor" cols="80" rows="15">
                                        <?= $ar->konten ?>
                                </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            <?php
                            }
                            ?>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>