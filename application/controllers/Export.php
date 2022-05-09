<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/libraries/phpspreadsheet/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{	
    public function __construct()
    {
        parent::__construct();
    }

    public function data_kk()
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

    public function data_anggota()
    {
    	$desa_id = $this->uri->segment(3);
    	$desa = $this->db->where('id', $desa_id)->get('ref_desa')->row();

    	$data_kk = $this->db->select('no_kk_krt, nik_anggota, nama_anggota, nama_desa, kecamatan')
    				->where('desa_id', $desa_id)->where('main_pengenalan_tempat.status IS NULL')
    				->join('main_pengenalan_tempat', 'main_pengenalan_tempat.main_id = main_keterangan_sosial_ekonomi.main_id', 'right')
    				->join('ref_desa', 'ref_desa.id = main_pengenalan_tempat.desa_id')
    				->join('ref_kecamatan', 'ref_kecamatan.id = main_pengenalan_tempat.kecamatan_id')
    				->get('main_keterangan_sosial_ekonomi')->result_array();

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

    	$excel->setCellValue('A1', 'FORM REKAPITULASI DATA DAMISDA BERDASARKAN ANGGOTA KELUARGA');
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
        $excel->setCellValue('C3', 'NIK Anggota Keluarga');
        $excel->setCellValue('D3', 'Nama Anggota Keluarga');
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
            $excel->setCellValue('D' . $col, strtoupper($value['nama_anggota']));
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
		header('Content-Disposition: attachment;filename="'.$desa->nama_desa.'_Anggota_KK.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
    }
}
