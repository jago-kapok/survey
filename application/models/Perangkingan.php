<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkingan extends CI_Model
{
	public function getChart($_select, $_where, $_group_by)
	{
		$this->db->select('kecamatan_id, desa_id, SUM(IF(IFNULL(total_skor, 0) > 15, 1, 0)) AS terisi_lengkap, SUM(IF(IFNULL(total_skor, 0) <= 15, 1, 0)) AS tidak_terisi_lengkap, COUNT(main_id) AS total_survey');
		$this->db->select($_select);
		$this->db->where('status', NULL);
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
		$this->db->where('status', NULL);
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

	public function getTotalSurvey($_where, $_score_limit)
	{
		$this->db->where('status', NULL);
		$this->db->where($_where);
		$this->db->where('IFNULL(total_skor, 0) >=', $_score_limit);
		
		$result = $this->db->get('view_total_skor_fix');

		return $result;
	}

	public function getSurveyNotComplete($_where, $_score_limit_min, $_score_limit_max)
	{
		$this->db->where('status', NULL);
		$this->db->where($_where);
		$this->db->where('IFNULL(total_skor, 0) >=', $_score_limit_min);
		$this->db->where('IFNULL(total_skor, 0) <', $_score_limit_max);
		
		$result = $this->db->get('view_total_skor_fix');

		return $result;
	}

	public function getRecapitulationKec($_score_limit)
	{
		$this->db->select('k.kecamatan, COUNT(v.kecamatan_id) AS count_kecamatan');
		$this->db->where('v.status IS NULL');
		$this->db->where('IFNULL(v.total_skor, 0) >=', $_score_limit);
		$this->db->join('view_total_skor_fix v', 'k.id = v.kecamatan_id', 'left');
		$this->db->group_by('v.kecamatan_id');
		$this->db->order_by('count_kecamatan', 'desc');
		
		$result = $this->db->get('ref_kecamatan k');

		return $result;
	}
}