<?php 

class Database extends CI_Model
{
	
	public function GetData()
	{
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function GetSingleData($id)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}

	public function UpdateUserdata($data, $id)
	{
		return $this->db->where('id', $id)
			   ->update('users', $data);
	}

	
	public function DeleteUserData($id)
	{
		return $this->db->delete('users', ['id'=>$id]);
	}

}


 ?>