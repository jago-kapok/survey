<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('key');
		authentication();
    }

    public function index()
    {
        $data['title'] = 'Survey Pemutakhiran DTKS - Kab. Bojonegoro';

        $user_name = $this->session->userdata('user_name');
        $user_manager = $this->session->userdata('user_manager');

        $data['pass'] = $this->db->where('id', 1)->get('default_password')->row();

        if($this->session->userdata('user_level') == 1) {
        	$survey_hari_ini = $this->db->where('desa_id', $user_name)->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->where('desa_id', $user_name)->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->where('status IS NULL')->where('desa_id', $user_name)->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->select('ref_desa.nama_desa as category, COUNT(*) as total')->where('status IS NULL')
        	->join('ref_desa', 'main_pengenalan_tempat.desa_id = ref_desa.id AND main_pengenalan_tempat.kecamatan_id = '.$user_manager)
        	->order_by('ref_desa.nama_desa')->group_by('main_pengenalan_tempat.desa_id')->get('main_pengenalan_tempat')->result_array();

        } else if($this->session->userdata('user_level') == 2) {
        	$survey_hari_ini = $this->db->where('kecamatan_id', $user_name)->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->where('kecamatan_id', $user_name)->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->where('status IS NULL')->where('kecamatan_id', $user_name)->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->select('ref_desa.nama_desa as category, COUNT(*) as total')->where('status IS NULL')
        	->join('ref_desa', 'ref_desa.id = main_pengenalan_tempat.desa_id AND main_pengenalan_tempat.kecamatan_id ='.$user_name)
        	->order_by('ref_desa.nama_desa')->group_by('main_pengenalan_tempat.desa_id')->get('main_pengenalan_tempat')->result_array();
        } else {
        	$survey_hari_ini = $this->db->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->where('status IS NULL')->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->select('ref_kecamatan.kecamatan as category, COUNT(*) as total')->where('status IS NULL')
        	->join('ref_kecamatan', 'ref_kecamatan.id = main_pengenalan_tempat.kecamatan_id')
        	->order_by('ref_kecamatan.kecamatan')->group_by('main_pengenalan_tempat.kecamatan_id')->get('main_pengenalan_tempat')->result_array();
        }

        $data['survey_hari_ini'] = count($survey_hari_ini);
        $data['perbandingan_sekarang_kemarin'] = count($survey_hari_ini) - count($survey_kemarin);
        $data['perbandingan_color'] = (count($survey_hari_ini) - count($survey_kemarin)) < 0 ? 'red' : '#22c55e';
        $data['total_survey'] = count($total_survey);

        if(count($total_survey) > 0) {
        	$data['total_survey_persen'] = (count($survey_hari_ini) / count($total_survey)) * 100;
        } else {
        	$data['total_survey_persen'] = 0;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js/main');
    }

    public function getData()
	{
		$this->load->library("datatables_ssp");
		$_table = "main_pengenalan_tempat";
		$_conn 	= [
			"user" 	=> $this->db->username,
			"pass" 	=> $this->db->password,
			"db" 	=> $this->db->database,
			"host" 	=> $this->db->hostname,
			"port" 	=> $this->db->port
		];
		$_key	= "main_id";
		$_coll	= [
			["db" => "created_at",	"dt" => "created_at",
				"formatter" => function($d, $row){
					return date("d-m-Y", strtotime($d));
				}
			],
			["db" => "kecamatan",	"dt" => "kecamatan"],
			["db" => "nama_desa",	"dt" => "nama_desa"],
			["db" => "no_kk_krt",	"dt" => "no_kk_krt"],
			["db" => "nama_krt",	"dt" => "nama_krt"],
			["db" => "jumlah_art",	"dt" => "jumlah_art"],

			["db" => "main_id",	    "dt" => "main_id"],
		];
		
		if($this->session->userdata('user_level') == 1) {
			$_where	= "status IS NULL AND main_pengenalan_tempat.desa_id = ".$this->session->userdata('user_name');
		} else if($this->session->userdata('user_level') == 2) {
			$_where	= "status IS NULL AND main_pengenalan_tempat.kecamatan_id = ".$this->session->userdata('user_name');
		} else {
			$_where = "status IS NULL";
		}
		
		$_join	= "JOIN ref_kecamatan ON main_pengenalan_tempat.kecamatan_id = ref_kecamatan.id
				  JOIN ref_desa ON main_pengenalan_tempat.desa_id = ref_desa.id";

		echo json_encode(
			Datatables_ssp::complex($_GET, $_conn, $_table, $_key, $_coll, $_where, NULL, $_join)
		);
	}

	public function view()
	{
		$main_id = $this->uri->segment(3);

		$data['title'] = 'Survey Pemutakhiran DTKS - Kab. Bojonegoro';

        $data['tahap_satu'] = $this->db->where('main_id', $main_id)
        						->join('ref_kecamatan', 'ref_kecamatan.id = main_pengenalan_tempat.kecamatan_id')
        						->join('ref_desa', 'ref_desa.id = main_pengenalan_tempat.desa_id')
        						->get('main_pengenalan_tempat')->row();

        $data['tahap_dua'] = $this->db->select("main_keterangan_petugas_dan_responden.*, hasil_pencacahan.desc as hasil_pencacahan")
                                ->where('main_id', $main_id)
        						->join('hasil_pencacahan', 'hasil_pencacahan.id = main_keterangan_petugas_dan_responden.hasil_pencacahan')
        						->get('main_keterangan_petugas_dan_responden')->row();

        $data['tahap_tiga'] = $this->db->select('m.*, status_bangunan.desc as status_bangunan, status_lahan.desc as status_lahan, jenis_lantai.desc as jenis_lantai, jenis_dinding.desc as jenis_dinding, kondisi_dinding.desc as kondisi_dinding, jenis_atap.desc as jenis_atap, kondisi_atap.desc as kondisi_atap, sumber_airminum.desc as sumber_airminum, cara_memperoleh_airminum.desc as cara_memperoleh_airminum, sumber_listrik.desc as sumber_listrik, daya_listrik.desc as daya_listrik, energi_untuk_memasak.desc as energi_untuk_memasak, status_toilet.desc as status_toilet, jenis_toilet.desc as jenis_toilet, tpa.desc as tpa')
        						->where('main_id', $main_id)
        						->join('status_bangunan', 'status_bangunan.id = m.status_bangunan_1a', 'left')        						
        						->join('status_lahan', 'status_lahan.id = m.status_lahan_1b', 'left')
        						->join('jenis_lantai', 'jenis_lantai.id = m.jenis_lantai_3', 'left')
        						->join('jenis_dinding', 'jenis_dinding.id = m.jenis_dinding_4a', 'left')
        						->join('kondisi_dinding', 'kondisi_dinding.id = m.kondisi_dinding_4b', 'left')
        						->join('jenis_atap', 'jenis_atap.id = m.jenis_atap_5a', 'left')
        						->join('kondisi_atap', 'kondisi_atap.id = m.kondisi_atap_5b', 'left')
        						->join('sumber_airminum', 'sumber_airminum.id = m.sumber_airminum_7', 'left')
        						->join('cara_memperoleh_airminum', 'cara_memperoleh_airminum.id = m.cara_memperoleh_airminum_8', 'left')
        						->join('sumber_listrik', 'sumber_listrik.id = m.sumber_listrik_9a', 'left')
        						->join('daya_listrik', 'daya_listrik.id = m.daya_listrik_9b', 'left')
        						->join('energi_untuk_memasak', 'energi_untuk_memasak.id = m.energi_untuk_memasak_10', 'left')
        						->join('status_toilet', 'status_toilet.id = m.status_toilet_11a', 'left')
        						->join('jenis_toilet', 'jenis_toilet.id = m.jenis_toilet_11b', 'left')
        						->join('tpa', 'tpa.id = m.tpa_12', 'left')
        						->get('main_keterangan_perumahan m')->row();

        $data['tahap_empat'] = $this->db->select('mse.*, hubungan_keluarga.desc as hubungan_keluarga, status_perkawinan.desc as status_perkawinan, penyakit_kronis.desc as penyakit_kronis, jenis_disabilitas.desc as jenis_disabilitas, apakah_perokok.desc as apakah_perokok, partisipasi_sekolah.desc as partisipasi_sekolah, jenjang_pendidikan.desc as jenjang_pendidikan, ijazah_terakhir.desc as ijazah_terakhir, lapangan_usaha.desc as lapangan_usaha, jabatan_pekerjaan.desc as jabatan_pekerjaan, status_anggota_ruta.desc as status_anggota_ruta')
        						->where('main_id', $main_id)
        						->join('hubungan_keluarga', 'hubungan_keluarga.id = mse.hubungan_keluarga_id', 'left')
        						->join('status_perkawinan', 'status_perkawinan.id = mse.status_perkawinan_id', 'left')
        						->join('penyakit_kronis', 'penyakit_kronis.id = mse.penyakit_kronis_id', 'left')
        						->join('jenis_disabilitas', 'jenis_disabilitas.id = mse.jenis_disabilitas_id', 'left')
        						->join('apakah_perokok', 'apakah_perokok.id = mse.apakah_perokok_id', 'left')
        						->join('partisipasi_sekolah', 'partisipasi_sekolah.id = mse.partisipasi_sekolah_id', 'left')
        						->join('jenjang_pendidikan', 'jenjang_pendidikan.id = mse.jenjang_pendidikan_id', 'left')
        						->join('ijazah_terakhir', 'ijazah_terakhir.id = mse.ijazah_terakhir_id', 'left')
        						->join('lapangan_usaha', 'lapangan_usaha.id = mse.lapangan_usaha_id', 'left')
        						->join('jabatan_pekerjaan', 'jabatan_pekerjaan.id = mse.jabatan_pekerjaan_id', 'left')
        						->join('status_anggota_ruta', 'status_anggota_ruta.id = mse.status_anggota_ruta_id', 'left')
        						->get('main_keterangan_sosial_ekonomi mse')->result_array();
        
        $data['tahap_lima'] = $this->db->select('main_aset.*')
                                ->where('main_id', $main_id)
                                // ->join('estimasi_pengeluaran', 'estimasi_pengeluaran.id = main_aset.estimasi_pengeluaran')
        						->get('main_aset')->row();

        $data['tahap_lima_detail'] = $this->db->select('mud.*, mkse.nama_anggota as nama_anggota, lapangan_usaha.desc as lapangan_usaha')
                                ->where('mud.main_id', $main_id)
                                ->join('main_keterangan_sosial_ekonomi mkse', 'mkse.id = mud.nama_id', 'left')
                                ->join('lapangan_usaha', 'lapangan_usaha.id = mud.lapangan_usaha_id', 'left')
        						->get('main_usaha_dimiliki mud')->result_array();

        $data['tahap_lima_detail_bantuan'] = $this->db->select('main_jenis_bantuan.*, jenis_bantuan.desc as jenis_bantuan')
                                ->where('main_id', $main_id)
                                ->join('jenis_bantuan', 'jenis_bantuan.id = main_jenis_bantuan.jenis_bantuan_id')
        						->get('main_jenis_bantuan')->result_array();

        $data['tahap_enam'] = $this->db->select('main_foto_lokasi.*')
                                ->where('main_id', $main_id)
        						->get('main_foto_lokasi')->row();

		$tahap1 = $this->db->where('main_id', $main_id)->get('main_pengenalan_tempat')->result_array();
		$tahap2 = $this->db->where('main_id', $main_id)->get('main_keterangan_petugas_dan_responden')->result_array();
		$tahap3 = $this->db->where('main_id', $main_id)->get('main_keterangan_perumahan')->result_array();
		$tahap4 = $this->db->where('main_id', $main_id)->get('main_keterangan_sosial_ekonomi')->result_array();
		$tahap5 = $this->db->where('main_id', $main_id)->get('main_aset')->result_array();
		$tahap6 = $this->db->where('main_id', $main_id)->get('main_foto_lokasi')->result_array();

		if(count($tahap1) < 1) {
			$data['button_lanjut'] = 1;
		} else if(count($tahap2) < 1) {
			$data['button_lanjut'] = 2;
		} else if(count($tahap3) < 1) {
			$data['button_lanjut'] = 3;
			$data['tahap_tiga'] = '';
		} else if(count($tahap4) < 1) {
			$data['button_lanjut'] = 4;
		} else if(count($tahap5) < 1) {
			$data['button_lanjut'] = 5;
		} else if(count($tahap6) < 1) {
			$data['button_lanjut'] = 6;
		} else {
			$data['button_lanjut'] = "";
		}

		$data["main_id"] = $this->key->crypts($main_id, 'e');
		$data["main_id_foto"] = $main_id;

	    $this->load->view('templates/header', $data);
	    $this->load->view('view/index', $data);
	    $this->load->view('templates/footer');
	}

	public function changePassword()
	{
		$errors = [];
        $data = [];

        $user_id = $this->input->post('user_id');

        if($this->input->post('new_password') != $this->input->post('confirm_password')) {
            $errors['password_error'] = 'Password Baru dan Password Konfirmasi harus sama !';
        }

        if(strlen($this->input->post('new_password')) < 8) {
            $errors['password_error'] = 'Password Baru minimal 8 karakter dengan kombinasi huruf dan angka';
        }

        if(password_verify($this->input->post('new_password'), $this->session->userdata('user_password'))) {
        	$errors['password_error'] = 'Password Baru tidak boleh sama dengan password sebelumnya';
        }
        
        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
        	$password_hash = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);

        	$this->db->set('user_password', $password_hash);
        	$this->db->where('user_id', $user_id);
        	$this->db->update('user');

        	$this->session->set_userdata('user_password', $password_hash);

            $data['success'] = true;
            $data['message'] = 'Success!';
        }
        
        echo json_encode($data);
	}

	public function delete_data()
    {
        // $id = $this->input->post('main_id');
        $id = $this->uri->segment(3);

		if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
        	$this->db->set('status', 1);
        	$this->db->where('main_id', $id);
        	$this->db->update("main_pengenalan_tempat");

            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['id'] = $id;
        }
        
        echo json_encode($data);
    }
}