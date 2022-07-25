<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		authentication();

		$this->load->library('key');
		$this->load->model('DefaultAuth');
		$this->load->model('PengenalanTempat');
		$this->load->model('Perangkingan');

		$this->user_name	= $this->session->userdata('user_name');
		$this->user_auth	= $this->session->userdata('user_password');
        $this->user_manager	= $this->session->userdata('user_manager');
		$this->user_level	= $this->session->userdata('user_level');
		$this->batas_skor 	= $this->session->userdata('batas_skor');
    }

    public function index()
    {
    	/* Level Desa */
        if ($this->user_level == 1) {

        	$_where_now			= ['desa_id' => $this->user_name, 'DATE(created_at)' => date('Y-m-d')];
        	$_where_yesterday	= ['desa_id' => $this->user_name, 'DATE(created_at)' => date("Y-m-d", strtotime("-1 day"))];
        	$_where_total		= ['desa_id' => $this->user_name, 'status' => NULL];

        	$survey_hari_ini	= $this->PengenalanTempat->getSurvey($_where_now)->num_rows();
        	$survey_kemarin		= $this->PengenalanTempat->getSurvey($_where_yesterday)->num_rows();
        	$total_survey 		= $this->PengenalanTempat->getSurvey($_where_total)->num_rows();

        	$_select			= ['nama_desa as category'];
        	$_where 			= ['kecamatan_id' => $this->user_manager];
        	$_group_by			= ['desa_id'];
        	$grafik_survey		= $this->Perangkingan->getChart($_select, $_where, $_group_by)->result_array();

        /* Level Kecamatan */
        } else if ($this->user_level == 2) {

        	$_where_now			= ['kecamatan_id' => $this->user_name, 'DATE(created_at)' => date('Y-m-d')];
        	$_where_yesterday	= ['kecamatan_id' => $this->user_name, 'DATE(created_at)' => date("Y-m-d", strtotime("-1 day"))];
        	$_where_total		= ['kecamatan_id' => $this->user_name, 'status' => NULL];

        	$survey_hari_ini	= $this->PengenalanTempat->getSurvey($_where_now)->num_rows();
        	$survey_kemarin		= $this->PengenalanTempat->getSurvey($_where_yesterday)->num_rows();
        	$total_survey 		= $this->PengenalanTempat->getSurvey($_where_total)->num_rows();

        	$_select			= ['nama_desa as category'];
        	$_where 			= ['kecamatan_id' => $this->user_name];
        	$_group_by			= ['desa_id'];
        	$grafik_survey		= $this->Perangkingan->getChart($_select, $_where, $_group_by)->result_array();

        /* Level Kabupaten */
        } else {

        	$_where_now			= ['DATE(created_at)' => date('Y-m-d')];
        	$_where_yesterday	= ['DATE(created_at)' => date("Y-m-d", strtotime("-1 day"))];
        	$_where_total		= ['status' => NULL];

        	$survey_hari_ini	= $this->PengenalanTempat->getSurvey($_where_now)->num_rows();
        	$survey_kemarin		= $this->PengenalanTempat->getSurvey($_where_yesterday)->num_rows();
        	$total_survey 		= $this->PengenalanTempat->getSurvey($_where_total)->num_rows();

        	$_select			= ['kecamatan as category'];
        	$_where 			= [];
        	$_group_by			= ['kecamatan_id'];
        	$grafik_survey		= $this->Perangkingan->getChart($_select, $_where, $_group_by)->result_array();

        }

        $data = [
        	'default_auth'			=> $this->DefaultAuth->getAuth(),
        	'survey_hari_ini'		=> $survey_hari_ini,
        	'survey_kemarin'		=> $survey_kemarin,
        	'total_survey'			=> $total_survey,
        	'perbandingan_survey'	=> $survey_hari_ini - $survey_kemarin,
        	'perbandingan_color'	=> ($survey_hari_ini - $survey_kemarin) < 0 ? 'red' : '#22c55e',
        	'total_survey_persen'	=> $total_survey > 0 ? ($survey_hari_ini / $total_survey) * 100 : 0,
        	'grafik_survey'			=> $grafik_survey
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function report()
    {
    	/* Level Desa */
        if ($this->user_level == 1) {

        	$_where 		= ['desa_id' => $this->user_name];
            $data_export	= $this->db->where('user_name', $this->user_name)->get('user')->result_array();
            $ref_kecamatan	= $this->db->where('id', $this->user_manager)->get('ref_kecamatan')->result_array();
            $ref_desa		= $this->db->where('id', $this->user_name)->get('ref_desa')->result_array();

       /* Level Kecamatan */
        } else if ($this->user_level == 2) {

        	$_where 		= ['kecamatan_id' => $this->user_name];
            $data_export	= $this->db->where('user_manager', $this->user_name)->get('user')->result_array();
            $ref_kecamatan	= $this->db->get('ref_kecamatan')->result_array();
            $ref_desa		= $this->db->get('ref_desa')->result_array();

        /* Level Kabupaten */
        } else {

        	$_where 		= [];
            $data_export	= $this->db->order_by('user_manager')->get('user')->result_array();
            $ref_kecamatan	= $this->db->get('ref_kecamatan')->result_array();
            $ref_desa		= $this->db->get('ref_desa')->result_array();

        }

        $data = [
        	'data_export'	=> $data_export,
        	'ref_kecamatan'	=> $ref_kecamatan,
        	'ref_desa'		=> $ref_desa,
        	'total_survey'	=> $this->Perangkingan->getTotalSurvey($_where, 0)->num_rows()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('admin/report', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js/main');
        $this->load->view('templates/js/export');
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
				"formatter" => function($data, $row) {
					return date("d-m-Y", strtotime($data));
				}
			],
			["db" => "kecamatan",	"dt" => "kecamatan"],
			["db" => "nama_desa",	"dt" => "nama_desa"],
			["db" => "no_kk_krt",	"dt" => "no_kk_krt"],
			["db" => "nama_krt",	"dt" => "nama_krt",
				"formatter" => function($data, $row) {
					return strtoupper($data);
				}
			],
			["db" => "jumlah_art",	"dt" => "jumlah_art"],
			["db" => "main_id",	    "dt" => "main_id"],
		];
		
		/* Level Desa */
		if ($this->user_level == 1) {
			$_where	= "status IS NULL AND main_pengenalan_tempat.desa_id = " . $this->user_name;

		/* Level Kecamatan */
		} else if ($this->user_level == 2) {
			$_where	= "status IS NULL AND main_pengenalan_tempat.kecamatan_id = " . $this->user_name;

		/* Level Kabupaten */
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

        $tahap_satu					= $this->db->where('main_id', $main_id)->get('view_tahap_satu')->row();
        $tahap_dua					= $this->db->where('main_id', $main_id)->get('view_tahap_dua')->row();
        $tahap_tiga					= $this->db->where('main_id', $main_id)->get('view_tahap_tiga')->row();
        $tahap_empat				= $this->db->where('main_id', $main_id)->order_by('no_urut_keluarga')->get('view_tahap_empat')->result_array();
        $tahap_lima					= $this->db->select('main_aset.*')->where('main_id', $main_id)->get('main_aset')->row();
        $tahap_lima_detail			= $this->db->where('main_id', $main_id)->get('view_tahap_lima_detail')->result_array();
        $tahap_lima_detail_bantuan	= $this->db->where('main_id', $main_id)->get('view_tahap_lima_bantuan')->result_array();
        $tahap_enam					= $this->db->select('main_foto_lokasi.*')->where('main_id', $main_id)->get('main_foto_lokasi')->row();

		$tahap1 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_pengenalan_tempat')->num_rows();
		$tahap2 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_petugas_dan_responden')->num_rows();
		$tahap3 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_perumahan')->num_rows();
		$tahap4 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_sosial_ekonomi')->num_rows();
		$tahap5 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_aset')->num_rows();
		$tahap6 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_foto_lokasi')->num_rows();

		if ($tahap1 < 1) { $button_lanjut = 1;
		} else if ($tahap2 < 1) { $button_lanjut = 2;
		} else if ($tahap3 < 1) { $button_lanjut = 3; $tahap_tiga = '';
		} else if ($tahap4 < 1) { $button_lanjut = 4;
		} else if ($tahap5 < 1) { $button_lanjut = 5;
		} else if ($tahap6 < 1) { $button_lanjut = 6;
		} else { $button_lanjut = 10; }

		$data = [
			'main_id'		=> $this->key->crypts($main_id, 'e'),
			'main_id_foto'	=> $main_id,
			'tahap_satu'	=> $tahap_satu,
			'tahap_dua'		=> $tahap_dua,
			'tahap_tiga'	=> $tahap_tiga,
			'tahap_empat'	=> $tahap_empat,
			'tahap_lima'	=> $tahap_lima,
			'tahap_lima_detail' => $tahap_lima_detail,
			'tahap_lima_detail_bantuan' => $tahap_lima_detail_bantuan,
			'tahap_enam'	=> $tahap_enam,
			'button_lanjut'	=> $button_lanjut
		];

	    $this->load->view('templates/header', $data);
	    $this->load->view('view/index', $data);
	    $this->load->view('templates/footer');
	}

	public function changePassword()
	{
		$errors	= [];
        $data 	= [];

        $user_id			= $this->input->post('user_id');
        $new_password		= $this->input->post('new_password');
        $confirm_password	= $this->input->post('confirm_password');

        if ($new_password != $confirm_password) {
            $errors['password_error'] = 'Password Baru dan Password Konfirmasi harus sama !';
        }

        if (strlen($new_password) < 8) {
            $errors['password_error'] = 'Password Baru minimal 8 karakter dengan kombinasi huruf dan angka';
        }

        if (password_verify($new_password, $this->user_auth)) {
        	$errors['password_error'] = 'Password Baru tidak boleh sama dengan password sebelumnya';
        }
        
        if (!empty($errors)) {
            $res_success = false;
            $res_errors	 = $errors;
            $res_message = false;
        } else {
        	$password_hash = password_hash($new_password, PASSWORD_BCRYPT);

        	$this->db->set('user_password', $password_hash);
        	$this->db->where('user_id', $user_id);
        	$this->db->update('user');

        	$this->session->set_userdata('user_password', $password_hash);

            $res_success = true;
            $res_errors  = false;
            $res_message = 'Success!';
        }

        $data = [
        	'success' => $res_success,
        	'errors'  => $res_errors,
        	'message' => $res_message
        ];
        
        echo json_encode($data);
	}

	public function delete_data()
    {
        $main_id = $this->uri->segment(3);

		if (!empty($errors)) {
            $res_success = false;
            $res_errors	 = $errors;
            $res_message = false;
        } else {
        	$this->PengenalanTempat->updateStatus(['main_id' => $main_id]);
        	$this->Perangkingan->updateStatus(['main_id' => $main_id]);

        	$res_success = true;
            $res_errors  = false;
            $res_message = 'Success!';
        }

        $data = [
        	'success' => $res_success,
        	'errors'  => $res_errors,
        	'message' => $res_message,
        	'id'	  => $main_id
        ];
        
        echo json_encode($data);
    }

    public function getChart()
    {
    	$result 	= [];
    	$value		= $this->uri->segment(3);
    	$order 		= $this->uri->segment(4);
        $column 	= $value == 'kecamatan' ? 'category' : $value;    	

    	$chart		= $this->Perangkingan->getChartFilter($column, $order)->result_array();

        foreach($chart as $value) {
        	$result[] = array(
        		'x' => $value['category'],
        		'y' => $value['terisi_lengkap'],
        		'z' => $value['tidak_terisi_lengkap']
        	);
        }

        header('Content-Type: application/json');
        echo json_encode($result, true);
    }

    public function score()
    {
    	$batas_skor_min	= $this->batas_skor >= 15 ? $this->batas_skor : 0;
    	$batas_skor 	= $this->batas_skor >= 15 ? $this->batas_skor : 15;

    	/* Level Desa */
    	if ($this->user_level == 1) {
			
			$_where 				= ['desa_id' => $this->user_name];

			$total_survey			= $this->Perangkingan->getTotalSurvey($_where, $batas_skor_min)->num_rows();
	    	$terisi_lengkap 		= $this->Perangkingan->getTotalSurvey($_where, $batas_skor)->num_rows();
	    	$tidak_terisi_lengkap	= $this->Perangkingan->getSurveyNotComplete($_where, $batas_skor_min, $batas_skor)->num_rows();

	    /* Level Kecamatan */
		} else if ($this->user_level == 2) {

			$_where 				= ['kecamatan_id' => $this->user_name];

			$total_survey			= $this->Perangkingan->getTotalSurvey($_where, $batas_skor_min)->num_rows();
	    	$terisi_lengkap 		= $this->Perangkingan->getTotalSurvey($_where, $batas_skor)->num_rows();
	    	$tidak_terisi_lengkap	= $this->Perangkingan->getSurveyNotComplete($_where, $batas_skor_min, $batas_skor)->num_rows();

	    /* Level Kabupaten */
		} else {

			$_where 				= [];

			$total_survey			= $this->Perangkingan->getTotalSurvey($_where, $batas_skor_min)->num_rows();
	    	$terisi_lengkap 		= $this->Perangkingan->getTotalSurvey($_where, $batas_skor)->num_rows();
	    	$tidak_terisi_lengkap	= $this->Perangkingan->getSurveyNotComplete($_where, $batas_skor_min, $batas_skor)->num_rows();

		}

		$data = [
			'total_survey'			=> $total_survey,
			'terisi_lengkap'		=> $terisi_lengkap,
			'tidak_terisi_lengkap'	=> $tidak_terisi_lengkap,
			'rekapitulasi_kecamatan'=> $this->Perangkingan->getRecapitulationKec($batas_skor)->result_array(),
			'total_hasil_skor'		=> $this->Perangkingan->getTotalSurvey($_where, 0)->num_rows()
		];
		
    	$this->load->view('templates/header', $data);
        $this->load->view('score/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js/score');
    }
}