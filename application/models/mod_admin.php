<?php  
class mod_admin extends CI_Model
{
	public $_table='akun';

	public function getall()
	{
		$query=$this->db->get('akun');
		return $query;
	}
	
	public function getlv($id)
	{
		return $this->db->get_where('akun', array('level' => $id));	
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
}
?>