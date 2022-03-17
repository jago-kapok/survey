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
                  <label class="col-sm-6 col-form-label pt-0">a ) Tabung Gas 3 kg</label>
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
                  <label class="col-sm-6 col-form-label pt-0">b ) Tabung Gas 5,5 kg</label>
                  <div class="col-sm-5">
                    <!-- <select id="tabung_gas_5kg" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_5kg" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_5kg" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">c ) Tabung Gas 12 kg</label>
                  <div class="col-sm-5">
                    <!-- <select id="tabung_gas_12kg" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_12kg" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tabung_gas_12kg" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">d ) Lemari Es / Kulkas</label>
                  <div class="col-sm-5">
                    <!-- <select id="kulkas" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kulkas" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kulkas" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">e ) AC</label>
                  <div class="col-sm-5">
                    <!-- <select id="ac" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="ac" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="ac" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">f ) Pemanas Air (<i>Water Heater</i>)</label>
                  <div class="col-sm-5">
                    <!-- <select id="pemanas_air" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pemanas_air" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="pemanas_air" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">g ) Telepon Rumah (PSTN)</label>
                  <div class="col-sm-5">
                    <!-- <select id="telepon" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="telepon" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="telepon" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">h ) Televisi Layar Datar (min. 30 inch)</label>
                  <div class="col-sm-5">
                    <!-- <select id="televisi_flat" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="televisi_flat" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="televisi_flat" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">i ) Emas / Perhiasan (>= 10 gr Emas)</label>
                  <div class="col-sm-5">
                    <!-- <select id="perhiasan_10gr" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perhiasan_10gr" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perhiasan_10gr" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">j ) Rekening Tabungan di Bank (Aktif)</label>
                  <div class="col-sm-5">
                    <!-- <select id="rekening_bank" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rekening_bank" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="rekening_bank" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">k ) Komputer / Laptop</label>
                  <div class="col-sm-5">
                    <!-- <select id="komputer_laptop" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="komputer_laptop" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="komputer_laptop" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">l ) Sepeda Motor</label>
                  <div class="col-sm-5">
                    <!-- <select id="sepeda_motor" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sepeda_motor" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sepeda_motor" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">m ) Mobil</label>
                  <div class="col-sm-5">
                    <!-- <select id="mobil" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="mobil" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="mobil" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">n ) Perahu</label>
                  <div class="col-sm-5">
                    <!-- <select id="perahu" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu" value="Tidak">
                      <label class="form-check-label">Tidak</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-6 col-form-label pt-0">o ) Perahu Motor</label>
                  <div class="col-sm-5">
                    <!-- <select id="perahu_motor" class="form-select form-select-sm">
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select> -->
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu_motor" value="Ya">
                      <label class="form-check-label">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="perahu_motor" value="Tidak">
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
                  <label class="col-sm-7 col-form-label">a ) Lahan</label>
                  <div class="col-sm-3">
                    <select id="lahan" name="lahan" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select>
                    <div class="input-group input-group-sm">
                      <input id="lahan_luas" type="text" name="lahan_luas" class="form-control form-control-sm">
                      <span class="input-group-text">m²</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-sm-7 col-form-label">b ) Rumah di Tempat Lain</label>
                  <div class="col-sm-3">
                    <select id="rumah_lain" name="rumah_lain" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
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
                      <input id="sapi" type="text" name="sapi" class="form-control form-control-sm">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-7 col-form-label">b ) Kerbau</label>
                  <div class="col-sm-3">
                    <div class="input-group input-group-sm">
                      <input id="kerbau" type="text" name="kerbau" class="form-control form-control-sm">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-7 col-form-label">c ) Kuda</label>
                  <div class="col-sm-3">
                    <div class="input-group input-group-sm">
                      <input id="kuda" type="text" name="kuda" class="form-control form-control-sm">
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
                      <input id="babi" type="text" name="babi" class="form-control form-control-sm">
                      <span class="input-group-text">ekor</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-7 col-form-label">e ) Kambing / Domba</label>
                  <div class="col-sm-3">
                    <div class="input-group input-group-sm">
                      <input id="kambing" type="text" name="kambing" class="form-control form-control-sm">
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
                  <label class="col-sm-7 col-form-label">a ) Apakah ada ART yang memiliki usaha sendiri / bersama?</label>
                  <div class="col-sm-3">
                    <select id="memiliki_usaha" name="memiliki_usaha" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div id="detail_usaha" class="row m-0">
              <table class="table table-bordered table-striped" width="100%">
                <thead>
                  <tr>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 5%">No.</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 25%">Nama</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Lapangan Usaha</th>
                    <th colspan="2" style="vertical-align: middle; text-align: center">Jumlah Pekerja</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Registrasi Usaha</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 15%">Omset Perbulan</th>
                    <th rowspan="2" style="vertical-align: middle; text-align: center; width: 5%"></th>
                  </tr>
                  <tr>
                    <th style="vertical-align: middle; text-align: center; width: 10%">Dibayar</th>
                    <th style="vertical-align: middle; text-align: center; widows: 10%">Tdk Dibayar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i=1 ; $i<5 ; $i++) { ?>
                    <tr id="row_<?php echo $i ?>">
                      <td><center><?php echo $i ?></center></td>
                      <td>
                        <select id="ju_nama<?php echo $i ?>" name="nama_id[]" class="form-select form-select-sm">
                          <option disabled selected></option>
                          <?php foreach($anggota_keluarga_memiliki_usaha as $data) { ?>
                            <option value="<?php echo $data["id"] ?>"><?php echo $data["nama_anggota"] ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td>
                        <select id="ju_lapangan_usaha<?php echo $i ?>" name="lapangan_usaha_id[]" class="form-select form-select-sm">
                          <?php foreach($anggota_keluarga_memiliki_usaha as $data) { ?>
                            <option value="<?php echo $data["lapangan_usaha_id"] ?>" data-chained="<?php echo $data["id"] ?>"><?php echo $data["lapangan_usaha"] ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td><input id="ju_dibayar<?php echo $i ?>" type="number" name="pegawai_dibayar[]" class="form-control form-control-sm"></td>
                      <td><input id="ju_tidak_dibayar<?php echo $i ?>" type="number" name="pegawai_tidak_dibayar[]" class="form-control form-control-sm"></td>
                      <td>
                        <select id="ju_registrasi_usaha<?php echo $i ?>" name="registrasi_usaha[]" class="form-select form-select-sm">
                          <option disabled selected>--- Pilihan ---</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </td>
                      <td>
                        <div class="input-group input-group-sm">
                          <span class="input-group-text">Rp</span>
                          <input id="ju_omset_perbulan<?php echo $i ?>" type="number" name="omset_perbulan[]" class="form-control form-control-sm">
                        </div>
                      </td>
                      <td>
                        <center>
                          <button id="delete_ju<?php echo $i ?>" type="button" class="btn btn-sm btn-danger" onclick="deleteRow(<?php echo $i ?>)"><i class="bi-trash"></i></button>
                        </center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label class="mb-2"><strong>5. Estimasi pengeluaran rumah tangga :</strong></label>
                <div class="row mb-3">
                  <label class="col-sm-7 col-form-label">Estimasi pengeluaran rumah tangga untuk pulsa dan paket data telepon genggam (handphone) setiap bulan selama tiga bulan terakhir (Rupiah) :</label>
                  <div class="col-sm-3">
                    <select id="estimasi_pengeluaran" name="estimasi_pengeluaran" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <?php foreach($estimasi_pengeluaran as $data) { ?>
                        <option value="<?php echo $data["id"] ?>"><?php echo $data["desc"] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <label class="mb-2"><strong>6. Apakah keluarga ini pernah / sedang mendapatkan bantuan sosial atau hibbah pemerintah selama setahun terakhir</strong></label>
              <div class="row m-0 mb-3">
                <?php foreach($jenis_bantuan as $data) { ?>
                  <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="checkbox" name="jenis_bantuan_id[]" value="<?php echo $data['id'] ?>">
                    <label class="form-check-label"><?php echo $data['desc'] ?></label>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="row mt-2">
              <div class="modal-footer">
                <button id="simpanData" type="submit" class="btn btn-primary float-end"><i class="bi-clipboard-check">&nbsp;&nbsp;</i>Simpan & Lanjutkan</button>
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
    <a href="<?= base_url() ?>input/quest/1" class="list-group-item list-group-item-action disabled">KUISIONER 1</a>
    <a href="<?= base_url() ?>input/quest/2" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="<?= base_url() ?>input/quest/3" class="list-group-item list-group-item-action disabled">KUISIONER 3</a>
    <a href="<?= base_url() ?>input/quest/4" class="list-group-item list-group-item-action disabled">KUISIONER 4</a>
    <a href="<?= base_url() ?>input/quest/5" class="list-group-item list-group-item-action active">KUISIONER 5</a>
    <a href="<?= base_url() ?>input/quest/6" class="list-group-item list-group-item-action disabled">KUISIONER 6</a>
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
      url: "<?= base_url() ?>input/input5_create",
      data: data,
      dataType: "json",
      cache		: false,
			contentType	: false,
			processData	: false,
      // encode: true,
    })
    .done(function (data) {
      console.log(data);
      $("#simpanData").attr("disabled", true);
      
      if(data.success == true) {
        $.notify("Data berhasil disimpan !", "success");

        setInterval(function () {
          window.location = "<?= base_url() ?>input/quest/6/" + data.main_id;
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
      $(this).val("");
    });
  }
</script>