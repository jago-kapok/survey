<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkingan extends CI_Model
{
	public function getData($_where) {
		$result = $this->db->get_where('view_total_skor_fix', $_where);

		return $result;
	}

	public function getChart($_select, $_where, $_group_by)
	{
		$this->db->select('kecamatan_id, desa_id, SUM(IF(IFNULL(total_skor, 0) > 15, 1, 0)) AS terisi_lengkap, SUM(IF(IFNULL(total_skor, 0) <= 15, 1, 0)) AS tidak_terisi_lengkap, COUNT(main_id) AS total_survey');
		$this->db->select($_select);
		$this->db->where($_where);
		$this->db->join('ref_kecamatan', 'ref_kecamatan.id = view_total_skor_fix.kecamatan_id');
		$this->db->join('ref_desa', 'ref_desa.id = view_total_skor_fix.desa_id');
		$this->db->group_by($_group_by);

		$result = $this->db->get('view_total_skor_fix');

		return $result;
	}

	public function getChartFilter($_column, $_value)
	{
		$this->db->select('kecamatan_id, kecamatan as category, desa_id, SUM(IF(IFNULL(total_skor, 0) > 15, 1, 0)) AS terisi_lengkap, SUM(IF(IFNULL(total_skor, 0) <= 15, 1, 0)) AS tidak_terisi_lengkap, COUNT(main_id) AS total');
		$this->db->join('ref_kecamatan', 'ref_kecamatan.id = view_total_skor_fix.kecamatan_id');
		$this->db->join('ref_desa', 'ref_desa.id = view_total_skor_fix.desa_id');
		$this->db->group_by('kecamatan_id');
		$this->db->order_by($_column, $_value);

		$result = $this->db->get('view_total_skor_fix');

		return $result;
	}

	public function updateStatus($_where)
	{
		$this->db->set('status', 1);
        $this->db->where($_where);
        $this->db->update("view_total_skor_fix");
	}
}