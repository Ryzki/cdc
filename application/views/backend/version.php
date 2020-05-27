<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Upgrade</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Upgrade</a></li>
                            <li class="breadcrumb-item active" aria-current="page">System</li>
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
            <h3 class="mb-0">Upgrade System</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <?php
            $current = $version['version'];
            $this->scm->version();
            ?>
            <div class="row alert alert-dark mx-2">
                <div class="col-md-10">
                    <div class="" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Upgrade System : </strong> Terdapat versi baru 1.xx silahkan upgrade sistem anda
                    </div>

                </div>

                <div class="col-md-2">
                    <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" type="button" style="color:white;"> <span class="btn-inner--icon"><i class="fas fa-wrench"></i></span>
                        <span class="btn-inner--text">Upgrade</span></a>
                </div>
            </div>

        </div>
    </div>