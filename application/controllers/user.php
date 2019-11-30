<?php  
class user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_user');
		if($this->session->userdata('level') !=1 && $this->session->userdata('login')==1 || $this->session->userdata('login')!=0 ){
			if ($this->session->userdata('level') == 2) {
				redirect('panitia');
			}
			else if ($this->session->userdata('level') == 3) {
				redirect('admin');
			}
		}


	}
	
	public function index()
	{
		$data["seminar"]=$this->mod_user->getall();
		$this->load->view("template/header");
		$this->load->view("index",$data);
		$this->load->view("template/footer");
	}
	public function post($id)
	{
		$idt=$this->session->userdata('id');
		$data["sem"]=$this->mod_user->getdat($id);
		$data["daf"]=$this->mod_user->getdaf($idt);
		$this->load->view("template/header");
		$this->load->view("post",$data);
		$this->load->view("template/footer");
	}
	public function daftar(){
		$us=$this->uri->segment(3);
		$is=$this->uri->segment(4);
 
		$data = array(
			'id_user' => $us,
			'id_seminar' => $is,
			'status' => '1'
			);
		$this->mod_user->daftar($data,'pendaftaran');
		redirect('user');
	}
}
?>