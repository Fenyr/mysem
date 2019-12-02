<?php  
class panitia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_panitia');
		if($this->session->userdata('level') !=2){
			if ($this->session->userdata('level') == 3) {
				redirect('admin');
			}
			else{
				redirect('');
			}
		}

	}
	public function index()
	{
		$id=$this->session->userdata('id');
		$data["sp"]=$this->mod_panitia->getall($id);
		$this->load->view("template/header");
		$this->load->view("panitia",$data);
		$this->load->view("template/footer");
	}
	public function pendaftaran()
	{
		$id=$this->session->userdata('id');
		$data["dp"]=$this->mod_panitia->gettr($id);
		$data["si"]=$this->mod_panitia->getall($id);
		$this->load->view("template/header");
		$this->load->view("panitia/pendaftaran",$data);
		$this->load->view("template/footer");
	}
	public function transaksi($id)
	{
		$data["dp"]=$this->mod_panitia->gettr($id);
		$this->load->view("template/header");
		$this->load->view("panitia/transaksi",$data);
		$this->load->view("template/footer");
	}
	public function batalkan(){
		$id=$this->uri->segment(3);
		$s=$this->uri->segment(4);
		$data = array(
			'status' => '1'
		);
	 
		$where = array(
			'id_user' => $id,
			'id_seminar' => $s
		);
		$this->mod_panitia->update_data($where,$data,'pendaftaran');
		redirect('panitia/transaksi/'.$s);
	}
	public function verifikasi($id){
		$id=$this->uri->segment(3);
		$s=$this->uri->segment(4);
		$data = array(
			'status' => '2'
		);
	 
		$where = array(
			'id_user' => $id,
			'id_seminar' => $s
		);
		$this->mod_panitia->update_data($where,$data,'pendaftaran');
		redirect('panitia/transaksi/'.$s);
	}
	public function tambah()
	{
		$data["kt"]=$this->mod_panitia->kt();
		$this->load->view("template/header");
		$this->load->view("panitia/tambah",$data);
		$this->load->view("template/footer");
	}
	public function edit($id)
	{
		$data["kt"]=$this->mod_panitia->kt();
		$this->load->view("template/header");
		$this->load->view("panitia/edit",$data);
		$this->load->view("template/footer");
	}
}
?>