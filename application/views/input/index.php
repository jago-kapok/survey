<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $title ?></title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <style>
    body { font-family: 'Inter', sans-serif; background-color: #eff3f8; font-size: 85%; }
    .card { padding: 1rem; border-radius: 12px; box-shadow: 0 3px 5px rgba(0,0,0,.02),0 0 2px rgba(0,0,0,.05),0 1px 4px rgba(0,0,0,.08)!important; }
    .nav-fill .nav-item, .nav-fill>.nav-link { border-radius: 12px; width:10.3rem; }
    .side-b { color: dodgerblue; }
  </style>
</head>
<body>
  <div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-2">
        <div class="card">
          <div class="d-flex align-items-start justify-content-center">
            <div class="nav flex-column nav-pills nav-fill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-kuesioner-1" type="button" aria-selected="true">
                KUESIONER 1
              </button>
              <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-kuesioner-2" type="button" aria-selected="false">
                KUESIONER 2
              </button>
              <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-kuesioner-3" type="button" aria-selected="false">
                KUESIONER 3
              </button>
              <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-kuesioner-4" type="button" aria-selected="false">
                KUESIONER 4
              </button>
              <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-kuesioner-5" type="button" aria-selected="false">
                KUESIONER 5
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-10">
        <div class="">
          <div class="row">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade" id="v-pills-kuesioner-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card mb-2" style="padding: 8px 15px">
                  <h6 class="mb-0"><strong>I. PENGENALAN TEMPAT</strong></h6>
                </div>
                
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-8">
                          <select id="provinsi" class="form-select form-select-sm" disabled>
                            <option value="35">Jawa Timur</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                        <div class="col-sm-8">
                          <select id="kabupaten" class="form-select form-select-sm" disabled>
                            <option value="22">Bojonegoro</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-8">
                          <select id="kecamatan" class="form-select form-select-sm">
                            <option value="22">Bojonegoro</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Desa / Kelurahan</label>
                        <div class="col-sm-8">
                          <select id="Kabupaten" class="form-select form-select-sm">
                            <option value="22">Bojonegoro</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama SLS</label>
                        <div class="col-sm-8">
                          <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">RT</span>
                            <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">RW</span>
                            <input type="text" class="form-control form-control-sm" placeholder="Server" aria-label="Server">
                          </div>

                          <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">Dusun</span>
                            <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">No. Urut RUTA</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                          <div class="form-text">
                            No. Urut Rumah Tangga (dari DTKS2021.MDK Kolom 1)
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama KRT</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah ART</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Keluarga</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="mb-2"><strong>Nomor KK setiap keluarga di dalam rumah tangga</strong></label>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK01</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK02</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK03</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK04</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK05</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK06</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK07</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK08</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">KK09</label>
                        <div class="col-sm-10">
                          <input id="provinsi" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-kuesioner-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card mb-2" style="padding: 8px 15px">
                  <h6 class="mb-0"><strong>II. KETERANGAN PETUGAS DAN RESPONDEN</strong></h6>
                </div>
                
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tgl. Pencacahan</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="date" class="form-control form-control-sm">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Pencacah</label>
                        <div class="col-sm-8">
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" placeholder="Username" style="width:12em">
                            <span class="input-group-text">Kode</span>
                            <input type="number" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="col-form-label">Hasil pencacahan rumah tangga :</label>
                        <div class="col-md-11">
                          <select id="hasil_pencacahan" class="form-select form-select-sm">
                            <option disabled selected>--- Pilih status hasil pencacahan rumah tangga ---</option>
                            <?php foreach($hasil_pencacahan as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="bagian_no_ruta" class="row mb-3">
                        <label class="col-md-3 col-form-label">No. Urut RUTA</label>
                        <div class="col-md-3">
                          <input id="no_urut_ruta" type="number" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tgl. Pemeriksaan</label>
                        <div class="col-sm-8">
                          <input id="provinsi" type="date" class="form-control form-control-sm">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Pemeriksa</label>
                        <div class="col-sm-8">
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" placeholder="Username" style="width:12em">
                            <span class="input-group-text">Kode</span>
                            <input type="number" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-kuesioner-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="card mb-2" style="padding: 8px 15px">
                  <h6 class="mb-0"><strong>III. KETERANGAN PERUMAHAN</strong></h6>
                </div>
                
                <div class="card">
                  <div class="row">
                    <div class="">
                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">1 ) Status penguasaan bangunan tempat tinggal yang ditempati</label>
                        <div class="col-sm-2">
                          <select id="status_bangunan_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($status_bangunan as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="status_lahan" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">1b ) Status lahan tempat tinggal yang ditempati</label>
                        <div class="col-sm-2">
                          <select id="status_lahan_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($status_lahan as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">2 ) Luas lantai</label>
                        <div class="col-sm-2">
                          <div class="input-group input-group-sm">
                            <input id="luas_lantai_value" type="number" class="form-control form-control-sm">
                            <span class="input-group-text">m²</span>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">3 ) Jenis lantai terluas</label>
                        <div class="col-sm-3">
                          <select id="jenis_lantai_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($jenis_lantai as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">4 ) Jenis dinding terluas</label>
                        <div class="col-sm-4">
                          <select id="jenis_dinding_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($jenis_dinding as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="kondisi_dinding" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">4b ) Kondisi dinding</label>
                        <div class="col-sm-3">
                          <select id="kondisi_dinding_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($kondisi_dinding as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">5 ) Jenis atap terluas</label>
                        <div class="col-sm-4">
                          <select id="jenis_atap_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($jenis_atap as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="kondisi_atap" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">5b ) Kondisi atap</label>
                        <div class="col-sm-3">
                          <select id="kondisi_atap_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($kondisi_atap as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">6 ) Jumlah kamar tidur</label>
                        <div class="col-sm-2">
                          <div class="input-group input-group-sm">
                            <input id="jumlah_kamar_value" type="number" class="form-control form-control-sm">
                            <span class="input-group-text">kamar</span>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">7 ) Sumber air minum</label>
                        <div class="col-sm-5">
                          <select id="sumber_airminum_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($sumber_airminum as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">8 ) Cara memperoleh air minum</label>
                        <div class="col-sm-2">
                          <select id="cara_memperoleh_airminum_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($cara_memperoleh_airminum as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">9 ) Sumber penerangan utama</label>
                        <div class="col-sm-3">
                          <select id="sumber_listrik_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($sumber_listrik as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="daya_listrik" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">9b ) Daya terpasang</label>
                        <div class="col-sm-3">
                          <select id="daya_listrik_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($daya_listrik as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="id_pelanggan" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">9c ) ID pelanggan</label>
                        <div class="col-sm-3">
                          <input id="id_pelanggan_value" type="number" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">10 ) Bahan bakar / energi utama untuk memasak</label>
                        <div class="col-sm-3">
                          <select id="energi_untuk_memasak_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($energi_untuk_memasak as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">11 ) Kepemilikan dan penggunaan fasilitas tempat buang air besar</label>
                        <div class="col-sm-3">
                          <select id="status_toilet_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($status_toilet as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div id="jenis_toilet" class="row mb-3">
                        <label class="col-sm-5 col-form-label side-b">11b ) Jenis kloset</label>
                        <div class="col-sm-3">
                          <select id="jenis_toilet_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($jenis_toilet as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">12 ) Tempat pembuangan akhir tinja</label>
                        <div class="col-sm-3">
                          <select id="tpa_value" class="form-select form-select-sm">
                            <option disabled selected>--- Pilihan ---</option>
                            <?php foreach($tpa as $data) { ?>
                              <option value="<?php echo $data['id'] ?>"><?php echo $data['id'].". ".$data['desc'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-kuesioner-4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card mb-2" style="padding: 8px 15px">
                  <h6 class="mb-0"><strong>IV. KETERANGAN SOSIAL EKONOMI ANGGOTA RUMAH TANGGA</strong></h6>
                </div>
                
                <div class="card">
                  DESKRIPSIDESKRIPSIDESKRIPSIDESKRIPSIDESKRIPSIDESKRIPSIDESKRIPSIDESKRIPSI
                </div>
              </div>

              <div class="tab-pane fade show active" id="v-pills-kuesioner-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card mb-2" style="padding: 8px 15px">
                  <h6 class="mb-0"><strong>V. KEPEMILIKAN ASET DAN PENGELUARAN</strong></h6>
                </div>
                
                <div class="card">
                  <label class="mb-2"><strong>1. Rumah tangga memiliki sendiri aset bergerak sebagai berikut :</strong></label>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-6 col-form-label pt-0">a ) Tabung gas 3 kg</label>
                        <div class="col-sm-5">
                          <!-- <select id="tabung_gas_3kg" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select> -->
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tabung_gas_3kg" value="Ya">
                            <label class="form-check-label">Ya</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tabung_gas_3kg" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">b ) Tabung gas 5,5 kg</label>
                        <div class="col-sm-3">
                          <select id="tabung_gas_5-5kg" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">c ) Tabung gas 12 kg</label>
                        <div class="col-sm-3">
                          <select id="tabung_gas_12kg" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">d ) Lemari es / kulkas</label>
                        <div class="col-sm-3">
                          <select id="kulkas" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">e ) AC</label>
                        <div class="col-sm-3">
                          <select id="ac" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">f ) Pemanas air (<i>water heater</i>)</label>
                        <div class="col-sm-3">
                          <select id="pemanas_air" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">g ) Telepon rumah (PSTN)</label>
                        <div class="col-sm-3">
                          <select id="telepon" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">h ) Televisi layar datar min. 30 inch</label>
                        <div class="col-sm-3">
                          <select id="televisi_flat" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">i ) Emas / perhiasan (senilai 10 gram emas)</label>
                        <div class="col-sm-3">
                          <select id="perhiasan_10gr" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">j ) Rekening aktif tabungan di bank</label>
                        <div class="col-sm-3">
                          <select id="rekening_bank" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">k ) Komputer / laptop</label>
                        <div class="col-sm-3">
                          <select id="komputer_laptop" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">l ) Sepeda motor</label>
                        <div class="col-sm-3">
                          <select id="sepeda_motor" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">m ) Mobil</label>
                        <div class="col-sm-3">
                          <select id="mobil" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">n ) Perahu</label>
                        <div class="col-sm-3">
                          <select id="perahu" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">o ) Perahu motor</label>
                        <div class="col-sm-3">
                          <select id="perahu_motor" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="mb-2"><strong>2. Rumah tangga memiliki aset tidak bergerak sebagai berikut :</strong></label>
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">a ) Lahan</label>
                        <div class="col-sm-3">
                          
                            <select id="lahan" class="form-select form-select-sm">
                              <option value="Ya">Ya</option>
                              <option value="Tidak">Tidak</option>
                            </select>
                          <div class="input-group input-group-sm">
                            <input id="lahan_luas" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">m²</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">b ) Rumah di tempat lain</label>
                        <div class="col-sm-3">
                          <select id="rumah_lain" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="mb-2"><strong>3. Jumlah ternak yang dimiliki (ekor) :</strong></label>
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">a ) Sapi</label>
                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input id="sapi" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">ekor</span>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">b ) Kerbau</label>
                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input id="kerbau" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">ekor</span>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">c ) Kuda</label>
                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input id="kud" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">ekor</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">d ) Babi</label>
                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input id="babi" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">ekor</span>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">e ) Kambing / Domba</label>
                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input id="kambing" type="text" class="form-control form-control-sm">
                            <span class="input-group-text">ekor</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="mb-2"><strong>4. ART yang memiliki usaha sendiri / bersama :</strong></label>
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <label class="col-sm-7 col-form-label">a ) Apakah ada ART yang memiliki usaha sendiri / bersama?</label>
                        <div class="col-sm-3">
                          <select id="usaha_dimiliki" class="form-select form-select-sm">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="detail_usaha" class="row">
                    <table class="table table-bordered table-striped" width="100%">
                      <thead>
                        <tr>
                          <th rowspan="2" style="vertical-align: middle; text-align: center; width: 5%">No.</th>
                          <th rowspan="2" style="vertical-align: middle; text-align: center; width: 25%">Nama</th>
                          <th rowspan="2" style="vertical-align: middle; text-align: center; width: 20%">Lapangan usaha</th>
                          <th colspan="2" style="vertical-align: middle; text-align: center">Jumlah pekerja</th>
                          <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Registrasi usaha</th>
                          <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Omset perbulan</th>
                        </tr>
                        <tr>
                          <th style="vertical-align: middle; text-align: center; width: 10%">Dibayar</th>
                          <th style="vertical-align: middle; text-align: center; widows: 10%">Tdk Dibayar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for($i=1 ; $i<5 ; $i++) { ?>
                          <tr>
                            <td><center><?php echo $i ?></center></td>
                            <td><input id="ju_nama<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                            <td><input id="ju_lapangan_usaha<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                            <td><input id="ju_dibayar<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                            <td><input id="ju_tidak_dibayar<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                            <td><input id="ju_registrasi_usaha<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                            <td><input id="ju_omset_perbulan<?php echo $i ?>" type="text" class="form-control form-control-sm"></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $("#bagian_no_ruta").hide();
    $("#status_lahan").hide();
    $("#kondisi_dinding").hide();
    $("#kondisi_atap").hide();
    $("#daya_listrik").hide();
    $("#id_pelanggan").hide();
    $("#jenis_toilet").hide();
    $("#detail_usaha").show();

    $("#hasil_pencacahan").change(function() {
      if(this.value == 6) {
        $("#bagian_no_ruta").show();
        $("#no_urut_ruta").focus();
      } else {
        $("#bagian_no_ruta").hide();
      }
    });

    $("#status_bangunan_value").change(function() {
      if(this.value == 1) {
        $("#status_lahan").show();
        $("#status_lahan_value").focus();
      } else {
        $("#status_lahan").hide();
      }
    });

    $("#jenis_dinding_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3) {
        $("#kondisi_dinding").show();
        $("#kondisi_dinding_value").focus();
      } else {
        $("#kondisi_dinding").hide();
      }
    });

    $("#jenis_atap_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3 || this.value == 4) {
        $("#kondisi_atap").show();
        $("#kondisi_atap_valuei").focus();
      } else {
        $("#kondisi_atap").hide();
      }
    });

    $("#sumber_listrik_value").change(function() {
      if(this.value == 1) {
        $("#daya_listrik").show();
        $("#id_pelanggan").show();
        $("#daya_listrik_value").focus();
      } else {
        $("#daya_listrik").hide();
        $("#id_pelanggan").hide();
      }
    });

    $("#status_toilet_value").change(function() {
      if(this.value != 6) {
        $("#jenis_toilet").show();
        $("#jenis_toilet_value").focus();
      } else {
        $("#jenis_toilet").hide();
      }
    });

    $("#lahan").change(function() {
      if(this.value == "Ya") {
        $("#lahan_luas").attr("disabled", false);
        $("#lahan_luas").focus();
      } else {
        $("#lahan_luas").attr("disabled", true);
      }
    });

    $("#usaha_dimiliki").change(function() {
      if(this.value == "Ya") {
        $("#detail_usaha").show();
        $("#detail_usaha").find('input').empty();
      } else {
        $("#detail_usaha").hide();
      }
    });
  </script>
</body>
</html>