<div class="col-lg-10 mb-2">
  <div data-aos="zoom-in">
    <div class="row">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-kuesioner-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="card mb-2" style="padding: 8px 15px">
            <h6 class="mb-0"><strong>III. KETERANGAN PERUMAHAN</strong></h6>
          </div>
          
          <div class="card">
            <form id="form_data">
            <input type="hidden" name="main_id" value="<?php echo $main_id ?>">
            <div class="row">
              <div class="">
                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">1 ) Status Penguasaan Bangunan Tempat Tinggal yang Ditempati</label>
                  <div class="col-sm-2">
                    <select id="status_bangunan_value" name="status_bangunan_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($status_bangunan as $data) {
                          $selected1 = $data['id'] == $main_keterangan_perumahan->status_bangunan_1a ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected1 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">1b ) Status Lahan Tempat Tinggal yang Ditempati</label>
                  <div class="col-sm-2">
                    <select id="status_lahan_value" name="status_lahan_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <?php
                        foreach($status_lahan as $data) {
                          $selected2 = $data['id'] == $main_keterangan_perumahan->status_lahan_1b ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected2 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">2 ) Luas Lantai</label>
                  <div class="col-sm-2">
                    <div class="input-group input-group-sm">
                      <input id="luas_lantai_value" type="number" name="luas_lantai_value" class="form-control form-control-sm" value="<?php echo $main_keterangan_perumahan->luas_lantai_2 ?>">
                      <span class="input-group-text">m²</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">3 ) Jenis Lantai Terluas</label>
                  <div class="col-sm-3">
                    <select id="jenis_lantai_value" name="jenis_lantai_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($jenis_lantai as $data) {
                          $selected3 = $data['id'] == $main_keterangan_perumahan->jenis_lantai_3 ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected3 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">4 ) Jenis Dinding Terluas</label>
                  <div class="col-sm-4">
                    <select id="jenis_dinding_value" name="jenis_dinding_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($jenis_dinding as $data) {
                          $selected4 = $data['id'] == $main_keterangan_perumahan->jenis_dinding_4a ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected4 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">4b ) Kondisi Dinding</label>
                  <div class="col-sm-3">
                    <select id="kondisi_dinding_value" name="kondisi_dinding_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($kondisi_dinding as $data) {
                          $selected5 = $data['id'] == $main_keterangan_perumahan->kondisi_dinding_4b ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected5 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">5 ) Jenis Atap Terluas</label>
                  <div class="col-sm-4">
                    <select id="jenis_atap_value" name="jenis_atap_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($jenis_atap as $data) {
                          $selected6 = $data['id'] == $main_keterangan_perumahan->jenis_atap_5a ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected6 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">5b ) Kondisi Atap</label>
                  <div class="col-sm-3">
                    <select id="kondisi_atap_value" name="kondisi_atap_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($kondisi_atap as $data) {
                          $selected7 = $data['id'] == $main_keterangan_perumahan->kondisi_atap_5b ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected7 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">6 ) Jumlah Kamar Tidur</label>
                  <div class="col-sm-2">
                    <div class="input-group input-group-sm">
                      <input id="jumlah_kamar_value" type="number" name="jumlah_kamar_value" class="form-control form-control-sm" value="<?php echo $main_keterangan_perumahan->jumlah_kamar_6 ?>">
                      <span class="input-group-text">kamar</span>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">7 ) Sumber Air Minum</label>
                  <div class="col-sm-5">
                    <select id="sumber_airminum_value" name="sumber_airminum_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($sumber_airminum as $data) {
                          $selected8 = $data['id'] == $main_keterangan_perumahan->sumber_airminum_7 ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected8 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">8 ) Cara Memperoleh Air Minum</label>
                  <div class="col-sm-2">
                    <select id="cara_memperoleh_airminum_value" name="cara_memperoleh_airminum_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($cara_memperoleh_airminum as $data) {
                          $selected9 = $data['id'] == $main_keterangan_perumahan->cara_memperoleh_airminum_8 ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected9 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">9 ) Sumber Penerangan Utama</label>
                  <div class="col-sm-3">
                    <select id="sumber_listrik_value" name="sumber_listrik_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($sumber_listrik as $data) {
                          $selected10 = $data['id'] == $main_keterangan_perumahan->sumber_listrik_9a ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected10 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">9b ) Daya Terpasang</label>
                  <div class="col-sm-3">
                    <select id="daya_listrik_value" name="daya_listrik_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($daya_listrik as $data) {
                          $selected11 = $data['id'] == $main_keterangan_perumahan->daya_listrik_9b ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected11 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">9c ) ID Pelanggan</label>
                  <div class="col-sm-3">
                    <input id="id_pelanggan_value" type="number" name="id_pelanggan_value" class="form-control form-control-sm" value="<?php echo $main_keterangan_perumahan->id_pelanggan_9c ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">10 ) Bahan Bakar / Energi Utama untuk Memasak</label>
                  <div class="col-sm-3">
                    <select id="energi_untuk_memasak_value" name="energi_untuk_memasak_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($energi_untuk_memasak as $data) {
                          $selected12 = $data['id'] == $main_keterangan_perumahan->energi_untuk_memasak_10 ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected12 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">11 ) Kepemilikan dan Penggunaan Fasilitas Tempat Buang Air Besar</label>
                  <div class="col-sm-3">
                    <select id="status_toilet_value" name="status_toilet_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($status_toilet as $data) {
                          $selected13 = $data['id'] == $main_keterangan_perumahan->status_toilet_11a ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected13 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">11b ) Jenis Kloset</label>
                  <div class="col-sm-3">
                    <select id="jenis_toilet_value" name="jenis_toilet_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($jenis_toilet as $data) {
                          $selected14 = $data['id'] == $main_keterangan_perumahan->jenis_toilet_11b ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected14 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">12 ) Tempat Pembuangan Akhir Tinja</label>
                  <div class="col-sm-3">
                    <select id="tpa_value" name="tpa_value" class="form-select form-select-sm">
                      <option disabled>--- Pilihan ---</option>
                      <?php
                        foreach($tpa as $data) {
                          $selected15 = $data['id'] == $main_keterangan_perumahan->tpa_12 ? 'selected' : '';
                      ?>
                        <option value="<?php echo $data['id'] ?>" <?php echo $selected15 ?>><?php echo $data['id'].". ".$data['desc'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
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
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 1</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action disabled">KUISIONER 2</a>
    <a href="javascript:void(0)" class="list-group-item list-group-item-action active">KUISIONER 3</a>
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
      url: "<?= base_url() ?>edit/input3_create",
      data: data,
      dataType: "json",
      processData: false,
      contentType: false,
      cache: false,
      // encode: true,
    })
    .done(function (data) {
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
    })
    .fail(function() {
      $.notify("Terjadi kesalahan saat koneksi ke server !", "error");
    });
  });
</script>