<?php  
class mod_panitia extends CI_Model
{
	public $_table='akun';
	
	public function getall($id)
	{
		$this->db->join('kategori','kategori.id=seminar.kategori','left')->join('akun','akun.id_user=seminar.create_by','left');
		return $this->db->get_where('seminar', array('create_by' => $id));	
	}
	public function getdet($id)
	{
		$this->db->join('pendaftaran','pendaftaran.id=seminar.id_sem','left');
		return $this->db->get_where('seminar', array('create_by' => $id));	
	}
	public function gettr($id)
	{
		$this->db->join('akun','akun.id_user=pendaftaran.id_user','left')->join('status','status.id=pendaftaran.status','left');
		return $this->db->get_where('pendaftaran', array('id_seminar' => $id));	
	}
	public function getpd($id)
	{
		return $this->db->get_where('pendaftaran', array('id_seminar' => $id, 'status' => '1'));	
	}
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function kt()
	{
		$query=$this->db->get('kategori');
		return $query;
	}
	public function get_next_id_seminar() {
		$query = $this->db->query('SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA="mysem" AND TABLE_NAME ="seminar"');
		return $query->result()[0]->AUTO_INCREMENT;
	}
	public function insert_seminar($judul, $speaker, $deskripsi, $fasilitas, $waktu, $foto, $kategori) {
		$this->db->insert('seminar', array(
			'id_sem' => NULL,
			'judul' => $judul,
			'speaker' => $speaker,
			'deskripsi' => $deskripsi,
			'fasilitas' => $fasilitas,
			'waktu' => $waktu,
			'foto' => $foto,
			'create_by' => $this->session->userdata('id'),
			'kategori' => $kategori
		));
	}
	public function delete_seminar($id) {
		$this->db->delete('seminar', array('id_sem' => $id));

	}
}
?>