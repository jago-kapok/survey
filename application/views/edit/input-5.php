<div class="col-md-10 mb-2">
  <div data-aos="zoom-in">
    <div class="row">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-kuesioner-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="card mb-2" style="padding: 8px 15px">
            <h6 class="mb-0"><strong>V. KEPEMILIKAN ASET DAN PENGELUARAN</strong></h6>
          </div>
          
          <div class="card">
            <form id="form_data">
            <input type="hidden" name="main_id" value="<?php echo $main_id ?>">
            <label class="mb-2"><strong>1. Rumah tangga memiliki sendiri aset bergerak sebagai berikut :</strong></label>
            <div class="row">
              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">a ) Tabung Gas 3 kg</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_3kg" value="Ya" <?php echo $checked = ($main_aset->tabung_gas_3kg == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_3kg" value="Tidak" <?php echo $checked = ($main_aset->tabung_gas_3kg == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">b ) Tabung Gas 5,5 kg</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_5kg" value="Ya" <?php echo $checked = ($main_aset->tabung_gas_5kg == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_5kg" value="Tidak" <?php echo $checked = ($main_aset->tabung_gas_5kg == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">c ) Tabung Gas 12 kg</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_12kg" value="Ya" <?php echo $checked = ($main_aset->tabung_gas_12kg == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_12kg" value="Tidak" <?php echo $checked = ($main_aset->tabung_gas_12kg == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">d ) Lemari Es / Kulkas</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kulkas" value="Ya" <?php echo $checked = ($main_aset->kulkas == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kulkas" value="Tidak" <?php echo $checked = ($main_aset->kulkas == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">e ) AC</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="ac" value="Ya" <?php echo $checked = ($main_aset->ac == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="ac" value="Tidak" <?php echo $checked = ($main_aset->ac == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">f ) Pemanas Air (<i>Water Heater</i>)</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pemanas_air" value="Ya" <?php echo $checked = ($main_aset->pemanas_air == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pemanas_air" value="Tidak" <?php echo $checked = ($main_aset->pemanas_air == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">g ) Telepon Rumah / <i>Handphone</i></label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="telepon" value="Ya" <?php echo $checked = ($main_aset->telepon == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="telepon" value="Tidak" <?php echo $checked = ($main_aset->telepon == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">h ) Televisi Layar Datar (min. 30 inch)</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="televisi_flat" value="Ya" <?php echo $checked = ($main_aset->televisi_flat == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="televisi_flat" value="Tidak" <?php echo $checked = ($main_aset->televisi_flat == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">i ) Emas / Perhiasan (>= 10 gr Emas)</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perhiasan_10gr" value="Ya" <?php echo $checked = ($main_aset->perhiasan_10gr == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perhiasan_10gr" value="Tidak" <?php echo $checked = ($main_aset->perhiasan_10gr == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">j ) Rekening Tabungan di Bank (Aktif)</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rekening_bank" value="Ya" <?php echo $checked = ($main_aset->rekening_bank == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rekening_bank" value="Tidak" <?php echo $checked = ($main_aset->rekening_bank == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">k ) Komputer / Laptop</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="komputer_laptop" value="Ya" <?php echo $checked = ($main_aset->komputer_laptop == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="komputer_laptop" value="Tidak" <?php echo $checked = ($main_aset->komputer_laptop == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">l ) Sepeda Motor</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sepeda_motor" value="Ya" <?php echo $checked = ($main_aset->sepeda_motor == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sepeda_motor" value="Tidak" <?php echo $checked = ($main_aset->sepeda_motor == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">m ) Mobil</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="mobil" value="Ya" <?php echo $checked = ($main_aset->mobil == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="mobil" value="Tidak" <?php echo $checked = ($main_aset->mobil == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">n ) Perahu</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu" value="Ya" <?php echo $checked = ($main_aset->perahu == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu" value="Tidak" <?php echo $checked = ($main_aset->perahu == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-6 col-form-label pt-0">o ) Perahu Motor</label>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu_motor" value="Ya" <?php echo $checked = ($main_aset->perahu_motor == 'Ya' ? 'checked' : '') ?>>
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu_motor" value="Tidak" <?php echo $checked = ($main_aset->perahu_motor == 'Tidak' ? 'checked' : '') ?>>
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="mb-2"><strong>2. Rumah tangga memiliki aset tidak bergerak sebagai berikut :</strong></label>
              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">a ) Lahan</label>
                  <div class="col-md-3">
                    
                      <select id="lahan" name="lahan" class="form-select form-select-sm">
                        <option disabled selected>--- Pilihan ---</option>
                        <option value="Ya" <?php echo $checked = ($main_aset->lahan == 'Ya' ? 'selected' : '') ?>>Ya</option>
                        <option value="Tidak" <?php echo $checked = ($main_aset->lahan == 'Tidak' ? 'selected' : '') ?>>Tidak</option>
                      </select>
                    <div class="input-group input-group-sm mt-2">
                      <input id="lahan_luas" type="text" name="lahan_luas" class="form-control form-control-sm number" value="<?php echo $main_aset->lahan_luas ?>">
                      <span class="input-group-text">m²</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">b ) Rumah di Tempat Lain</label>
                  <div class="col-md-3">
                    <select id="rumah_lain" name="rumah_lain" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="Ya" <?php echo $checked = ($main_aset->rumah_lain == 'Ya' ? 'selected' : '') ?>>Ya</option>
                      <option value="Tidak" <?php echo $checked = ($main_aset->rumah_lain == 'Tidak' ? 'selected' : '') ?>>Tidak</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="mb-2"><strong>3. Jumlah ternak yang dimiliki (ekor) :</strong></label>
              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">a ) Sapi</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="sapi" type="number" name="sapi" class="form-control form-control-sm" value="<?php echo $main_aset->sapi ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">b ) Kerbau</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="kerbau" type="number" name="kerbau" class="form-control form-control-sm" value="<?php echo $main_aset->kerbau ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">c ) Kuda</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="kuda" type="number" name="kuda" class="form-control form-control-sm" value="<?php echo $main_aset->kuda ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">d ) Kambing / Domba</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="kambing" type="number" name="kambing" class="form-control form-control-sm" value="<?php echo $main_aset->kambing ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">e ) Unggas</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="unggas" type="number" name="unggas" class="form-control form-control-sm" value="<?php echo $main_aset->unggas ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">f ) Kelinci</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="kelinci" type="number" name="kelinci" class="form-control form-control-sm" value="<?php echo $main_aset->kelinci ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">g ) Perikanan (bibit / kolam)</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <input id="perikanan" type="number" name="perikanan" class="form-control form-control-sm" value="<?php echo $main_aset->perikanan ?>">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label class="mb-2"><strong>4. ART yang memiliki usaha sendiri / bersama :</strong></label>
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">a ) Apakah ada ART yang memiliki usaha sendiri / bersama ?</label>
                  <div class="col-md-3">
                    <select name="memiliki_usaha" class="form-select form-select-sm">
                      <option value="Ya" <?php echo $selected = ($main_aset->memiliki_usaha == 'Ya' ? 'selected' : '') ?>>Ya</option>
                      <option value="Tidak" <?php echo $selected = ($main_aset->memiliki_usaha == 'Tidak' ? 'selected' : '') ?>>Tidak</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div id="detail_usaha" class="row m-0">
              <table class="table table-bordered table-striped" width="100%">
                <thead>
                  <tr>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 25%">Nama</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Lapangan Usaha</th>
                    <th colspan="2" style="vertical-align: middle; text-align: center">Jumlah Pekerja (Orang)</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Registrasi Usaha</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Omset Perbulan</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 5%"></th>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center; width: 10%">Dibayar</th>
                    <th style="vertical-align: middle; text-align: center; widows: 10%">Tidak Dibayar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($anggota_keluarga_memiliki_usaha as $key => $data) { ?>
                    <tr id="row_<?php echo $key ?>">
                      <td>
                        <input type="hidden" name="nama_id[]" value="<?php echo $data['id'] ?>">
                        <input type="text" class="form-control form-control-sm" value="<?php echo $data['nama_anggota'] ?>" readonly>
                      </td>
                      <td>
                        <input type="hidden" name="lapangan_usaha_id[]" value="<?php echo $data['lapangan_usaha_id'] ?>">
                        <input type="text" class="form-control form-control-sm" value="<?php echo $data['lapangan_usaha'] ?>" readonly>
                      </td>
                      <td><input type="number" name="pegawai_dibayar[]" class="form-control form-control-sm" value="<?php echo $data['pegawai_dibayar'] ?>" readonly></td>
                      <td><input type="number" name="pegawai_tidak_dibayar[]" class="form-control form-control-sm" value="<?php echo $data['pegawai_tidak_dibayar'] ?>" readonly></td>
                      <td>
                        <select name="registrasi_usaha[]" class="form-select form-select-sm">
                          <option value="" selected>--- Pilihan ---</option>
                          <option value="Ya" <?php echo $selected = ($data['registrasi_usaha'] == 'Ya' ? 'selected' : '') ?>>Ya</option>
                          <option value="Tidak" <?php echo $selected = ($data['registrasi_usaha'] == 'Tidak' ? 'selected' : '') ?>>Tidak</option>
                        </select>
                      </td>
                      <td>
                        <div class="input-group input-group-sm">
                          <span class="input-group-text">Rp</span>
                          <input type="number" name="omset_perbulan[]" class="form-control form-control-sm" value="<?php echo $data['omset_perbulan'] ?>" readonly>
                        </div>
                      </td>
                      <td>
                        <center>
                          <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(<?php echo $key ?>)"><i class="bi-trash"></i></button>
                        </center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tbody>
                  <?php for($i = 10 ; $i < 12 ; $i++) { ?>
                    <tr id="row_<?php echo $i ?>">
                      <td>
                        <select id="name_id<?php echo $key ?>" name="nama_id[]" class="form-select form-select-sm">
                          <option disabled selected></option>
                          <?php foreach($anggota_keluarga_memiliki_usaha as $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['nama_anggota'] ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select name="lapangan_usaha_id[]" class="form-select form-select-sm">
                          <option disabled selected></option>
                          <?php foreach($lapangan_usaha as $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['desc'] ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td><input type="number" name="pegawai_dibayar[]" class="form-control form-control-sm"></td>
                      <td><input type="number" name="pegawai_tidak_dibayar[]" class="form-control form-control-sm"></td>
                      <td>
                        <select name="registrasi_usaha[]" class="form-select form-select-sm">
                          <option value="" selected></option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <div class="input-group input-group-sm">
                          <span class="input-group-text">Rp</span>
                          <input type="number" name="omset_perbulan[]" class="form-control form-control-sm">
                        </div>
                      </td>
                      <td>
                        <center>
                          <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(<?php echo $i ?>)"><i class="bi-trash"></i></button>
                        </center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

            <div class="row">
              <label class="mb-2"><strong>5. Estimasi pengeluaran rumah tangga :</strong></label>
              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">Makanan (Bahan Makanan / Minuman, Makanan Jadi, Rokok, dll.)</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <span class="input-group-text">Rp</span>
                      <input type="number" name="estimasi_pengeluaran" class="form-control form-control-sm" value="<?php echo $main_aset->estimasi_pengeluaran ?>">
                    </div>
                    <div class="form-text">
                      Tanpa titik / koma
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-7 col-form-label">Non Makanan (Listrik, Air, BBM, Pulsa, Pemeliharaan, Pakaian, Pendidikan, Kesehatan, dll.)</label>
                  <div class="col-md-3">
                    <div class="input-group input-group-sm">
                      <span class="input-group-text">Rp</span>
                      <input type="number" name="estimasi_pengeluaran_non_makanan" class="form-control form-control-sm" value="<?php echo $main_aset->estimasi_pengeluaran_non_makanan ?>">
                    </div>
                    <div class="form-text">
                      Tanpa titik / koma
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="mb-2"><strong>6. Apakah keluarga ini pernah / sedang mendapatkan bantuan dari pemerintah selama setahun terakhir :</strong></label>
              <div class="row m-0 mb-3">
                <?php foreach($main_jenis_bantuan as $value) { ?>                  
                  <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="checkbox" name="jenis_bantuan_id[]" value="<?php echo $value['id'] ?>" <?php echo $checked = ($value['id'] == $value['jenis_bantuan_id']) ? 'checked' : '' ?>>
                    <label class="form-check-label"><?php echo $value['desc'] ?></label>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row mt-2">
              <div class="modal-footer">
                <button id="simpanData" type="submit" class="btn btn-primary float-end"><i class="bi-clipboard-check">&nbsp;&nbsp;</i>Simpan Data</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-2" data-aos="fade-up">
  <div class="list-group">
    <li class="list-group-item list-group-item-secondary">TAHAP PENGISIAN</li>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 1</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 3</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 4</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action active">KUISIONER 5</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 6</a>
  </div>

  <div class="card mt-2">
    <a href="<?= base_url() ?>" class="btn btn-outline-danger">Kembali ke Beranda</a>
  </div>
</div>

<script>
  $("#ju_lapangan_usaha1").chained("#ju_nama1");
  $("#ju_lapangan_usaha2").chained("#ju_nama2");
  $("#ju_lapangan_usaha3").chained("#ju_nama3");
  $("#ju_lapangan_usaha4").chained("#ju_nama4");

  $("form").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_data")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>edit/input5_create",
      data: data,
      dataType: "json",
      cache		: false,
			contentType	: false,
			processData	: false,
      // encode: true,
    })
    .done(function (data) {
      console.log();
      $("#simpanData").attr("disabled", true);
      
      if(data.success == true) {
        $.notify("Data berhasil disimpan !", "success");

        setInterval(function () {
          window.location = "<?= base_url() ?>admin/view/" + data.main_id;
        }, 1000);
      } else {
        $.each(data.errors, function(index, item) {
          $.notify(item, "error");
        });
      }
    });
  });

  function deleteRow(id) {
    $("#row_" + id).find("input, select").each(function() {
      // $(this).val("");
      $("#row_" + id).remove();
    });
  }
</script>