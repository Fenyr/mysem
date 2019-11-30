<?php  
class admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_admin');
		if($this->session->userdata('level') !=3){
			redirect('auth');
		}

	}
	public function index()
	{
		$data["ps"]=$this->mod_admin->getlv(1);
		$data["pn"]=$this->mod_admin->getlv(2);
		$this->load->view("template/adm_head");
		$this->load->view("admin/admin",$data);
		$this->load->view("template/adm_foot");
	}
	
	public function add(){
		$us = $this->input->post('us');
		$pw = md5($this->input->post('pw'));
 
		$data = array(
			'username' => $us,
			'password' => $pw,
			'level' => 1
			);
		$this->mod_admin->input_data($data,'akun');
		redirect('admin/tp');
	}
	public function delete($id){
		$where = array('id_user' => $id);
		$this->mod_admin->hapus_data($where,'akun');
		redirect('admin/tp');
	}

	public function update(){
	$id = $this->input->post('id');
	$us = $this->input->post('username');
	$pw = md5($this->input->post('password'));

	$data = array(
		'username' => $us,
		'password' => $pw
	);
 
	$where = array(
		'id_user' => $id
	);
 
	$this->mod_admin->update_data($where,$data,'akun');
	redirect('admin/tp');
	}

	public function reset($id){
		$pw = md5(0000);
		$data = array(
			'password' => $pw
		);
	 
		$where = array(
			'id_user' => $id
		);
		$this->mod_admin->update_data($where,$data,'akun');
		redirect('admin/tp');
	}

	public function tp()
	{

		$data["akun"]=$this->mod_admin->getlv(1);
		$this->load->view("template/adm_head");
		$this->load->view("admin/table",$data);
		$this->load->view("template/adm_foot");
	}
	public function tu()
	{
		$data["akun"]=$this->mod_admin->getlv(2);
		$this->load->view("template/adm_head");
		$this->load->view("admin/table", $data);
		$this->load->view("template/adm_foot");
	}
	public function sm()
	{
		$this->load->view("template/adm_head");
		$this->load->view("admin/seminar");
		$this->load->view("template/adm_foot");
	}
}
?>