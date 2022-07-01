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
        	$survey_hari_ini = $this->db->select('main_id')->where('desa_id', $user_name)->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->select('main_id')->where('desa_id', $user_name)->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->select('main_id')->where('status IS NULL')->where('desa_id', $user_name)->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->where('kecamatan', $user_manager)->get('view_chart_desa')->result_array();

        } else if($this->session->userdata('user_level') == 2) {
        	$survey_hari_ini = $this->db->select('main_id')->where('kecamatan_id', $user_name)->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->select('main_id')->where('kecamatan_id', $user_name)->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->select('main_id')->where('status IS NULL')->where('kecamatan_id', $user_name)->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->where('kecamatan', $user_name)->get('view_chart_desa')->result_array();
        } else {
        	$survey_hari_ini = $this->db->select('main_id')->where("DATE(created_at)", date("Y-m-d"))->get('main_pengenalan_tempat')->result_array();
        	$survey_kemarin = $this->db->select('main_id')->where("DATE(created_at)", date("Y-m-d", strtotime("-1 day")))->get('main_pengenalan_tempat')->result_array();
        	$total_survey = $this->db->select('main_id')->where('status IS NULL')->get('main_pengenalan_tempat')->result_array();

        	$data['grafik_survey'] = $this->db->get('view_chart_kecamatan')->result_array();
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
    }

    public function report()
    {
        $data['title'] = 'Survey Pemutakhiran DTKS - Kab. Bojonegoro';
        $user_level = $this->session->userdata('user_level');

        if($user_level == 1) {
            $data['data_export'] = $this->db->where('user_name', $this->session->userdata('user_name'))->get('user')->result_array();
            $data['ref_kecamatan'] = $this->db->where('id', $this->session->userdata('user_manager'))->get('ref_kecamatan')->result_array();
            $data['ref_desa'] = $this->db->where('id', $this->session->userdata('user_name'))->get('ref_desa')->result_array();
        } else if($user_level == 2) {
            $data['data_export'] = $this->db->where('user_manager', $this->session->userdata('user_name'))->get('user')->result_array();
            $data['ref_kecamatan'] = $this->db->get('ref_kecamatan')->result_array();
            $data['ref_desa'] = $this->db->get('ref_desa')->result_array();
        } else {
            $data['data_export'] = $this->db->order_by('user_manager')->get('user')->result_array();
            $data['ref_kecamatan'] = $this->db->get('ref_kecamatan')->result_array();
            $data['ref_desa'] = $this->db->get('ref_desa')->result_array();
        }

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
				"formatter" => function($d, $row){
					return date("d-m-Y", strtotime($d));
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

        $data['tahap_satu'] = $this->db->where('main_id', $main_id)->get('view_tahap_satu')->row();
        $data['tahap_dua'] = $this->db->where('main_id', $main_id)->get('view_tahap_dua')->row();
        $data['tahap_tiga'] = $this->db->where('main_id', $main_id)->get('view_tahap_tiga')->row();
        $data['tahap_empat'] = $this->db->where('main_id', $main_id)->order_by('no_urut_keluarga')->get('view_tahap_empat')->result_array();
        $data['tahap_lima'] = $this->db->select('main_aset.*')->where('main_id', $main_id)->get('main_aset')->row();
        $data['tahap_lima_detail'] = $this->db->where('main_id', $main_id)->get('view_tahap_lima_detail')->result_array();
        $data['tahap_lima_detail_bantuan'] = $this->db->where('main_id', $main_id)->get('view_tahap_lima_bantuan')->result_array();
        $data['tahap_enam'] = $this->db->select('main_foto_lokasi.*')->where('main_id', $main_id)->get('main_foto_lokasi')->row();

		$tahap1 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_pengenalan_tempat')->result_array();
		$tahap2 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_petugas_dan_responden')->result_array();
		$tahap3 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_perumahan')->result_array();
		$tahap4 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_keterangan_sosial_ekonomi')->result_array();
		$tahap5 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_aset')->result_array();
		$tahap6 = $this->db->select('main_id')->where('main_id', $main_id)->get('main_foto_lokasi')->result_array();

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
			$data['button_lanjut'] = 10;
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

    public function getChart()
    {
    	$value = $this->uri->segment(3);
    	$order = $this->uri->segment(4);

        $column = $value == 'kecamatan' ? 'category' : $value;

    	$result = [];

    	$chart = $this->db->order_by($column, $order)->get('view_chart_kecamatan')->result_array();

        foreach($chart as $value) {
        	$result[] = array(
        		'x' => $value['category'],
        		'y' => $value['total']
        	);
        }

        header('Content-Type: application/json');
        echo json_encode($result, true);
    }
}