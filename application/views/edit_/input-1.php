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
            <input type="hidden" name="main_id" value="<?php echo $main_id ?>">
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
                      <?php
                        foreach($ref_kecamatan as $data) {
                          $selected_kecamatan = $data['id'] == $main_pengenalan_tempat->kecamatan_id ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id']; ?>" <?php echo $selected_kecamatan ?>><?php echo $data['kecamatan'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Desa / Kelurahan <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <select id="desa_id" name="desa_id" class="form-select form-select-sm">
                      <?php
                        foreach($ref_desa as $data) {
                          $selected_desa = $data['id'] == $main_pengenalan_tempat->desa_id ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id']; ?>" data-chained="<?php echo $data['id_kecamatan']; ?>" <?php echo $selected_desa ?>>
                          <?php echo $data['nama_desa'] ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Nama SLS</label>
                  <div class="col-md-6">
                    <div class="input-group input-group-sm mb-3">
                      <span class="input-group-text">Dusun</span>
                      <input id="dusun" type="text" name="dusun" class="form-control form-control-sm" value="<?php echo $main_pengenalan_tempat->dusun ?>">
                    </div>

                    <div class="input-group input-group-sm">
                      <span class="input-group-text">RT</span>
                      <input id="rt" type="text" name="rt" maxlength="3" class="form-control form-control-sm number" value="<?php echo $main_pengenalan_tempat->rt ?>">
                      <span class="input-group-text">RW</span>
                      <input id="rw" type="text" name="rw" maxlength="3" class="form-control form-control-sm number" value="<?php echo $main_pengenalan_tempat->rw ?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Alamat</label>
                  <div class="col-md-6">
                    <input id="alamat" type="text" name="alamat" class="form-control form-control-sm" value="<?php echo $main_pengenalan_tempat->alamat ?>">
                    <div class="form-text">
                      Isi dengan gang / jalan / blok / nomor rumah
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Nama Kepala Keluarga <span class="text-danger">*</span></label>
                  <div class="col-md-6">
                    <input id="nama_krt" type="text" name="nama_krt" class="form-control form-control-sm" value="<?php echo $main_pengenalan_tempat->nama_krt ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label"></label>
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-text">No. KK&nbsp;<span class="text-danger">*</span></span>
                      <input id="no_kk_krt" type="text" name="no_kk_krt" maxlength="16" class="form-control form-control-sm number" value="<?php echo $main_pengenalan_tempat->no_kk_krt ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Jumlah Anggota Keluarga</label>
                  <div class="col-md-3">
                    <input id="jumlah_art" type="number" name="jumlah_art" class="form-control form-control-sm" value="<?php echo $main_pengenalan_tempat->jumlah_art ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-5 col-form-label">Serumah dengan No. KK</label>
                  <div class="col-md-6">
                    <input id="relasi_no_kk" type="text" name="relasi_no_kk" maxlength="16" class="form-control form-control-sm number" value="<?php echo $main_pengenalan_tempat->relasi_no_kk ?>">
                    <div class="form-text">
                      Jika dalam satu rumah terdapat lebih dari satu KK
                    </div>
                  </div>
                </div>
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
    <a href="javascript:void(0)" class="list-group-item list-group-item-action active">KUISIONER 1</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 3</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 4</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 5</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 6</a>
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
      url: "<?= base_url() ?>edit/input1_create",
      data: data,
      dataType: "json",
      cache		: false,
			contentType	: false,
			processData	: false,
      // encode: true,
    })
    .done(function (data) {
      if(data.success == true) {
        $("#simpanData").attr("disabled", true);
        $.notify("Data berhasil disimpan !", "success");

        setInterval(() => {
          window.location = "<?= base_url() ?>admin/view/" + data.main_id;
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