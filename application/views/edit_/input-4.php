<div class="col-md-10 mb-2">
  <div data-aos="zoom-in">
    <div class="row">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-kuesioner-4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="card mb-2" style="padding: 8px 15px">
            <h6 class="mb-0"><strong>IV. KETERANGAN SOSIAL EKONOMI ANGGOTA KELUARGA</strong></h6>
          </div>
          
          <div class="card" style="display: block">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahKeluarga">
              <i class="bi-plus-square">&nbsp;&nbsp;</i>Tambah Anggota Keluarga
            </button>

            <div class="row m-0 mt-3 table-responsive">
              <table class="table table-bordered table-striped" width="100%">
                <thead>
                  <tr>
                    <th style="vertical-align: middle; text-align: center; width: 1%">No.</th>
                    <th style="vertical-align: middle; text-align: center; width: 4%">No. Urut Keluarga</th>
                    <th style="vertical-align: middle; text-align: center; width: 25%">NIK dan Nama Anggota Keluarga</th>
                    <th style="vertical-align: middle; text-align: center; width: 15%">Hubungan dg Kepala Keluarga</th>
                    <th style="vertical-align: middle; text-align: center; width: 5%">L/P</th>
                    <th style="vertical-align: middle; text-align: center; width: 20%">Tgl. Lahir / Umur</th>
                    <th style="vertical-align: middle; text-align: center; width: 20%">Status Perkawinan</th>
                    <th style="vertical-align: middle; text-align: center; width: 5%">Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($anggota_keluarga as $key => $data) {
                      $jenis_kelamin = $data["jenis_kelamin"] == 1 ? "L" : "P";
                  ?>
                    <tr>
                      <td class="text-center"><?php echo $key + 1 ?></td>
                      <td class="text-center"><?php echo $data["no_urut_keluarga"] ?></td>
                      <td><?php echo strtoupper($data["nama_anggota"]) ?><br>NIK : <?php echo $data["nik_anggota"] ?></td>
                      <!-- <td><?php echo $data["hubungan_rumah_tangga"] ?></td> -->
                      <td><?php echo $data["hubungan_keluarga"] ?></td>
                      <td class="text-center"><?php echo $jenis_kelamin ?></td>
                      <td><?php echo date("d-m-Y", strtotime($data["tanggal_lahir"])) ?><br>Umur : <?php echo $data["umur"] ?> th</td>
                      <td><?php echo $data["status_perkawinan"] ?></td>
                      <td>
                        <center>
                          <button type="button" class="btn btn-sm btn-info mb-1" data-bs-toggle="modal" data-bs-target="#ubahKeluarga"
                            data-id="<?php echo $data['id'] ?>"
                            data-no_urut_keluarga="<?php echo $data['no_urut_keluarga'] ?>"
                            data-nik_anggota="<?php echo $data['nik_anggota'] ?>"
                            data-nama_anggota="<?php echo $data['nama_anggota'] ?>"
                            data-hubungan_keluarga_id="<?php echo $data['hubungan_keluarga_id'] ?>"
                            data-jenis_kelamin="<?php echo $data['jenis_kelamin'] ?>"
                            data-tanggal_lahir="<?php echo $data['tanggal_lahir'] ?>"
                            data-umur="<?php echo $data['umur'] ?>"
                            data-status_perkawinan_id="<?php echo $data['status_perkawinan_id'] ?>"
                            data-status_kehamilan="<?php echo $data['status_kehamilan'] ?>"
                            data-penyakit_kronis_id="<?php echo $data['penyakit_kronis_id'] ?>"
                            data-jenis_disabilitas_id="<?php echo $data['jenis_disabilitas_id'] ?>"
                            data-apakah_perokok_id="<?php echo $data['apakah_perokok_id'] ?>"
                            data-partisipasi_sekolah_id="<?php echo $data['partisipasi_sekolah_id'] ?>"
                            data-jenjang_pendidikan_id="<?php echo $data['jenjang_pendidikan_id'] ?>"
                            data-kelas_tertinggi="<?php echo $data['kelas_tertinggi'] ?>"
                            data-ijazah_terakhir_id="<?php echo $data['ijazah_terakhir_id'] ?>"
                            data-status_bekerja="<?php echo $data['status_bekerja'] ?>"
                            data-lapangan_usaha_id="<?php echo $data['lapangan_usaha_id'] ?>"
                            data-jabatan_pekerjaan_id="<?php echo $data['jabatan_pekerjaan_id'] ?>"
                            data-status_anggota_ruta_id="<?php echo $data['status_anggota_ruta_id'] ?>"
                          ><i class="bi-pencil-square"></i></button>
                          <button type="button" class="btn btn-sm btn-danger mb-1" onclick="hapusAnggotaKeluarga(<?php echo $data['id'] ?>)"><i class="bi-trash"></i></button>
                        </center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <input id="main_id" type="hidden" value="<?php echo $main_id ?>">
            </div>

            <div class="row mt-2">
              <div class="modal-footer">
                <a href="<?= base_url() ?>input/quest/5/<?php echo $main_id ?>" class="btn btn-primary float-end"><i class="bi-clipboard-check">&nbsp;&nbsp;</i>Simpan & Lanjutkan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-2" data-aos="fade-up">
  <div class="list-group">
    <li class="list-group-item list-group-item-secondary">TAHAP PENGISIAN</li>
    <a href="<?= base_url() ?>input/quest/1" class="list-group-item list-group-item-action disabled">KUISIONER 1</a>
    <a href="<?= base_url() ?>input/quest/2" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="<?= base_url() ?>input/quest/3" class="list-group-item list-group-item-action disabled">KUISIONER 3</a>
    <a href="<?= base_url() ?>input/quest/4" class="list-group-item list-group-item-action active">KUISIONER 4</a>
    <a href="<?= base_url() ?>input/quest/5" class="list-group-item list-group-item-action disabled">KUISIONER 5</a>
    <a href="<?= base_url() ?>input/quest/6" class="list-group-item list-group-item-action disabled">KUISIONER 6</a>
  </div>

  <div class="card mt-2">
    <a href="<?= base_url() ?>" class="btn btn-outline-danger">Kembali ke Beranda</a>
  </div>
</div>

<div class="modal fade" id="tambahKeluarga" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Anggota Keluarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form id="form_data">
        <input type="hidden" name="main_id" value="<?php echo $main_id ?>">
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">No. Urut Keluarga</label>
              <div class="col-sm-4">
                <input id="no_urut_keluarga" type="number" name="no_urut_keluarga" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">NIK Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <input id="nik_anggota" type="text" name="nik_anggota" maxlength="16" class="form-control form-control-sm number">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-5 col-form-label">Nama Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-6">
                <input id="nama_anggota" type="text" name="nama_anggota" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Hubungan dengan Kepala Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="hubungan_keluarga_id" name="hubungan_keluarga_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($hubungan_keluarga as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="1">Laki - laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Umur</label>
              <div class="col-sm-4">
                <div class="input-group input-group-sm">
                  <input id="umur" type="number" name="umur" class="form-control form-control-sm" readonly>
                  <span class="input-group-text">tahun</span>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Perkawinan <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="status_perkawinan_id" name="status_perkawinan_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($status_perkawinan as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="status_kehamilan_row" class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Kehamilan</label>
              <div class="col-sm-4">
                <select id="status_kehamilan" name="status_kehamilan" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Keberadaan Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="status_anggota_ruta_id" name="status_anggota_ruta_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($status_anggota_ruta as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Penyakit Kronis / yang Mengakibatkan Pandemi</label>
              <div class="col-sm-4">
                <select id="penyakit_kronis_id" name="penyakit_kronis_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($penyakit_kronis as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Jenis Disabilitas</label>
              <div class="col-sm-4">
                <select id="jenis_disabilitas_id" name="jenis_disabilitas_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($jenis_disabilitas as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="5_tahun_keatas">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Selama Sebulan Terakhir Apakah Merokok ?</label>
              <div class="col-sm-4">
                <select id="apakah_perokok_id" name="apakah_perokok_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($apakah_perokok as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Partisipasi Sekolah <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="partisipasi_sekolah_id" name="partisipasi_sekolah_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($partisipasi_sekolah as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="bersekolah">
              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Jenjang dan Jenis Pendidikan Tertinggi yg Pernah / Sedang Diduduki</label>
                <div class="col-sm-4">
                  <select id="jenjang_pendidikan_id" name="jenjang_pendidikan_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($jenjang_pendidikan as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Kelas Tertinggi yg Pernah / Sedang Diduduki</label>
                <div class="col-sm-4">
                  <select id="kelas_tertinggi" name="kelas_tertinggi" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <option value="10">Tamat</option>
                    <?php for($i=1 ; $i <= 8 ; $i++) { ?>
                      <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Ijazah Terakhir yang Dimiliki</label>
                <div class="col-sm-4">
                  <select id="ijazah_terakhir_id" name="ijazah_terakhir_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($ijazah_terakhir as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo ((int)$data['id'] - 1).". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Bekerja / Membantu Bekerja Selama Seminggu yang Lalu <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="status_bekerja" name="status_bekerja" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div id="usaha">
              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Lapangan Usaha dari Pekerjaan Utama</label>
                <div class="col-sm-4">
                  <select id="lapangan_usaha_id" name="lapangan_usaha_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($lapangan_usaha as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Status Kedudukan dalam Pekerjaan Utama</label>
                <div class="col-sm-4">
                  <select id="jabatan_pekerjaan_id" name="jabatan_pekerjaan_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($jabatan_pekerjaan as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ubahKeluarga" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Anggota Keluarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form id="form_edit_data">
        <input type="hidden" name="main_id" value="<?php echo $main_id ?>">
        <input type="hidden" name="id">
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">No. Urut Keluarga</label>
              <div class="col-sm-4">
                <input type="number" name="no_urut_keluarga" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">NIK Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <input type="text" name="nik_anggota" maxlength="16" class="form-control form-control-sm number">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-5 col-form-label">Nama Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-6">
                <input type="text" name="nama_anggota" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Hubungan dengan Kepala Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select name="hubungan_keluarga_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($hubungan_keluarga as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="jenis_kelamin_edit" name="jenis_kelamin" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="1">Laki - laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <input id="tanggal_lahir_edit" type="date" name="tanggal_lahir" class="form-control form-control-sm">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Umur</label>
              <div class="col-sm-4">
                <div class="input-group input-group-sm">
                  <input id="umur_edit" type="number" name="umur" class="form-control form-control-sm">
                  <span class="input-group-text">tahun</span>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Perkawinan <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="status_perkawinan_id_edit" name="status_perkawinan_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($status_perkawinan as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="status_kehamilan_row_edit" class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Kehamilan</label>
              <div class="col-sm-4">
                <select name="status_kehamilan" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Status Keberadaan Anggota Keluarga <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select name="status_anggota_ruta_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($status_anggota_ruta as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Penyakit Kronis / yang Mengakibatkan Pandemi</label>
              <div class="col-sm-4">
                <select name="penyakit_kronis_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($penyakit_kronis as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Jenis Disabilitas</label>
              <div class="col-sm-4">
                <select name="jenis_disabilitas_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($jenis_disabilitas as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="5_tahun_keatas_edit">
            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Selama Sebulan Terakhir Apakah Merokok ?</label>
              <div class="col-sm-4">
                <select name="apakah_perokok_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($apakah_perokok as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Partisipasi Sekolah <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="partisipasi_sekolah_id_edit" name="partisipasi_sekolah_id" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <?php foreach($partisipasi_sekolah as $data) { ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div id="bersekolah_edit">
              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Jenjang dan Jenis Pendidikan Tertinggi yg Pernah / Sedang Diduduki</label>
                <div class="col-sm-4">
                  <select id="jenjang_pendidikan_id_edit" name="jenjang_pendidikan_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($jenjang_pendidikan as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Kelas Tertinggi yg Pernah / Sedang Diduduki</label>
                <div class="col-sm-4">
                  <select id="kelas_tertinggi_edit" name="kelas_tertinggi" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <option value="10">Tamat</option>
                    <?php for($i=1 ; $i <= 8 ; $i++) { ?>
                      <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Ijazah Terakhir yang Dimiliki</label>
                <div class="col-sm-4">
                  <select id="ijazah_terakhir_id_edit" name="ijazah_terakhir_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($ijazah_terakhir as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo ((int)$data['id'] - 1).". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-7 col-form-label">Bekerja / Membantu Bekerja Selama Seminggu yang Lalu <span class="text-danger">*</span></label>
              <div class="col-sm-4">
                <select id="status_bekerja_edit" name="status_bekerja" class="form-select form-select-sm">
                  <option disabled selected>--- Pilihan ---</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div id="usaha_edit">
              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Lapangan Usaha dari Pekerjaan Utama</label>
                <div class="col-sm-4">
                  <select id="lapangan_usaha_id_edit" name="lapangan_usaha_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($lapangan_usaha as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-7 col-form-label">Status Kedudukan dalam Pekerjaan Utama</label>
                <div class="col-sm-4">
                  <select id="jabatan_pekerjaan_id_edit" name="jabatan_pekerjaan_id" class="form-select form-select-sm">
                    <option disabled selected>--- Pilihan ---</option>
                    <?php foreach($jabatan_pekerjaan as $data) { ?>
                      <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $("#status_kehamilan_row").hide();
  $("#bersekolah").hide();

  // Get Umur
  var calculateAge = function(birthday) {
    var now = new Date();
    var past = new Date(birthday);
    var nowYear = now.getFullYear();
    var pastYear = past.getFullYear();
    var age = nowYear - pastYear;

    return age;
  };

  $("#tanggal_lahir").change(function() {
    $("#umur").val("");

    var $birthday = $("#tanggal_lahir").val();
    var umur = calculateAge($birthday);
    $("#umur").val(umur);
  });

  $("#tanggal_lahir_edit").change(function() {
    $("#umur_edit").val("");

    var $birthday = $("#tanggal_lahir_edit").val();
    var umur = calculateAge($birthday);
    $("#umur_edit").val(umur);
  });

  // Display status kehamilan
  $("#status_perkawinan_id, #tanggal_lahir, #jenis_kelamin").change(function() {
    let status_perkawinan = $("#status_perkawinan_id").val();
    let umur = $("#umur").val();
    let jenis_kelamin = $("#jenis_kelamin").val();

    if((status_perkawinan == 2 || status_perkawinan == 3 || status_perkawinan == 4) && umur > 10 && jenis_kelamin == 2){
      $("#status_kehamilan_row").show();
      $("#status_kehamilan").attr("disabled", false);
    } else {
      $("#status_kehamilan_row").hide();
      $("#status_kehamilan").attr("disabled", true);
      $("#status_kehamilan").val("");
    }
  });

  $("#status_perkawinan_id_edit, #tanggal_lahir_edit, #jenis_kelamin_edit").change(function() {
    let status_perkawinan = $("#status_perkawinan_id_edit").val();
    let umur = $("#umu_editr").val();
    let jenis_kelamin = $("#jenis_kelamin_edit").val();

    if((status_perkawinan == 2 || status_perkawinan == 3 || status_perkawinan == 4) && umur > 10 && jenis_kelamin == 2){
      $("#status_kehamilan_row_edit").show();
      $("#status_kehamilan_edit").attr("disabled", false);
    } else {
      $("#status_kehamilan_row_edit").hide();
      $("#status_kehamilan_edit").attr("disabled", true);
      $("#status_kehamilan_edit").val("");
    }
  });

  // Partisipasi sekolah
  $("#partisipasi_sekolah_id").change(function() {
    if(this.value == 1 || this.value == 2) {
      $("#bersekolah").show();
    } else {
      $("#bersekolah").hide();
    }
  });

  $("#partisipasi_sekolah_id_edit").change(function() {
    if(this.value == 1 || this.value == 2) {
      $("#bersekolah_edit").show();
    } else {
      $("#bersekolah_edit").hide();
    }
  });

  // Partisipasi sekolah
  $("#partisipasi_sekolah_id").change(function() {
    if(this.value == 1 || this.value == 2) {
      $("#bersekolah").show();
      $("#jenjang_pendidikan_id").attr("disabled", false);
      $("#kelas_tertinggi").attr("disabled", false);
      $("#ijazah_terakhir_id").attr("disabled", false);
    } else {
      $("#bersekolah").hide();
      $("#jenjang_pendidikan_id").attr("disabled", true);
      $("#kelas_tertinggi").attr("disabled", true);
      $("#ijazah_terakhir_id").attr("disabled", true);
      $("#jenjang_pendidikan_id").val("");
      $("#kelas_tertinggi").val("");
      $("#ijazah_terakhir_id").val("");
    }
  });

  $("#partisipasi_sekolah_id_edit").change(function() {
    if(this.value == 1 || this.value == 2) {
      $("#bersekolah_edit").show();
      $("#jenjang_pendidikan_id_edit").attr("disabled", false);
      $("#kelas_tertinggi_edit").attr("disabled", false);
      $("#ijazah_terakhir_id_edit").attr("disabled", false);
    } else {
      $("#bersekolah_edit").hide();
      $("#jenjang_pendidikan_id_edit").attr("disabled", true);
      $("#kelas_tertinggi_edit").attr("disabled", true);
      $("#ijazah_terakhir_id_edit").attr("disabled", true);
      $("#jenjang_pendidikan_id_edit").val("");
      $("#kelas_tertinggi_edit").val("");
      $("#ijazah_terakhir_id_edit").val("");
    }
  });

  // Status bekerja
  $("#status_bekerja").change(function() {
    if(this.value == "Ya") {
      $("#usaha").show();
      $("#lapangan_usaha_id").attr("disabled", false);
      $("#jabatan_pekerjaan_id").attr("disabled", false);
    } else {
      $("#usaha").hide();
      $("#lapangan_usaha_id").attr("disabled", true);
      $("#jabatan_pekerjaan_id").attr("disabled", true);
      $("#lapangan_usaha_id").val("");
      $("#jabatan_pekerjaan_id").val("");
    }
  });

  $("#status_bekerja_edit").change(function() {
    if(this.value == "Ya") {
      $("#usaha_edit").show();
      $("#lapangan_usaha_id_edit").attr("disabled", false);
      $("#jabatan_pekerjaan_id_edit").attr("disabled", false);
    } else {
      $("#usaha_edit").hide();
      $("#lapangan_usaha_id_edit").attr("disabled", true);
      $("#jabatan_pekerjaan_id_edit").attr("disabled", true);
      $("#lapangan_usaha_id_edit").val("");
      $("#jabatan_pekerjaan_id_edit").val("");
    }
  });

  // Simpan data anggota keluarga
  $("#form_data").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_data")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>input/input4_create",
      data: data,
      dataType: "json",
      cache       : false,
      contentType : false,
      processData : false,
    })
    .done(function (data) {
      if(data.success == true) {
        Swal.fire({
          icon: 'success',
          title: 'Data berhasil ditambahkan !',
          showConfirmButton: false,
          timer: 1000
        })

        setInterval(() => {
          window.location = "<?= base_url() ?>input/quest/4/" + data.main_id;
        }, 1200);
      } else {
        $.each(data.errors, function(index, value) {
          $.notify(value, "error");
        })
      }
    })
    .fail(function () {
      Swal.fire({
        icon: 'warning',
        title: 'Koneksi Bermasalah !',
        text: 'Tidak dapat terhubung dengan server.',
        showConfirmButton: true
      })
    });
  });

  // Edit data anggota keluarga
  $("#form_edit_data").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_edit_data")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>edit/input4_edit",
      data: data,
      dataType: "json",
      cache       : false,
      contentType : false,
      processData : false,
    })
    .done(function (data) {
      if(data.success == true) {
        Swal.fire({
          icon: 'success',
          title: 'Data berhasil ditambahkan !',
          showConfirmButton: false,
          timer: 1000
        })

        setInterval(() => {
          window.location = "<?= base_url() ?>edit/quest/4/" + data.main_id;
        }, 1200);
      } else {
        $.each(data.errors, function(index, value) {
          $.notify(value, "error");
        })
      }
    })
    .fail(function () {
      Swal.fire({
        icon: 'warning',
        title: 'Koneksi Bermasalah !',
        text: 'Tidak dapat terhubung dengan server.',
        showConfirmButton: true
      })
    });
  });

  // Hapus data anggota keluarga
  function hapusAnggotaKeluarga(id) {
    var main_id = $("#main_id").val();
    
    Swal.fire({
      title: 'Apakah anda yakin menghapus data ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post("<?= base_url() ?>input/delete_input4", { id: id, main_id: main_id }, function(data) {
          Swal.fire({
            icon: 'success',
            title: 'Data berhasil dihapus !',
            showConfirmButton: false,
            timer: 1200
          })
          setInterval(() => {
            window.location = "<?= base_url() ?>input/quest/4/" + main_id;
          }, 1000);
        });
      }
    })
  }

