<!-- <?php
  $cek    = $user->row();
  $id_user = $cek->id_user;
  $nama    = $cek->nama_lengkap;
  $level   = $cek->level;
  $tgl = date('m-Y');
?> -->

    <?php
    echo $this->session->flashdata('msg');
    ?>
<!-- Main content -->
<div class="content-wrapper" style="padding: 0;">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body dashboard-tabs p-0" style="margin: 0; padding: 0;">

                <!-- Basic datatable -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h5 class="panel-title"> Data Verifikasi</h5>
                    <hr style="margin:0px;">
                    <div class="heading-elements">
                      <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                      </ul>
                    </div>
                              <br>
                              <a href="panel_admin/edit_materi" class="btn btn-primary">Edit Materi & Jadwal Ujian</a>
                              <div class="col-md-3" style="float:right;margin-right:25px;">
                                <div class="input-group">
                                  <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                                  <select class="form-control" name="thn" onchange="thn()">
                                    <?php for ($i=date('Y'); $i >=2018 ; $i--) {?>
                                      <option value="<?php echo $i; ?>" <?php if($v_thn==$i){echo "selected";} ?>>Tahun <?php echo $i; ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>

                  </div>
                  <div class="table-responsive">
                  <table class="table datatable-basic table-bordered" width="100%">
                    <thead>
                      <tr>
                        <th width="30px;">No.</th>
                        <th>No. Pendaftaran</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Status Verifikasi</th>
                        <th class="text-center" width="130">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($v_siswa->result() as $baris) {?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $baris->no_pendaftaran; ?></td>
                            <td><?php echo $baris->nis; ?></td>
                            <td><?php echo $baris->nisn; ?></td>
                            <td><?php echo $baris->nik; ?></td>
                            <td><?php echo $baris->nama_lengkap; ?></td>
                            <td align="center">
                              <?php if ($baris->status_verifikasi == 1) {?>
                                <label class="label label-success">Terverifikasi</label>
                              <?php }else{ ?>
                                <label class="label label-warning">Belum diVerifikasi</label>
                              <?php } ?>
                            </td>
                            <td align="center">
                              <a href="panel_admin/verifikasi_cetak/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-default btn-xs" title="Cetak Verifikasi" target="_blank"><i class="icon-printer2"></i></a>
                              <?php if ($baris->status_verifikasi == 0) {?>
                                <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-info btn-xs" title="Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark4"></i></a>
                              <?php }else{ ?>
                                <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs" title="Batal Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i></a>
                              <?php } ?>
                            </td>
                          </tr>
                        <?php
                        } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
                <!-- /basic datatable -->
              </div>
            </div>
          </div>
        </div>
    <!-- /dashboard content -->

<script type="text/javascript">
  function thn()
  {
    var thn = $('[name="thn"]').val();
      window.location = "panel_admin/verifikasi/thn/"+thn;
  }

  $('[name="thn"]').select2({
      placeholder: "- Tahun -"
  });

</script>
