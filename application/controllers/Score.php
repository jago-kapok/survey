<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/libraries/phpspreadsheet/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Score extends CI_Controller
{	
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$user_level = $this->input->post('user_level');

    	$this->load->view('templates/header');
        $this->load->view('score/index');
        $this->load->view('templates/footer');
        $this->load->view('templates/js/score');
    }

    public function getData()
	{
		$this->load->library("datatables_ssp");
		$_table = "view_total_skor_fix";
		$_conn 	= [
			"user" 	=> $this->db->username,
			"pass" 	=> $this->db->password,
			"db" 	=> $this->db->database,
			"host" 	=> $this->db->hostname,
			"port" 	=> $this->db->port
		];
		$_key	= "main_id";
		$_coll	= [
			["db" => "kecamatan",	"dt" => "kecamatan"],
			["db" => "nama_desa",	"dt" => "nama_desa"],
			["db" => "no_kk_krt",	"dt" => "no_kk_krt"],
			["db" => "nama_krt",	"dt" => "nama_krt",
				"formatter" => function($data, $row) {
					return strtoupper($data);
				}
			],
			["db" => "total_skor",	"dt" => "total_skor",
				"formatter" => function($data, $row) {
					return number_format($data, 2, '.', '');
				}
			],
			["db" => "total_skor",	"dt" => "keterangan",
				"formatter" => function($data, $row) {
					if($data < 20) {
						return "<span class='text-danger'>Tidak Terisi Lengkap</span>";
					} else {
						return "";
					}
				}
			],

			["db" => "main_id",	    	"dt" => "main_id"],
			["db" => "status_lahan",	"dt" => "status_lahan"],
			["db" => "luas_lantai",	   	"dt" => "luas_lantai"],
			["db" => "kondisi_dinding",	"dt" => "kondisi_dinding"],
			["db" => "kondisi_atap",	"dt" => "kondisi_atap"],
			["db" => "jumlah_kamar",	"dt" => "jumlah_kamar"],
		];
		
		if($this->session->userdata('user_level') == 1) {
			$_where	= "desa_id = ".$this->session->userdata('user_name');
		} else if($this->session->userdata('user_level') == 2) {
			$_where	= "kecamatan_id = ".$this->session->userdata('user_name');
		} else {
			$_where = NULL;
		}
		
		$_join	= NULL;

		echo json_encode(
			Datatables_ssp::complex($_GET, $_conn, $_table, $_key, $_coll, $_where, NULL, $_join)
		);
	}

    public function export()
    {
    	$desa_id = $this->uri->segment(3);
    	$desa = $this->db->where('id', $desa_id)->get('ref_desa')->row();

    	$data_kk = $this->db->select('no_kk_krt, nik_anggota, nama_krt, nama_desa, kecamatan')
    				->where('desa_id', $desa_id)->where('main_pengenalan_tempat.status IS NULL')
    				->join('ref_desa', 'ref_desa.id = main_pengenalan_tempat.desa_id')
    				->join('ref_kecamatan', 'ref_kecamatan.id = main_pengenalan_tempat.kecamatan_id')
    				->join('main_keterangan_sosial_ekonomi', 'main_keterangan_sosial_ekonomi.main_id = main_pengenalan_tempat.main_id AND main_keterangan_sosial_ekonomi.hubungan_keluarga_id = 1', 'left')
    				->get('main_pengenalan_tempat')->result_array();

    	$spreadsheet = new Spreadsheet;
    	$excel = $spreadsheet->getActiveSheet();

    	$styleHead = [
		    'font' => [
		        'bold' => true,
		    ],
		    'borders' => [
		        'allBorders' => [
		            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		        ],
		    ],
		    'fill' => [
		        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
		        'startColor' => [
		            'argb' => 'CECECE',
		        ],
		    ],
		];

		$styleBody = [
		    'borders' => [
		        'allBorders' => [
		            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		        ],
		    ]
		];

    	$excel->setCellValue('A1', 'FORM REKAPITULASI DATA DAMISDA BERDASARKAN KK');
    	$excel->mergeCells('A1:F1');
    	$excel->getStyle('A1')->getFont()->setBold(true);

    	$excel->getColumnDimension('A')->setWidth(5);
    	$excel->getColumnDimension('B')->setWidth(18);
    	$excel->getColumnDimension('C')->setWidth(20);
    	$excel->getColumnDimension('D')->setWidth(35);
    	$excel->getColumnDimension('E')->setWidth(18);
    	$excel->getColumnDimension('F')->setWidth(18);

        $excel->setCellValue('A3', 'No.');
        $excel->setCellValue('B3', 'Nomor KK');
        $excel->setCellValue('C3', 'NIK Kepala Keluarga');
        $excel->setCellValue('D3', 'Nama Kepala Keluarga');
        $excel->setCellValue('E3', 'Desa');
        $excel->setCellValue('F3', 'Kecamatan');

        $excel->getStyle('A3')->applyFromArray($styleHead);
		$excel->getStyle('B3')->applyFromArray($styleHead);
		$excel->getStyle('C3')->applyFromArray($styleHead);
		$excel->getStyle('D3')->applyFromArray($styleHead);
		$excel->getStyle('E3')->applyFromArray($styleHead);
		$excel->getStyle('F3')->applyFromArray($styleHead);

      	$col = 4;
      	$no = 1;
      	
      	foreach($data_kk as $value) {
        	$excel->setCellValue('A' . $col, $no);
            $excel->setCellValue('B' . $col, "'".$value['no_kk_krt']);
            $excel->setCellValue('C' . $col, "'".$value['nik_anggota']);
            $excel->setCellValue('D' . $col, strtoupper($value['nama_krt']));
            $excel->setCellValue('E' . $col, $value['nama_desa']);
           	$excel->setCellValue('F' . $col, $value['kecamatan']);

           	$excel->getStyle('A' . $col)->applyFromArray($styleBody);
			$excel->getStyle('B' . $col)->applyFromArray($styleBody);
			$excel->getStyle('C' . $col)->applyFromArray($styleBody);
			$excel->getStyle('D' . $col)->applyFromArray($styleBody);
			$excel->getStyle('E' . $col)->applyFromArray($styleBody);
			$excel->getStyle('F' . $col)->applyFromArray($styleBody);

           	$col++;
           	$no++;
      	}

      	$excel->setTitle(strtoupper($desa->nama_desa));

	    $writer = new Xlsx($spreadsheet);

	    header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$desa->nama_desa.'_KK.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }
}