// Show data on modal
$('#ubahKeluarga').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget);
  var id                     = button.data('id');
  var no_urut_keluarga       = button.data('no_urut_keluarga');
  var nik_anggota            = button.data('nik_anggota');
  var nama_anggota           = button.data('nama_anggota');
  var hubungan_keluarga_id   = button.data('hubungan_keluarga_id');
  var jenis_kelamin          = button.data('jenis_kelamin');
  var tanggal_lahir          = button.data('tanggal_lahir');
  var umur                   = button.data('umur');
  var status_perkawinan_id   = button.data('status_perkawinan_id');
  var status_kehamilan       = button.data('status_kehamilan');
  var penyakit_kronis_id     = button.data('penyakit_kronis_id');
  var jenis_disabilitas_id   = button.data('jenis_disabilitas_id');
  var apakah_perokok_id      = button.data('apakah_perokok_id');
  var partisipasi_sekolah_id = button.data('partisipasi_sekolah_id');
  var jenjang_pendidikan_id  = button.data('jenjang_pendidikan_id');
  var kelas_tertinggi        = button.data('kelas_tertinggi');
  var ijazah_terakhir_id     = button.data('ijazah_terakhir_id');
  var status_bekerja         = button.data('status_bekerja');
  var lapangan_usaha_id      = button.data('lapangan_usaha_id');
  var jabatan_pekerjaan_id   = button.data('jabatan_pekerjaan_id');
  var status_anggota_ruta_id = button.data('status_anggota_ruta_id');
  
  var modal = $(this);
  modal.find('.modal-body input[name=id]').val(id);
  modal.find('.modal-body input[name=no_urut_keluarga]').val(no_urut_keluarga);
  modal.find('.modal-body input[name=nik_anggota]').val(nik_anggota);
  modal.find('.modal-body input[name=nama_anggota]').val(nama_anggota);
  modal.find('.modal-body select[name=hubungan_keluarga_id]').val(hubungan_keluarga_id);
  modal.find('.modal-body select[name=jenis_kelamin]').val(jenis_kelamin);
  modal.find('.modal-body input[name=tanggal_lahir]').val(tanggal_lahir);
  modal.find('.modal-body input[name=umur]').val(umur);
  modal.find('.modal-body select[name=status_perkawinan_id]').val(status_perkawinan_id);
  modal.find('.modal-body select[name=status_kehamilan]').val(status_kehamilan);
  modal.find('.modal-body select[name=penyakit_kronis_id]').val(penyakit_kronis_id);
  modal.find('.modal-body select[name=jenis_disabilitas_id]').val(jenis_disabilitas_id);
  modal.find('.modal-body select[name=apakah_perokok_id]').val(apakah_perokok_id);
  modal.find('.modal-body select[name=partisipasi_sekolah_id]').val(partisipasi_sekolah_id);
  modal.find('.modal-body select[name=jenjang_pendidikan_id]').val(jenjang_pendidikan_id);
  modal.find('.modal-body select[name=kelas_tertinggi]').val(kelas_tertinggi);
  modal.find('.modal-body select[name=ijazah_terakhir_id]').val(ijazah_terakhir_id);
  modal.find('.modal-body select[name=status_bekerja]').val(status_bekerja);
  modal.find('.modal-body select[name=lapangan_usaha_id]').val(lapangan_usaha_id);
  modal.find('.modal-body select[name=jabatan_pekerjaan_id]').val(jabatan_pekerjaan_id);
  modal.find('.modal-body select[name=status_anggota_ruta_id]').val(status_anggota_ruta_id);
});
</script>