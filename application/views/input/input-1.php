<div class="col-md-10 mb-2">
  <div data-aos="zoom-in">
    <div class="row">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-kuesioner-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="card mb-2" style="padding: 8px 15px">
            <h6 class="mb-0"><strong>I. PENGENALAN TEMPAT</strong></h6>
          </div>
                
          <div class="card">
            <form id="form_data">
            <div class="row">
              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Provinsi <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <select id="provinsi_id" name="provinsi_id" class="form-select form-select-sm">
                      <option value="35">Jawa Timur</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Kabupaten / Kota <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <select id="kabupaten_id" name="kabupaten_id" class="form-select form-select-sm">
                      <option value="22">Bojonegoro</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Kecamatan <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <select id="kecamatan_id" name="kecamatan_id" class="form-select form-select-sm">
                      <option disabled selected>--- Pilih Kecataman --</option>
                      <?php foreach($ref_kecamatan as $data) { ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['kecamatan'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Desa / Kelurahan <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <select id="desa_id" name="desa_id" class="form-select form-select-sm">
                      <?php foreach($ref_desa as $data) { ?>
                        <option value="<?php echo $data['id']; ?>" data-chained="<?php echo $data['id_kecamatan']; ?>">
                          <?php echo $data['nama_desa'] ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Nama SLS</label>
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-text">RT</span>
                      <input id="rt" type="text" name="rt" maxlength="3" class="form-control form-control-sm">
                      <span class="input-group-text">RW</span>
                      <input id="rw" type="text" name="rw" maxlength="3" class="form-control form-control-sm">
                    </div>

                    <div class="input-group input-group-sm mt-3">
                      <span class="input-group-text">Dusun</span>
                      <input id="dusun" type="text" name="dusun" class="form-control form-control-sm">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Alamat</label>
                  <div class="col-md-6">
                    <input id="alamat" type="text" name="alamat" class="form-control form-control-sm">
                    <div class="form-text">
                      Isi dengan gang / jalan / blok atau biarkan kosong
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">No. Urut Rumah Tangga</label>
                  <div class="col-md-6">
                    <input id="no_urut_ruta" type="number" name="no_urut_ruta" class="form-control form-control-sm">
                    <div class="form-text">
                      No. Urut Rumah Tangga (DTKS2021.MDK Kol. 1)
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Nama Kepala Rumah Tangga <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input id="nama_krt" type="text" name="nama_krt" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label"></label>
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-text">No. KK</span>
                      <input id="no_kk_krt" type="text" name="no_kk_krt" maxlength="16" class="form-control form-control-sm">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Jumlah Anggota Rumah Tangga <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input id="jumlah_art" type="number" name="jumlah_art" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Jumlah Keluarga <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input id="jumlah_keluarga" type="number" name="jumlah_keluarga" class="form-control form-control-sm" value="1" readonly>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <label class="mb-2"><strong>Nomor KK setiap keluarga di dalam rumah tangga</strong></label>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK01</label>
                  <div class="col-sm-10">
                    <input id="kk01" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK02</label>
                  <div class="col-sm-10">
                    <input id="kk02" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK03</label>
                  <div class="col-sm-10">
                    <input id="kk03" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK04</label>
                  <div class="col-sm-10">
                    <input id="kk04" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK05</label>
                  <div class="col-sm-10">
                    <input id="kk05" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK06</label>
                  <div class="col-sm-10">
                    <input id="kk06" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK07</label>
                  <div class="col-sm-10">
                    <input id="kk07" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK08</label>
                  <div class="col-sm-10">
                    <input id="kk08" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">KK09</label>
                  <div class="col-sm-10">
                    <input id="kk09" type="text" name="no_kk[]" maxlength="16" class="form-control form-control-sm" disabled>
                  </div>
                </div>
              </div>
            </div> -->

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
    <a href="<?= base_url() ?>input/quest/1" class="list-group-item list-group-item-action active">KUISIONER 1</a>
    <a href="<?= base_url() ?>input/quest/2" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="<?= base_url() ?>input/quest/3" class="list-group-item list-group-item-action disabled">KUISIONER 3</a>
    <a href="<?= base_url() ?>input/quest/4" class="list-group-item list-group-item-action disabled">KUISIONER 4</a>
    <a href="<?= base_url() ?>input/quest/5" class="list-group-item list-group-item-action disabled">KUISIONER 5</a>
    <a href="<?= base_url() ?>input/quest/6" class="list-group-item list-group-item-action disabled">KUISIONER 6</a>
  </div>

  <div class="card mt-2">
    <a href="<?= base_url() ?>" class="btn btn-outline-danger">Kembali ke Beranda</a>
  </div>
</div>

<script>
  $("form").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_data")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>input/input1_create",
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

        setInterval(() => {
          window.location = "<?= base_url() ?>input/quest/2/" + data.main_id;
        }, 1000);
      } else {
        $.each(data.errors, function(index, value) {
          $.notify(value, "error");
        })
      }
    })
    .fail(function () {
      $.notify("Terjadi masalah saat koneksi ke server !");
    });
  });

  $("#desa_id").chained("#kecamatan_id");
</script>