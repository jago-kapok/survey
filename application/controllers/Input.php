<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('key');
		authentication();
    }

    public function quest()
    {
        $id = $this->uri->segment(3);
        $main_id = $this->key->crypts($this->uri->segment(4), 'd');

        $data['title'] = 'Survey Pemutakhiran DTKS - Kab. Bojonegoro';

        if($id == 1) {
            if($this->session->userdata('user_level') == 1) {
                $data['ref_kecamatan'] = $this->db->where('id', $this->session->userdata('user_manager'))->get('ref_kecamatan')->result_array();
                $data['ref_desa'] = $this->db->where('id', $this->session->userdata('user_name'))->get('ref_desa')->result_array();
            } else {
                $data['ref_kecamatan'] = $this->db->get('ref_kecamatan')->result_array();
                $data['ref_desa'] = $this->db->get('ref_desa')->result_array();
            }
        } else if($id == 4) {
            $data['anggota_keluarga'] = $this->db->where('main_id', $main_id)->get('view_anggota_keluarga')->result_array();
        } else if($id == 5) {
            $data['anggota_keluarga_memiliki_usaha'] = $this->db->select("mkse.id, mkse.nama_anggota, mkse.lapangan_usaha_id, lu.desc as lapangan_usaha")
                                                        ->where("main_id", $main_id)
                                                        ->join("lapangan_usaha lu", "mkse.lapangan_usaha_id = lu.id")
                                                        ->get('main_keterangan_sosial_ekonomi mkse')->result_array();
        } else if($id = 6) {

        }

        $data["main_id"] = $this->key->crypts($main_id, 'e');

        if($main_id != "") {
            $this->load->view('templates/header', $data);
            $this->load->view('input/input-'.$id, $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/404.html');
            $this->load->view('templates/footer');
        }
    }

    public function input1_create()
    {
        $errors = [];
        $data = [];

        $data_post = array(
            'provinsi_id'       => $this->input->post('provinsi_id'),
            'kabupaten_id'      => $this->input->post('kabupaten_id'),
            'kecamatan_id'      => $this->input->post('kecamatan_id'),
            'desa_id'           => $this->input->post('desa_id'),
            'rt'                => $this->input->post('rt'),
            'rw'                => $this->input->post('rw'),
            'dusun'             => $this->input->post('dusun'),
            'alamat'            => $this->input->post('alamat'),
            'no_urut_ruta'      => $this->input->post('no_urut_ruta'),
            'nama_krt'          => $this->input->post('nama_krt'),
            'no_kk_krt'         => $this->input->post('no_kk_krt'),
            'jumlah_art'        => $this->input->post('jumlah_art'),
            'jumlah_keluarga'   => $this->input->post('jumlah_keluarga'),
            'relasi_no_kk'      => $this->input->post('relasi_no_kk'),
            'created_by'        => $this->session->userdata('user_id'),
        );

        $data_post = $this->security->xss_clean($data_post);

        if(empty($this->input->post('kecamatan_id'))) {
            $errors['kecamatan_id'] = 'Silakan pilih kecamatan';
        }

        if(empty($this->input->post('desa_id'))) {
            $errors['desa_id'] = 'Silakan pilih desa / kelurahan';
        }

        if(strlen($this->input->post('rw')) < 3) {
            $errors['rw'] = 'RW harus berisi 3 digit angka';
        }

        if(strlen($this->input->post('rt')) < 3) {
            $errors['rt'] = 'RT harus berisi 3 digit angka';
        }

        if(strlen($this->input->post('no_kk_krt')) < 16) {
            $errors['no_kk_krt'] = 'No. KK harus berisi 16 digit angka';
        }

        if(empty($this->input->post('nama_krt'))) {
            $errors['nama_krt'] = 'Nama Kepala Keluarga harus diisi';
        }

        if(!empty($this->input->post('relasi_no_kk')) && strlen($this->input->post('relasi_no_kk')) < 16) {
            $errors['relasi_no_kk'] = 'Relasi KK harus berisi 16 digit angka';
        }

        $query = $this->db->where('no_kk_krt', $this->input->post('no_kk_krt'))->where('status IS NULL', NULL)->get('main_pengenalan_tempat')->result_array();

        if(count($query) > 0) {
            $errors['no_kk_krt_exist'] = 'No. KK sudah terdaftar';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $this->db->insert('main_pengenalan_tempat', $data_post);
            $main_id = $this->db->insert_id();

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    public function input2_create()
    {
        $errors = [];
        $data = [];

        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $data_post = array(
            'main_id'               => $main_id,
            'tanggal_pencacahan'    => $this->input->post('tanggal_pencacahan'),
            'nama_pencacah'         => $this->input->post('nama_pencacah'),
            'kode_pencacah'         => $this->input->post('kode_pencacah'),
            'tanggal_pemeriksaan'   => $this->input->post('tanggal_pemeriksaan'),
            'nama_pemeriksa'        => $this->input->post('nama_pemeriksa'),
            'kode_pemeriksa'        => $this->input->post('kode_pemeriksa'),
            'hasil_pencacahan'      => $this->input->post('hasil_pencacahan'),
            'bagian_no_ruta'        => $this->input->post('bagian_no_ruta'),
        );

        if(empty($main_id)) {
            $errors['main_id'] = 'Server sibuk ! Mohon refresh browser anda terlebih dahulu !';
        }

        if(empty($this->input->post('tanggal_pencacahan'))) {
            $errors['tanggal_pencacahan'] = 'Tanggal Pencacahan tidak boleh kosong';
        }

        if(empty($this->input->post('nama_pencacah'))) {
            $errors['nama_pencacah'] = 'Nama Pencacah tidak boleh kosong';
        }

        if(empty($this->input->post('tanggal_pemeriksaan'))) {
            $errors['tanggal_pemeriksaan'] = 'Tanggal Pemeriksaan tidak boleh kosong';
        }

        if(empty($this->input->post('nama_pemeriksa'))) {
            $errors['nama_pemeriksa'] = 'Nama Pemeriksa tidak boleh kosong';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $insert = $this->db->insert('main_keterangan_petugas_dan_responden', $data_post);

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    public function input3_create()
    {
        $errors = [];
        $data = [];

        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $data_post = array(
            'main_id'                   => $main_id,
            'status_bangunan_1a'        => $this->input->post('status_bangunan_value'),
            'status_lahan_1b'           => $this->input->post('status_lahan_value'),
            'luas_lantai_2'             => $this->input->post('luas_lantai_value'),
            'jenis_lantai_3'            => $this->input->post('jenis_lantai_value'),
            'jenis_dinding_4a'          => $this->input->post('jenis_dinding_value'),
            'kondisi_dinding_4b'        => $this->input->post('kondisi_dinding_value'),
            'jenis_atap_5a'             => $this->input->post('jenis_atap_value'),
            'kondisi_atap_5b'           => $this->input->post('kondisi_atap_value'),
            'jumlah_kamar_6'            => $this->input->post('jumlah_kamar_value'),
            'sumber_airminum_7'         => $this->input->post('sumber_airminum_value'),
            'cara_memperoleh_airminum_8'=> $this->input->post('cara_memperoleh_airminum_value'),
            'sumber_listrik_9a'         => $this->input->post('sumber_listrik_value'),
            'daya_listrik_9b'           => $this->input->post('daya_listrik_value'),
            'id_pelanggan_9c'           => $this->input->post('id_pelanggan_value'),
            'energi_untuk_memasak_10'   => $this->input->post('energi_untuk_memasak_value'),
            'status_toilet_11a'         => $this->input->post('status_toilet_value'),
            'jenis_toilet_11b'          => $this->input->post('jenis_toilet_value'),
            'tpa_12'                    => $this->input->post('tpa_value'),
        );
        
        if(empty($main_id)) {
            $errors['main_id'] = 'Server sibuk ! Mohon refresh browser anda terlebih dahulu !';
        }

        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $insert = $this->db->insert('main_keterangan_perumahan', $data_post);

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $data["main_id"] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    public function input4_create()
    {
        $errors = [];
        $data = [];

        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $data_post = array(
            'main_id'                   => $main_id,
            'no_urut_keluarga'          => $this->input->post('no_urut_keluarga'),
            'nik_anggota'               => $this->input->post('nik_anggota'),
            'nama_anggota'              => $this->input->post('nama_anggota'),
            'hubungan_rumah_tangga_id'  => $this->input->post('hubungan_rumah_tangga_id'),
            'hubungan_keluarga_id'      => $this->input->post('hubungan_keluarga_id'),
            'jenis_kelamin'             => $this->input->post('jenis_kelamin'),
            'tanggal_lahir'             => $this->input->post('tanggal_lahir'),
            'umur'                      => $this->input->post('umur'),
            'status_perkawinan_id'      => $this->input->post('status_perkawinan_id'),
            'status_kehamilan'          => $this->input->post('status_kehamilan'),
            'penyakit_kronis_id'        => $this->input->post('penyakit_kronis_id'),
            'jenis_disabilitas_id'      => $this->input->post('jenis_disabilitas_id'),
            'apakah_perokok_id'         => $this->input->post('apakah_perokok_id'),
            'partisipasi_sekolah_id'    => $this->input->post('partisipasi_sekolah_id'),
            'jenjang_pendidikan_id'     => $this->input->post('jenjang_pendidikan_id'),
            'kelas_tertinggi'           => $this->input->post('kelas_tertinggi'),
            'ijazah_terakhir_id'        => $this->input->post('ijazah_terakhir_id'),
            'status_bekerja'            => $this->input->post('status_bekerja'),
            'lapangan_usaha_id'         => $this->input->post('lapangan_usaha_id'),
            'jabatan_pekerjaan_id'      => $this->input->post('jabatan_pekerjaan_id'),
            'status_anggota_ruta_id'    => $this->input->post('status_anggota_ruta_id'),
        );

        // $query = $this->db->where("nik_anggota", $this->input->post("nik_anggota"))->get("main_keterangan_sosial_ekonomi")->result_array();

        $query = $this->db->where("nik_anggota", $this->input->post("nik_anggota"))->where('main_pengenalan_tempat.status IS NULL')
                    ->join('main_pengenalan_tempat', 'main_pengenalan_tempat.main_id = main_keterangan_sosial_ekonomi.main_id')
                    ->get("main_keterangan_sosial_ekonomi")->result_array();

        if(count($query) >= 1) {
            $errors["nik_terdaftar"] = "Maaf, NIK sudah terdaftar";
        }

        if(empty($main_id)) {
            $errors['main_id'] = 'Server sibuk ! Mohon refresh browser anda terlebih dahulu !';
        }

        if(strlen($this->input->post('nik_anggota')) < 16) {
            $errors['nik_anggota'] = 'NIK harus berisi 16 digit angka';
        }

        if(empty($this->input->post('nama_anggota'))) {
            $errors['nama_anggota'] = 'Nama anggota keluarga tidak boleh kosong';
        }

        if(empty($this->input->post('hubungan_keluarga_id')) || empty($this->input->post('jenis_kelamin')) || empty($this->input->post('tanggal_lahir')) || empty($this->input->post('status_perkawinan_id')) || empty($this->input->post('partisipasi_sekolah_id')) || empty($this->input->post('status_bekerja')) || empty($this->input->post('status_anggota_ruta_id'))) {
            $errors['empty_message'] = 'Kolom input dengan tanda * tidak boleh kosong';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $insert = $this->db->insert('main_keterangan_sosial_ekonomi', $data_post);

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $data["main_id"] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    public function input5_create()
    {
        $errors = [];
        $data = [];

        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $data_post = array(
            'main_id'           => $main_id,
            'tabung_gas_3kg'    => $this->input->post('tabung_gas_3kg'),
            'tabung_gas_5kg'    => $this->input->post('tabung_gas_5kg'),
            'tabung_gas_12kg'   => $this->input->post('tabung_gas_12kg'),
            'kulkas'            => $this->input->post('kulkas'),
            'ac'                => $this->input->post('ac'),
            'pemanas_air'       => $this->input->post('pemanas_air'),
            'telepon'           => $this->input->post('telepon'),
            'televisi_flat'     => $this->input->post('televisi_flat'),
            'perhiasan_10gr'    => $this->input->post('perhiasan_10gr'),
            'rekening_bank'     => $this->input->post('rekening_bank'),
            'komputer_laptop'   => $this->input->post('komputer_laptop'),
            'sepeda_motor'      => $this->input->post('sepeda_motor'),
            'mobil'             => $this->input->post('mobil'),
            'perahu'            => $this->input->post('perahu'),
            'perahu_motor'      => $this->input->post('perahu_motor'),

            'lahan'             => $this->input->post('lahan'),
            'lahan_luas'        => $this->input->post('lahan_luas'),
            'rumah_lain'        => $this->input->post('rumah_lain'),

            'sapi'              => $this->input->post('sapi'),
            'kerbau'            => $this->input->post('kerbau'),
            'kuda'              => $this->input->post('kuda'),
            'kambing'           => $this->input->post('kambing'),
            'unggas'            => $this->input->post('unggas'),
            'kelinci'           => $this->input->post('kelinci'),
            'perikanan'          => $this->input->post('perikanan'),

            'memiliki_usaha'    => $this->input->post('memiliki_usaha'),
            'estimasi_pengeluaran' => $this->input->post('estimasi_pengeluaran'),
            'estimasi_pengeluaran_non_makanan' => $this->input->post('estimasi_pengeluaran_non_makanan'),
        );

        if(empty($_POST['main_id'])) {
            $errors['main_id'] = 'Server sibuk ! Mohon refresh browser anda terlebih dahulu !';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $insert = $this->db->insert('main_aset', $data_post);

            if(isset($_POST['jenis_bantuan_id']) && $_POST['jenis_bantuan_id'] != "") {
                foreach($_POST['jenis_bantuan_id'] as $key => $value) {
                    $data_batch[] = array(
                        'main_id'           => $main_id,
                        'jenis_bantuan_id'  => $_POST['jenis_bantuan_id'][$key]
                    );
                }

                $insert_batch = $this->db->insert_batch('main_jenis_bantuan', $data_batch);
            }

            if(isset($_POST['nama_id']) && $_POST['main_id'] != "") {
                foreach($_POST['nama_id'] as $key => $value) {
                    $data_batch_usaha[] = array(
                        'main_id'           => $main_id,
                        'nama_id'           => $_POST['nama_id'][$key],
                        'lapangan_usaha_id' => $_POST['lapangan_usaha_id'][$key],
                        'pegawai_dibayar'   => $_POST['pegawai_dibayar'][$key],
                        'pegawai_tidak_dibayar' => $_POST['pegawai_tidak_dibayar'][$key],
                        'registrasi_usaha'  => $_POST['registrasi_usaha'][$key],
                        'omset_perbulan'    => $_POST['omset_perbulan'][$key],
                    );
                }

                $this->db->insert_batch('main_usaha_dimiliki', $data_batch_usaha);
            }

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $data["main_id"] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    public function input6_create()
    {
        $errors = [];
        $data = [];

        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $location = FCPATH."/files/".$main_id;

        if(!file_exists($location)) {
            mkdir($location, 0777);
        }

        if(!$_FILES['files1']['error'] > 0) { 
            $foto1 = $this->upload_file($location, "files1");
        } else {
            $foto1 = "";
        }

        if(!$_FILES['files2']['error'] > 0) { 
            $foto2 = $this->upload_file($location, "files2");
        } else {
            $foto2 = "";
        }

        if(!$_FILES['files3']['error'] > 0) { 
            $foto3 = $this->upload_file($location, "files3");
        } else {
            $foto3 = "";
        }

        if(!$_FILES['files4']['error'] > 0) { 
            $foto4 = $this->upload_file($location, "files4");
        } else {
            $foto4 = "";
        }

        $data_post = array(
            'main_id'   => $main_id,
            'latitude'  => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'foto1'     => $foto1,
            'foto2'     => $foto2,
            'foto3'     => $foto3,
            'foto4'     => $foto4,
        );

        if(empty($this->input->post('main_id'))) {
            $errors['main_id'] = 'Server sibuk ! Mohon refresh browser anda terlebih dahulu !';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $insert = $this->db->insert('main_foto_lokasi', $data_post);

            /* Input skoring */
            $this->skoring($main_id);

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['main_id'] = $data["main_id"] = $this->key->crypts($main_id, 'e');
        }
        
        echo json_encode($data);
    }

    private function upload_file($location, $file)
    {
        $config['upload_path']          = $location;
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = date("ymdhis").rand();
        // $config['overwrite']         = true;
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        $this->upload->do_upload($file);

        return $this->upload->data('file_name');
    }

    public function delete_input4()
    {
        $id      = $this->input->post('id');
        $main_id = $this->input->post('main_id');
        $main_id = $this->key->crypts($main_id, 'd');

        $this->db->delete("main_keterangan_sosial_ekonomi", ["id" => $id]);
        $data['main_id'] = $data["main_id"] = $this->key->crypts($main_id, 'e');
        
        echo json_encode($data);
    }

    public function skoring($main_id)
    {
        /* Input skoring */
        $tahap_satu = $this->db->select('main_id, kecamatan_id, desa_id, rt, rw, no_kk_krt, nama_krt')->where('main_id', $main_id)->get('main_pengenalan_tempat')->row();

        $sum_omset_perbulan = $this->db->select_sum('omset_perbulan')->where('main_id', $main_id)->get('main_usaha_dimiliki')->row();

        if($sum_omset_perbulan) {
            if($sum_omset_perbulan->omset_perbulan > 25000000) {
                $omset_perbulan_skor = 1;
            } else if($sum_omset_perbulan->omset_perbulan > 15000000 && $sum_omset_perbulan->omset_perbulan <= 25000000) {
                $omset_perbulan_skor = 2;
            } else if($sum_omset_perbulan->omset_perbulan >=5000000 && $sum_omset_perbulan->omset_perbulan <= 15000000) {
                $omset_perbulan_skor = 3;
            } else if($sum_omset_perbulan->omset_perbulan < 5000000 && $sum_omset_perbulan->omset_perbulan > 0) {
                $omset_perbulan_skor = 4;
            } else {
                $omset_perbulan_skor = 5;
            }
        } else {
            $omset_perbulan_skor = 5;
        }

        $pengeluaran_perbulan = $this->db->select('estimasi_pengeluaran, estimasi_pengeluaran_non_makanan')->where('main_id', $main_id)->get('main_aset')->row();
        $sum_pengeluaran_perbulan = $pengeluaran_perbulan->estimasi_pengeluaran + $pengeluaran_perbulan->estimasi_pengeluaran_non_makanan;

        if($sum_pengeluaran_perbulan > 400000) {
            $pengeluaran_perbulan_skor = 1;
        } else if($sum_pengeluaran_perbulan <= 400000) {
            $pengeluaran_perbulan_skor = 2;
        } else {
            $pengeluaran_perbulan_skor = 2;
        }

        $sum_bantuan_diterima = $this->db->where('main_id', $main_id)->get('main_jenis_bantuan')->num_rows();

        if($sum_bantuan_diterima < 5){
            $bantuan_diterima_skor = 1;
        } else {
            $bantuan_diterima_skor = 2;
        }

        $tahap_tiga = $this->db->select('
            sb.score AS status_bangunan_skor,
            jl.score AS jenis_lantai_skor,
            jd.score AS jenis_dinding_skor,
            ja.score AS jenis_atap_skor,
            sa.score AS sumber_airminum_skor,
            cm.score AS cara_memperoleh_airminum_skor,
            sl.score AS sumber_listrik_skor,
            em.score AS energi_untuk_memasak_skor,
            st.score AS status_toilet_skor,
            tpa.score AS tpa_skor'
        )->join('status_bangunan sb', 'sb.id = mkp.status_bangunan_1a', 'left')
        ->join('jenis_lantai jl', 'jl.id = mkp.jenis_lantai_3', 'left')
        ->join('jenis_dinding jd', ' jd.id = mkp.jenis_dinding_4a', 'left')
        ->join('jenis_atap ja', 'ja.id = mkp.jenis_atap_5a', 'left')
        ->join('sumber_airminum sa', 'sa.id = mkp.sumber_airminum_7', 'left')
        ->join('cara_memperoleh_airminum cm', 'cm.id = mkp.cara_memperoleh_airminum_8', 'left')
        ->join('sumber_listrik sl', 'sl.id = mkp.sumber_listrik_9a', 'left')
        ->join('energi_untuk_memasak em', 'em.id = mkp.energi_untuk_memasak_10', 'left')
        ->join('status_toilet st', 'st.id = mkp.status_toilet_11a', 'left')
        ->join('tpa', 'tpa.id = mkp.tpa_12', 'left')
        ->where('mkp.main_id', $main_id)
        ->get('main_keterangan_perumahan mkp')->row();

        $skor_lain = $this->db->select('
            mkp.status_lahan_1b AS status_lahan,
            mkp.luas_lantai_2 AS luas_lantai,
            mkp.kondisi_dinding_4b AS kondisi_dinding,
            mkp.kondisi_atap_5b AS kondisi_atap,
            mkp.jumlah_kamar_6 AS jumlah_kamar'
        )->where('main_id', $main_id)->get('main_keterangan_perumahan mkp')->row();

        $skor_40 = $tahap_tiga->status_bangunan_skor + $omset_perbulan_skor + $pengeluaran_perbulan_skor;
        $skor_60 = $tahap_tiga->jenis_lantai_skor + $tahap_tiga->jenis_dinding_skor + $tahap_tiga->jenis_atap_skor + $tahap_tiga->sumber_airminum_skor + $tahap_tiga->cara_memperoleh_airminum_skor + $tahap_tiga->sumber_listrik_skor + $tahap_tiga->energi_untuk_memasak_skor + $tahap_tiga->status_toilet_skor + $tahap_tiga->tpa_skor + $bantuan_diterima_skor;

        $total_skor_40 = ($skor_40 / 12) * 40;
        $total_skor_60 = ($skor_60 / 68) * 60;

        $data_skor = array(
            'main_id'       => $main_id,
            'kecamatan_id'  => $tahap_satu->kecamatan_id,
            'desa_id'       => $tahap_satu->desa_id,
            'rt'            => $tahap_satu->rt,
            'rw'            => $tahap_satu->rw,
            'no_kk_krt'     => $tahap_satu->no_kk_krt,
            'nama_krt'      => $tahap_satu->nama_krt,
            'total_skor'    => $total_skor_40 + $total_skor_60,
            'status_lahan'  => $skor_lain->status_lahan,
            'luas_lantai'   => $skor_lain->luas_lantai,
            'kondisi_dinding'  => $skor_lain->kondisi_dinding,
            'kondisi_atap'  => $skor_lain->kondisi_atap,
            'jumlah_kamar'  => $skor_lain->jumlah_kamar
        );

        $this->db->insert('view_total_skor_fix', $data_skor);
        /* Input Skoring */
    }
}
