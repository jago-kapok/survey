<?php

class Auth extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
 
	public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('admin/login');
        $this->load->view('templates/footer');
    }
 
	function login(){
		$username = $this->input->post('user_name');
		$password = $this->input->post('user_auth');
		
		$user = $this->db->where('user_name', $username)->get('user')->row();
		
		if(password_verify($password, $user->user_password))
		{
			$data_session = array(
				'user_id'		=> $user->user_id,
				'user_fullname'	=> $user->user_fullname,
				'user_level'	=> $user->user_level,
				'user_name'		=> $user->user_name,
				'user_password'	=> $user->user_password,
				'user_manager'	=> $user->user_manager,
			);
 
			$this->session->set_userdata($data_session);

			redirect(base_url(""));
		} else {
			if(!$user->user_name) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">Username tidak terdaftar !</div>');
				
				redirect(base_url("auth"));
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">Password yang anda masukkan salah !</div>');
				
				redirect(base_url("auth"));
			}
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		session_write_close();
		
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show">Sign out berhasil !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect(base_url("auth"));
	}
}
