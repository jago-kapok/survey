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

    public function setBatasSkor()
    {
    	$batas_skor = $this->input->post('batas_skor');
    	$jumlah_hasil_skor = $this->input->post('jumlah_hasil_skor');

        $this->session->set_userdata('batas_skor', $batas_skor);
        $this->session->set_userdata('jumlah_hasil_skor', $jumlah_hasil_skor);

        $data['success'] = true;
        $data['message'] = 'Success!';
        
        echo json_encode($data);
    }

    public function getData()
	{
		$this->load->library("datatables_ssp");

		$total_data = $this->db->get('view_total_skor_fix')->num_rows();

		// $_table = "view_total_skor_fix";
		$_limit = $this->session->userdata('jumlah_hasil_skor') != "" ? $this->session->userdata('jumlah_hasil_skor') : $total_data;
		$_limit = (int)$_limit;

		$_table = <<<EOT
			(
			   	SELECT v.kecamatan_id, k.kecamatan, v.desa_id, d.nama_desa, v.no_kk_krt, v.nama_krt, v.total_skor, v.main_id, v.status_lahan, v.luas_lantai, v.kondisi_dinding, v.kondisi_atap, v.jumlah_kamar, v.status
			   	FROM view_total_skor_fix v
			   	JOIN ref_kecamatan k ON v.kecamatan_id = k.id
				JOIN ref_desa d ON v.desa_id = d.id
				LIMIT {$_limit}
			) temp
		EOT;

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
					if($data < 15) {
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
			$_where	= "status IS NULL AND desa_id = ".$this->session->userdata('user_name')." AND IFNULL(total_skor, 0) >= ".$this->session->userdata('batas_skor');
		} else if($this->session->userdata('user_level') == 2) {
			$_where	= "status IS NULL AND kecamatan_id = ".$this->session->userdata('user_name')." AND IFNULL(total_skor, 0) >= ".$this->session->userdata('batas_skor');
		} else {
			$_where = "status IS NULL AND IFNULL(total_skor, 0) >= ".$this->session->userdata('batas_skor');
		}
		
		// $_join	= 'JOIN ref_kecamatan ON view_total_skor_fix.kecamatan_id = ref_kecamatan.id
		// 		  JOIN ref_desa ON view_total_skor_fix.desa_id = ref_desa.id';
		$_join = NULL;

		echo json_encode(
			Datatables_ssp::complex($_GET, $_conn, $_table, $_key, $_coll, $_where, NULL, $_join)
		);
	}

    public function export()
    {
    	$level = $this->session->userdata('user_level');
    	$user_name = $this->session->userdata('user_name');

    	if($level == 1) {
    		$where = array('desa_id' => $user_name);
    	} else if($level == 2) {
    		$where = array('kecamatan_id' => $user_name);
    	} else {
    		$where = array();
    	}

    	$this->db->select('no_kk_krt, nama_krt, nama_desa, kecamatan, total_skor');
    	$this->db->where($where);
    	$this->db->join('ref_desa', 'ref_desa.id = view_total_skor_fix.desa_id', 'left');
    	$this->db->join('ref_kecamatan', 'ref_kecamatan.id = view_total_skor_fix.kecamatan_id', 'left');
    	$this->db->order_by('total_skor', 'desc');
    	$data_skor = $this->db->get('view_total_skor_fix')->result_array();

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

    	$excel->setCellValue('A1', 'FORM REKAPITULASI DATA DAMISDA HASIL PERANGKINGAN');
    	$excel->mergeCells('A1:F1');
    	$excel->getStyle('A1')->getFont()->setBold(true);

    	$excel->getColumnDimension('A')->setWidth(5);
    	$excel->getColumnDimension('B')->setWidth(18);
    	$excel->getColumnDimension('C')->setWidth(35);
    	$excel->getColumnDimension('D')->setWidth(18);
    	$excel->getColumnDimension('E')->setWidth(18);
    	$excel->getColumnDimension('F')->setWidth(18);

        $excel->setCellValue('A3', 'No.');
        $excel->setCellValue('B3', 'Nomor KK');
        $excel->setCellValue('C3', 'Nama Kepala Keluarga');
        $excel->setCellValue('D3', 'Desa');
        $excel->setCellValue('E3', 'Kecamatan');
        $excel->setCellValue('F3', 'Total Skor');

        $excel->getStyle('A3')->applyFromArray($styleHead);
		$excel->getStyle('B3')->applyFromArray($styleHead);
		$excel->getStyle('C3')->applyFromArray($styleHead);
		$excel->getStyle('D3')->applyFromArray($styleHead);
		$excel->getStyle('E3')->applyFromArray($styleHead);
		$excel->getStyle('F3')->applyFromArray($styleHead);

      	$col = 4;
      	$no = 1;
      	
      	foreach($data_skor as $value) {
        	$excel->setCellValue('A' . $col, $no);
            $excel->setCellValue('B' . $col, "'".$value['no_kk_krt']);
            $excel->setCellValue('C' . $col, strtoupper($value['nama_krt']));
            $excel->setCellValue('D' . $col, $value['nama_desa']);
           	$excel->setCellValue('E' . $col, $value['kecamatan']);
           	$excel->setCellValue('F' . $col, $value['total_skor']);

           	$excel->getStyle('A' . $col)->applyFromArray($styleBody);
			$excel->getStyle('B' . $col)->applyFromArray($styleBody);
			$excel->getStyle('C' . $col)->applyFromArray($styleBody);
			$excel->getStyle('D' . $col)->applyFromArray($styleBody);
			$excel->getStyle('E' . $col)->applyFromArray($styleBody);
			$excel->getStyle('F' . $col)->applyFromArray($styleBody);

           	$col++;
           	$no++;
      	}

      	$excel->setTitle("Data Hasil Perangkingan");

	    $writer = new Xlsx($spreadsheet);

	    header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Export_Hasil_Perangkingan.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }
}
