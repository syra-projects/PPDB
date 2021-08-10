<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;

  $tgl = date('m-Y');
?>

        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
              <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">
                  <h2>Selamat Datang</h2>
                  <p class="mb-md-0"> <?php echo ucwords($nama); ?></p>
                </div>
                <div class="d-flex">
                  <i class="mdi mdi-home text-muted hover-cursor"></i>
                  <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body dashboard-tabs p-0">
                <ul class="nav nav-tabs px-4" role="tablist
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <a href="panel_siswa/pengumuman"><small class="mb-1 text-muted">Pengumuman</small></a>
                        </div>
                      </div>
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <a href="panel_siswa/biodata"><small class="mb-1 text-muted">Biodata Pendaftaran</small></a>
                        </div>
                      </div>
                      <div class="d-flex py-4 border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-check  mr-3 icon-lg text-primary"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <a href="panel_siswa/cetak" target="_blank"><small class="mb-1 text-muted">Cetak Bukti Pendaftaran</small></a>
                        </div>
                      </div>
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <a href="panel_siswa/rekap_nilai" target="_blank"><small class="mb-1 text-muted">Rekap Nilai</small></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>