<?php  
class mod_user extends CI_Model
{
	public $_table='akun';

	public function getall()
	{
		$this->db->select('*')->from('seminar')->join('kategori','kategori.id=seminar.kategori')->join('akun','akun.id_user=seminar.create_by');
		$query=$this->db->get();
		return $query;
	}
	
	public function getdat($id)
	{
		$this->db->join('kategori','kategori.id=seminar.kategori','left')->join('akun','akun.id_user=seminar.create_by','left');
		$query=$this->db->get_where('seminar', array('id_sem' => $id));	
		return $query;
	}
	public function getdaf($id)
	{
		$query=$this->db->get_where('pendaftaran',array('id_user' => $id));
		return $query;
	}
	public function daftar($data,$table){
		$this->db->insert($table,$data);
	}
 
}
?>