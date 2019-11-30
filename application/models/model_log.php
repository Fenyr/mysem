<?php  
class model_log extends CI_Model
{
	
	public function ver($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$arr['username']=$username;
		$arr['password']=$password;
		$query=$this->db->get_where('akun',$arr);
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sar= array('id' => $row->id_user,
					'username' => $row->username,
					'password' => $row->password,
					'level' => $row->level,
					'login' => 1);
		}
		$this->session->set_userdata($sar);
		$lvl=$this->session->userdata('level');
		if ($lvl == 3) {
			redirect('admin');
		}
		else if ($lvl == 3) {
			redirect('panitia');
		}
		else{
			redirect('');
		}
		}
		$this->session->set_userdata($sar);
		$lvl=$this->session->userdata('level');
		if ($lvl == 3) {
			redirect('admin');
		}
		else{
			redirect('auth');
		}
	}
}
?>