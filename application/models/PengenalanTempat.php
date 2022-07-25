<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengenalanTempat extends CI_Model
{	
	public function getSurvey($_where)
	{
		$result = $this->db->get_where('main_pengenalan_tempat', $_where);

		return $result;
	}

	public function updateStatus($_where)
	{
		$this->db->set('status', 1);
        $this->db->where($_where);
        $this->db->update("main_pengenalan_tempat");
	}
}