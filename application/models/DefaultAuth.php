<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DefaultAuth extends CI_Model
{	
	public function getAuth()
	{
		$this->db->where('id', 1);
		$result = $this->db->get('default_password')->row();

		return $result->default_password;
	}
}