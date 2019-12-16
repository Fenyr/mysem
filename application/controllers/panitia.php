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

		$data['judul']=$this->input->post('judul');
		$data['speaker']=$this->input->post('speaker');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['tanggal']=$this->input->post('tanggal');
		$data['foto']=$this->input->post('foto');
		$data['lokasi']=$this->input->post('lokasi');
		$data['fasilitas']=$this->input->post('fasilitas');
		$data['kategori']=$this->input->post('kategori');

		$this->load->library('form_validation');
		$config['file_name'] = $this->mod_panitia->get_next_id_seminar();
        $config['upload_path'] = 'asset/img/upload/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		
		if (!empty($_POST)) {
			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('speaker', 'Speaker', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

			if ($this->form_validation->run() != FALSE) {
				if ($this->upload->do_upload('foto')) {
					$this->mod_panitia->insert_seminar($data['judul'], $data['speaker'], $data['deskripsi'],
						$data['fasilitas'], $data['lokasi'], $data['tanggal'], $config['file_name'].$this->upload->data()['file_ext'], $data['kategori']);
					redirect('panitia');
				}
            }
		}

		$this->load->view("template/header");
		$this->load->view("panitia/tambah",$data);
		$this->load->view("template/footer");
	}
	public function edit($id)
	{
		$data["kt"]=$this->mod_panitia->kt();

		$data['judul']=$this->input->post('judul');
		$data['speaker']=$this->input->post('speaker');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['tanggal']=$this->input->post('tanggal');
		$data['foto']=$this->input->post('foto');
		$data['lokasi']=$this->input->post('lokasi');
		$data['fasilitas']=$this->input->post('fasilitas');
		$data['kategori']=$this->input->post('kategori');

		$this->load->view("template/header");
		$this->load->view("panitia/edit",$data);
		$this->load->view("template/footer");
	}
	public function delete($id, $foto) {
		$this->mod_panitia->delete_seminar($id);
		unlink('asset/img/upload/'.$foto);
		redirect('panitia');
	}
}
?>