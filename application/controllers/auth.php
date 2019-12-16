<?php  
class auth extends CI_Controller
{
	
	public function index()
	{
		$this->load->view("template/auth_header");
		$this->load->view("auth/login");
		$this->load->view("template/auth_footer");
	}
	public function ceklog(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->load->model('model_log');
		$this->model_log->ver($username,$password);
	}
	public function regis()
	{
		$this->load->model('model_log');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['passwordv']=$this->input->post('passwordv');
		

		$this->load->library('form_validation');
		$this->load->library('upload');

		if (!empty($_POST)) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passwordv', 'Password Ulang', 'required|matches[password]');


			if ($this->form_validation->run() != FALSE) {
				$this->model_log->insert_peserta($data['username'],$data['password']);
					redirect('auth/index');
				}
            }
		

		$this->load->view("template/auth_header");
		$this->load->view("auth/regis",$data);
		$this->load->view("template/auth_footer");
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
?>