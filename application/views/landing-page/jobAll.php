<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-5" data-bg-img="<?= base_url('assets/') ?>images/slide/h.jpg">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Lowongan Kerja</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Schedule -->
  <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
    <div class="container pt-80 pb-60">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped table-schedule">
              <thead>
                <tr class="bg-theme-colored">
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Posisi</th>
                  <th>Batas Lamaran</th>
                  <th>Tanggal Terbit</th>
                  <th>Apply</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($jobs as $job) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $job->nama_pt ?></td>
                    <td><?= $job->position ?></td>
                    <td><?= date('j F, Y', strtotime($job->due_date)) ?></td>
                    <td><?= date('j F, Y', strtotime(substr($job->date_posted, 0, 10))) ?></td>
                    <td><a href="<?= base_url('landing/job_detil?seq=' . $job->id) ?>" type="button" class="btn btn-success btn-sm btn-flat">More</a></td>
                  </tr>
                <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->