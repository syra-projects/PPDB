<?php
  $cek    = $user->row();
  $id_user = $cek->id_user;
  $nama    = $cek->nama_lengkap;
  $level   = $cek->level;
  $tgl = date('m-Y');
?>
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
              <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">
                  <h2>Selamat Datang,</h2>
                  <p class="mb-md-0"><?php echo ucwords($nama); ?></p>
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
                <ul class="nav nav-tabs px-4" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                  </li>
                </ul>
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-multiple-plus mr-3 icon-lg text-warning"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <?php $thn_ini = date('Y'); ?>
                          <small class="mb-1 text-muted">Calon Siswa Mendaftar Tahun <?php echo $thn_ini; ?></small>
                          <h5 class="mr-2 mb-0">
                            <?php
                              $this->db->like('tgl_siswa', $thn_ini, 'after');
                              echo number_format($this->db->get('tbl_siswa')->num_rows(),0,",","."); ?>
                          </h5>
                        </div>
                      </div>
                      <div class="d-flex py-4 border-md-right flex-grow-1 align-items-center justify-content-start px-5 py-3 item">
                        <i class="mdi mdi-account-check  mr-3 icon-lg text-primary"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted">
                              Calon Siswa yang Lulus PPDB Tahun <?php echo $thn_ini; ?>
                          </small>
                          <h5 class="mr-2 mb-0">
                            <?php
                              $this->db->like('tgl_siswa', $thn_ini, 'after');
                              echo number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='lulus'")->num_rows(),0,",",".");  ?>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="proBanner">
          <div class="col-md-12 grid-margin">
            <div class="card bg-gradient-primary border-0">
              <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                  <div>
                    <form action="" method="post" class="d-flex align-items-center justify-content-center">
                      <button type="submit" name="btnnonaktif" class="btn btn-outline-light mr-2 bg-gradient-danger border-0" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Tutup Pendaftaran PPDB Online!</button>
                      <p class="mb-0 text-white font-weight-medium"><strong>Status Pendaftaran PPDB Online</strong> masih <span style="cursor: pointer; color: #fbaaa2;">Dibuka</span>. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.</p>
                    </form>
                  </div>
                <?php }else{ ?>
                  <div>
                    <form action="" method="post" class="d-flex align-items-center justify-content-center">
                      <button type="submit" name="btnaktif" class="btn btn-outline-light mr-2 bg-gradient-warning border-0" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Buka Pendaftaran PPDB Online!</button>
                      <p class="mb-0 text-white font-weight-medium"><strong>Status Pendaftaran PPDB Online</strong> masih <span style="cursor: pointer;" class="text-warning">Ditutup</span>. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.</p>
                    </form>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              <?php $this->load->view('admin/statistik/pendaftar'); ?>
              </div>
            </div>
          </div>
        </div>
