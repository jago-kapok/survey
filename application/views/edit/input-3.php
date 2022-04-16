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
                  <div class="col-sm-3">
                    <select id="status_bangunan_value" name="status_bangunan_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->status_bangunan_1a == 1 ? 'selected' : '' ?>>1. Milik sendiri</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->status_bangunan_1a == 2 ? 'selected' : '' ?>>2. Kontrak / sewa</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->status_bangunan_1a == 3 ? 'selected' : '' ?>>3. Bebas sewa / menumpang</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->status_bangunan_1a == 4 ? 'selected' : '' ?>>4. Dinas / tanah kas desa</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->status_bangunan_1a == 5 ? 'selected' : '' ?>>5. Lainnya</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">1b ) Status Lahan Tempat Tinggal yang Ditempati</label>
                  <div class="col-sm-3">
                    <select id="status_lahan_value" name="status_lahan_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1"  <?php echo $selected = $main_keterangan_perumahan->status_lahan_1b == 1 ? 'selected' : '' ?>>1. Milik sendiri</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->status_lahan_1b == 2 ? 'selected' : '' ?>>2. Milik orang lain</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->status_lahan_1b == 3 ? 'selected' : '' ?>>3. Tanah negara</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->status_lahan_1b == 4 ? 'selected' : '' ?>>4. Lainnya</option>
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
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 1 ? 'selected' : '' ?>>1. Marmer / granit</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 2 ? 'selected' : '' ?>>2. Keramik</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 3 ? 'selected' : '' ?>>3. Parket / vinil / karpet</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 4 ? 'selected' : '' ?>>4. Ubin / tegel / teraso</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 5 ? 'selected' : '' ?>>5. Kayu / papan</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 6 ? 'selected' : '' ?>>6. Semen / bata merah</option>
                      <option value="7" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 7 ? 'selected' : '' ?>>7. Bambu</option>
                      <option value="8" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 8 ? 'selected' : '' ?>>8. Tanah</option>
                      <option value="9" <?php echo $selected = $main_keterangan_perumahan->jenis_lantai_3 == 9 ? 'selected' : '' ?>>9. Lainnya</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">4 ) Jenis Dinding Terluas</label>
                  <div class="col-sm-4">
                    <select id="jenis_dinding_value" name="jenis_dinding_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 1 ? 'selected' : '' ?>>1. Tembok</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 2 ? 'selected' : '' ?>>2. Plesteran anyaman bambu / kawat</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 3 ? 'selected' : '' ?>>3. Kayu / papan</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 4 ? 'selected' : '' ?>>4. Anyaman bambu</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 5 ? 'selected' : '' ?>>5. Batang kayu</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 6 ? 'selected' : '' ?>>6. Bambu</option>
                      <option value="7" <?php echo $selected = $main_keterangan_perumahan->jenis_dinding_4a == 7 ? 'selected' : '' ?>>7. Lainnya</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">4b ) Kondisi Dinding</label>
                  <div class="col-sm-4">
                    <select id="kondisi_dinding_value" name="kondisi_dinding_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->kondisi_dinding_4b == 1 ? 'selected' : '' ?>>1. Bagus / kualitas tinggi</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->kondisi_dinding_4b == 2 ? 'selected' : '' ?>>2. Jelek / kualitas rendah</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">5 ) Jenis Atap Terluas</label>
                  <div class="col-sm-4">
                    <select id="jenis_atap_value" name="jenis_atap_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 1 ? 'selected' : '' ?>>1. Beton</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 2 ? 'selected' : '' ?>>2. Genteng</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 3 ? 'selected' : '' ?>>3. Seng</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 4 ? 'selected' : '' ?>>4. Asbes</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 5 ? 'selected' : '' ?>>5. Kayu / sirap</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 6 ? 'selected' : '' ?>>6. Bambu</option>
                      <option value="7" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 7 ? 'selected' : '' ?>>7. Jerami / ijuk / daun-daunan / rumbia</option>
                      <option value="8" <?php echo $selected = $main_keterangan_perumahan->jenis_atap_5a == 8 ? 'selected' : '' ?>>8. Lainnya</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">5b ) Kondisi Atap</label>
                  <div class="col-sm-3">
                    <select id="kondisi_atap_value" name="kondisi_atap_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->kondisi_atap_5b == 1 ? 'selected' : '' ?>>1. Bagus / kualitas tinggi</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->kondisi_atap_5b == 2 ? 'selected' : '' ?>>2. Jelek / kualitas rendah</option>
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
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 1 ? 'selected' : '' ?>>1. Air kemasan bermerk</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 2 ? 'selected' : '' ?>>2. Air isi ulang</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 3 ? 'selected' : '' ?>>3. Leding</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 4 ? 'selected' : '' ?>>4. Sumur bor / pompa</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 5 ? 'selected' : '' ?>>5. Sumur terlindung</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 6 ? 'selected' : '' ?>>6. Sumur tak terlindung</option>
                      <option value="7" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 7 ? 'selected' : '' ?>>7. Mata air terlindung</option>
                      <option value="8" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 8 ? 'selected' : '' ?>>8. Mata air tak terlindung</option>
                      <option value="9" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 9 ? 'selected' : '' ?>>9. Air permukaan (sungai / danau / waduk / kolam / irigasi)</option>
                      <option value="10" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 10 ? 'selected' : '' ?>>10. Air hujan</option>
                      <option value="11" <?php echo $selected = $main_keterangan_perumahan->sumber_airminum_7 == 11 ? 'selected' : '' ?>>11. Lainnya</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">8 ) Cara Memperoleh Air Minum</label>
                  <div class="col-sm-2">
                    <select id="cara_memperoleh_airminum_value" name="cara_memperoleh_airminum_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->cara_memperoleh_airminum_8 == 1 ? 'selected' : '' ?>>1. Membeli eceran</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->cara_memperoleh_airminum_8 == 2 ? 'selected' : '' ?>>2. Langganan</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->cara_memperoleh_airminum_8 == 3 ? 'selected' : '' ?>>3. Tidak membeli</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">9 ) Sumber Penerangan Utama</label>
                  <div class="col-sm-3">
                    <select id="sumber_listrik_value" name="sumber_listrik_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->sumber_listrik_9a == 1 ? 'selected' : '' ?>>1. Listrik PLN meteran</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->sumber_listrik_9a == 2 ? 'selected' : '' ?>>2. Listrik PLN non meteran</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->sumber_listrik_9a == 3 ? 'selected' : '' ?>>3. Listrik non PLN</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->sumber_listrik_9a == 4 ? 'selected' : '' ?>>4. Bukan listrik</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">9b ) Daya Terpasang</label>
                  <div class="col-sm-3">
                    <select id="daya_listrik_value" name="daya_listrik_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 1 ? 'selected' : '' ?>>1. 450 watt</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 2 ? 'selected' : '' ?>>2. 900 watt</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 3 ? 'selected' : '' ?>>3. 1300 watt</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 4 ? 'selected' : '' ?>>4. 2200 watt</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 5 ? 'selected' : '' ?>>5. Lebih dari 2200 watt</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->daya_listrik_9b == 6 ? 'selected' : '' ?>>6. Tanpa meteran</option>
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
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 1 ? 'selected' : '' ?>>1. Listrik</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 2 ? 'selected' : '' ?>>2. Gas 5,5 kg / blue gaz</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 3 ? 'selected' : '' ?>>3. Gas 12 kg</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 4 ? 'selected' : '' ?>>4. Gas 3 kg</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 5 ? 'selected' : '' ?>>5. Gas kota / meteran PGN</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 6 ? 'selected' : '' ?>>6. Biogas</option>
                      <option value="7" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 7 ? 'selected' : '' ?>>7. Minyak tanah</option>
                      <option value="8" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 8 ? 'selected' : '' ?>>8. Briket</option>
                      <option value="9" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 9 ? 'selected' : '' ?>>9. Arang</option>
                      <option value="10" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 10 ? 'selected' : '' ?>>10. Kayu bakar</option>
                      <option value="11" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 11 ? 'selected' : '' ?>>11. Lainnya</option>
                      <option value="12" <?php echo $selected = $main_keterangan_perumahan->energi_untuk_memasak_10 == 12 ? 'selected' : '' ?>>12. Tidak memasak di rumah</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">11 ) Kepemilikan dan Penggunaan Fasilitas Tempat Buang Air Besar</label>
                  <div class="col-sm-4">
                    <select id="status_toilet_value" name="status_toilet_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 1 ? 'selected' : '' ?>>1. Ada, digunakan hanya anggota keluarga sendiri</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 2 ? 'selected' : '' ?>>2. Ada, digunakan bersama anggota keluarga tertentu</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 3 ? 'selected' : '' ?>>3. Ada, di MCK komunal</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 4 ? 'selected' : '' ?>>4. Ada, di MCK umum / siapapun menggunakan</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 5 ? 'selected' : '' ?>>5. Ada, anggota keluarga tidak menggunakan</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->status_toilet_11a == 6 ? 'selected' : '' ?>>6. Tidak ada</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label text-primary">11b ) Jenis Kloset</label>
                  <div class="col-sm-3">
                    <select id="jenis_toilet_value" name="jenis_toilet_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->jenis_toilet_11b == 1 ? 'selected' : '' ?>>1. Leher angsa</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->jenis_toilet_11b == 2 ? 'selected' : '' ?>>2. Plengsengan dengan tutup</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->jenis_toilet_11b == 3 ? 'selected' : '' ?>>3. Plengsengan tanpa tutup</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->jenis_toilet_11b == 4 ? 'selected' : '' ?>>4. Cemplung / cubluk</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-5 col-form-label">12 ) Tempat Pembuangan Akhir Tinja</label>
                  <div class="col-sm-3">
                    <select id="tpa_value" name="tpa_value" class="form-select form-select-sm">
                      <option disabled selected>--- Pilihan ---</option>
                      <option value="1" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 1 ? 'selected' : '' ?>>1. Tangki septik</option>
                      <option value="2" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 2 ? 'selected' : '' ?>>2. IPAL</option>
                      <option value="3" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 3 ? 'selected' : '' ?>>3. Kolam / sawah / sungai / danau / laut</option>
                      <option value="4" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 4 ? 'selected' : '' ?>>4. Lubang tanah</option>
                      <option value="5" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 5 ? 'selected' : '' ?>>5. Pantai / tanah lapang / kebun</option>
                      <option value="6" <?php echo $selected = $main_keterangan_perumahan->tpa_12 == 6 ? 'selected' : '' ?>>6. Lainnya</option>
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