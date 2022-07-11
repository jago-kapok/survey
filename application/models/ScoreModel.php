<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ScoreModel extends CI_Model
{	
	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function getByCondition($where)
	{
		$this->db->select('target.*, pelanggan.noreg_pelanggan, pelanggan.nama_pelanggan, user.nama_user, pelanggan.alamat_pelanggan, pelanggan.tarif, pelanggan.daya, status.ket_status');
        $this->db->from('target');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = target.id_pelanggan');
		$this->db->join('status', 'status.id_status = target.id_status', 'left');
		$this->db->join('user', 'user.id_user = target.id_user', 'left');
		$this->db->where($where);
        
		return $this->db->get();
	}
}