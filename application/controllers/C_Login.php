<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->server = "http://localhost/rest_server/index.php/c_login/";
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('formlogin');
		}else{
			$data = array (
				'username' => set_value('username'),
				'password' => md5(set_value('password'))
			);
			$this->curl->simple_post($this->server, $data, array(CURLOPT_BUFFERSIZE => 10));
			$valid_user = json_decode(file_get_contents($this->server.'?username='.$data['username'].'&password='.$data['password']));
			if($valid_user == false){
				$this->session->set_flashdata('error','Maaf, username atau password salah');
				redirect('c_login');
			}else{

				$this->session->set_userdata('username',$valid_user->username);

				redirect('mahasiswa');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_login');	
	}
}
