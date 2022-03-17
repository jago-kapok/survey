<div class="col-lg-12 mb-2">
  <div data-aos="zoom-in">
    <div class="row">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-kuesioner-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <?php if($button_lanjut != "") { ?>
            <a href="<?= base_url() ?>input/quest/<?php echo $button_lanjut ?>/<?php echo $main_id ?>" class="btn btn-success">
              Lanjutkan Survey
            </a>
          <?php } ?>
          <div class="card mb-2" style="padding: 8px 15px">
            <h6 class="mb-0"><strong>DATA HASIL SURVEY => <?php echo strtoupper($tahap_satu->nama_krt) ?></strong></h6>
          </div>
                
          <div class="card p-4">
            <div class="row">
              <label class="text-primary"><strong>I. PENGENALAN TEMPAT</strong></label>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Provinsi</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: Jawa Timur</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kabupaten / Kota</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: Bojonegoro</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kecamatan</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->kecamatan ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Desa / Kelurahan</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->nama_desa ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Nama SLS</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: RT. <?php echo $tahap_satu->rt ?> / RW. <?php echo $tahap_satu->rw ?> <?php echo $tahap_satu->dusun ?></label>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Alamat <span class="form-text">( Jalan / Gang / No. Rumah )</span></label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->alamat ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">No. Urut Rumah Tangga <span class="form-text">(DTKS2021.MDK Kol. 1)</span></label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->no_urut_ruta ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Nama Kepala Rumah Tangga</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->nama_krt ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Nomor KK</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->no_kk_krt ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jumlah Anggota Rumah Tangga</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_satu->jumlah_art ?></label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <label class="text-primary"><strong>II. KETERANGAN PETUGAS DAN RESPONDEN</strong></label>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tanggal Pencacahan</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->tanggal_pencacahan ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Nama Pencacah</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->nama_pencacah ?> / <?php echo $tahap_dua->kode_pencacah ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tanggal Pemeriksaan</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->tanggal_pemeriksaan ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Nama Pemeriksa</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->nama_pemeriksa ?> / <?php echo $tahap_dua->kode_pemeriksa ?></label>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Hasil Pencacahan Rumah Tangga</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->desc ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Bagian dari Dokumen No.</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_dua->bagian_no_ruta ?></label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <label class="text-primary"><strong>III. KETERANGAN PERUMAHAN</strong></label>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Status Penguasaan Bangunan Tempat Tinggal yang Ditempati</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->status_bangunan ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Status Lahan Tempat Tinggal yang Ditempati</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->status_lahan ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Luas Lantai</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo round($tahap_tiga->luas_lantai_2, 2) ?> m²</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jenis Lantai Terluas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->jenis_lantai ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jenis Dinding Terluas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->jenis_dinding ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kondisi Dinding Terluas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->kondisi_dinding ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jenis Atap Terluas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->jenis_atap ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kondisi Atap Terluas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->kondisi_atap ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jumlah Kamar Tidur</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->jumlah_kamar_6 ?> kamar</label>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Sumber Air Minum</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->sumber_airminum ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Cara Memperoleh Air Minum</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->cara_memperoleh_airminum ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Sumber Listrik</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->sumber_listrik ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Daya Listrik</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->daya_listrik ?> ( ID : <?php echo $tahap_tiga->id_pelanggan_9c ?> )</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Bahan Bakar / Energi Utama untuk Memasak</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->energi_untuk_memasak ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kepemilikan dan Penggunaan Fasilitas Tempat Buang Air Besar</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->status_toilet ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Jenis Kloset</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->jenis_toilet ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tempat Pembuangan Akhir Tinja</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_tiga->tpa ?></label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <label class="text-primary"><strong>IV. KETERANGAN SOSIAL EKONOMI ANGGOTA RUMAH TANGGA</strong></label>

              <div class="col-lg-12 mt-2 table-responsive">
                <table class="table table-bordered table-striped" width="100%">
                  <thead class="bg-light">
                    <tr>
                      <th>No.</th>
                      <th>Data Diri Anggota Keluarga</th>
                      <th>Status</th>
                      <th>Rekam Medis</th>
                      <th>Pendidikan</th>
                      <th>Pekerjaan</th>
                      <th>Status Anggota Ruta</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tahap_empat as $key => $data) {
                      $jenis_kelamin = $data['jenis_kelamin'] == 1 ? 'Laki-Laki' : 'Perempuan';
                    ?>
                      <tr>
                        <td width="5"><?php echo $key + 1 ?></td>
                        <td width="200">
                          <?php echo $data['nik_anggota'] ?><br>
                          <?php echo $data['nama_anggota'] ?><br>
                          <?php echo $data['umur'] ?> tahun<br>
                          <?php echo $data['status_perkawinan'] ?><br>
                        </td>
                        <td class="300">
                          <?php echo $data['hubungan_keluarga'] ?><br>
                          <?php echo $jenis_kelamin ?><br>
                        </td>
                        <td width="400">
                          Penyakit Kronis : <?php echo $data['penyakit_kronis'] ?><br>
                          Disabilitas : <?php echo $data['jenis_disabilitas'] ?><br>
                          Perokok : <?php echo $data['apakah_perokok'] ?><br>
                        </td>
                        <td width="400">
                          Bersekolah : <?php echo $data['partisipasi_sekolah'] ?><br>
                          Jenjang : <?php echo $data['jenjang_pendidikan'] ?><br>
                          Kelas Tertinggi : <?php echo $data['kelas_tertinggi'] ?><br>
                          Ijazah : <?php echo $data['ijazah_terakhir'] ?>
                        </td>
                        <td width="400">
                          Bekerja : <?php echo $data['status_bekerja'] ?><br>
                          Pekerjaan : <?php echo $data['lapangan_usaha'] ?><br>
                          Jabatan : <?php echo $data['jabatan_pekerjaan'] ?>
                        </td>
                        <td>
                          <?php echo $data['status_anggota_ruta'] ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row mt-4">
              <label class="text-primary"><strong>V. KEPEMILIKAN ASET DAN PENGELUARAN</strong></label>

              <label class="mt-2"><b><i>1. Rumah tangga memiliki sendiri aset bergerak sebagai berikut :</i></b></label>

              <div class="row">
              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tabung Gas 3 kg</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->tabung_gas_3kg ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tabung Gas 5,5 kg</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->tabung_gas_5kg ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tabung Gas 12 kg</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->tabung_gas_12kg ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Lemari Es / Kulkas</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->kulkas ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">AC ( <i>Air Conditioner</i> )</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->ac ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Pemanas Air ( <i>Water Heater</i> )</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->pemanas_air ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Telepon Rumah ( PSTN )</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->telepon ?></label>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Televisi Layar Datar (min. 30 inch)</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->televisi_flat ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Emas / Perhiasan (>= 10 gr Emas)</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->perhiasan_10gr ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Rekening Tabungan di Bank (Aktif)</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->rekening_bank ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Komputer / Laptop</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->komputer_laptop ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Sepeda Motor</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->sepeda_motor ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Mobil</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->mobil ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Perahu</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->perahu ?></label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Perahu Motor</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->perahu_motor ?></label>
                  </div>
                </div>
              </div>
              </div>

              <label class="mt-2"><b><i>2. Rumah tangga memiliki aset tidak bergerak sebagai berikut :</i></b></label>

              <div class="row">
              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Lahan / Luas Lahan (m²)</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->lahan ?>
                      <?php
                        if($tahap_lima->lahan == 'Ya') {
                          echo '/ '.round($tahap_lima->lahan_luas, 2).' m²';
                        }
                      ?>
                    </label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Tabung Gas 5,5 kg</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->tabung_gas_5kg ?></label>
                  </div>
                </div>
              </div>
              </div>

              <label class="mt-2"><b><i>3. Jumlah ternak yang dimiliki (ekor) :</i></b></label>

              <div class="row">
              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Sapi</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->sapi ?> ekor</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kerbau</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->kerbau ?> ekor</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kuda</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->kuda ?> ekor</label>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Babi</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->babi ?> ekor</label>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-lg-5 col-form-label">Kambing / Domba</label>
                  <div class="col-lg-6">
                    <label class="col-form-label">: <?php echo $tahap_lima->kambing ?> ekor</label>
                  </div>
                </div>
              </div>
              </div>

              <label class="mt-2"><b><i>4. ART yang memiliki usaha sendiri / bersama :</i></b></label>
              
              <div class="row">
                <div class="col-lg-6">
                  <div class="row mb-0">
                    <label class="col-lg-5 col-form-label">Apakah ada ART yang memiliki usaha sendiri / bersama ?</label>
                    <div class="col-lg-6">
                      <label class="col-form-label">: <?php echo $tahap_lima->memiliki_usaha ?></label>
                    </div>
                  </div>
                </div>
              </div>

              <?php if($tahap_lima->memiliki_usaha == 'Ya') { ?>
                <div class="row m-0 table-responsive">
                  <table class="table table-bordered table-striped" width="100%">
                    <thead class="bg-light">
                      <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Lapangan Usaha</th>
                        <th>Pegawai Dibayar</th>
                        <th>Pegawai Tidak Dibayar</th>
                        <th>Registrasi Usaha</th>
                        <th>Omset Perbulan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($tahap_lima_detail as $key => $data) { ?>
                        <tr>
                          <td width="5"><?php echo $key + 1 ?></td>
                          <td width="200">
                            <?php echo $data['nama_anggota'] ?>
                          </td>
                          <td width="200">
                            <?php echo $data['lapangan_usaha'] ?>
                          </td>
                          <td width="200">
                            <?php echo $data['pegawai_dibayar'] ?>
                          </td>
                          <td width="200">
                            <?php echo $data['pegawai_tidak_dibayar'] ?>
                          </td>
                          <td width="200">
                            <?php echo $data['registrasi_usaha'] ?>
                          </td>
                          <td width="200">
                            Rp <?php echo $data['omset_perbulan'] ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table> 
                </div>
              <?php } ?>

              <label class="mt-2"><b><i>5. Estimasi pengeluaran rumah tangga :</i></b></label>
              
              <div class="row">
                <div class="col-lg-6">
                  <div class="row mb-0">
                    <label class="col-lg-5 col-form-label">Untuk pulsa dan paket data telepon genggam (handphone) setiap bulan (selama 3 bulan terakhir)</label>
                    <div class="col-lg-6">
                      <label class="col-form-label">: Rp <?php echo $tahap_lima->estimasi_pengeluaran ?></label>
                    </div>
                  </div>
                </div>
              </div>

              <label class="mt-2"><b><i>6. Apakah keluarga ini pernah / sedang mendapatkan bantuan sosial atau hibbah pemerintah selama setahun terakhir</i></b></label>
              
              <div class="row mt-2">
                <div class="col-lg-6">
                  <ol>
                    <?php foreach($tahap_lima_detail_bantuan as $key => $data) { ?>
                      <li><?php echo $data['jenis_bantuan'] ?></li>
                    <?php } ?>
                  </ol>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <label class="text-primary"><strong>VI. KOORDINAT LOKASI DAN FOTO RUMAH</strong></label>

              <div class="row">
                <div class="col-lg-6">
                  <div class="row mb-0">
                    <label class="col-lg-5 col-form-label">Koordinat Lokasi</label>
                    <div class="col-lg-6">
                      <label class="col-form-label">
                        : <a href="https://google.com/maps/place/<?php echo $tahap_enam->latitude ?>,<?php echo $tahap_enam->longitude ?> "target="_blank" class="link-success">
                          <i class="bi-geo-alt"></i>&nbsp;<?php echo $tahap_enam->latitude ?>, <?php echo $tahap_enam->longitude ?>
                        </a>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-3 mt-2">
                  <div class="row m-0">
                    <div class="card text-center">
                    <div class="card-body">
                      <img src="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto1 ?>" width="200" />
                    </div>
                    <div class="card-footer text-muted">
                      <a href="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto1 ?>" target="_blank">LIHAT FOTO RUMAH</a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 mt-2">
                  <div class="row m-0">
                    <div class="card text-center">
                    <div class="card-body">
                      <img src="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto2 ?>" width="200" />
                    </div>
                    <div class="card-footer text-muted">
                      <a href="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto2 ?>" target="_blank">LIHAT FOTO RUMAH</a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 mt-2">
                  <div class="row m-0">
                    <div class="card text-center">
                    <div class="card-body">
                      <img src="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto3 ?>" width="200" />
                    </div>
                    <div class="card-footer text-muted">
                      <a href="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto3 ?>" target="_blank">LIHAT FOTO RUMAH</a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 mt-2">
                  <div class="row m-0">
                    <div class="card text-center">
                    <div class="card-body">
                      <img src="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto4 ?>" width="200" />
                    </div>
                    <div class="card-footer text-muted">
                      <a href="<?= base_url() ?>files/<?php echo $main_id ?>/<?php echo $tahap_enam->foto4 ?>" target="_blank">LIHAT FOTO RUMAH</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
      cache   : false,
      contentType : false,
      processData : false,
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