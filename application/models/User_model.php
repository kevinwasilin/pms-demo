<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function register($userdata)
	{

		$this->db->insert('user_logins',$userdata);
		return TRUE;

	}
	public function check_login($userlogin)
	{

		$query = $this->db->get_where('user_logins', $userlogin);
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function get_userdata($email)
	{
		$query = $this->db->get_where('user_logins', array('email' => '$email'));
		return $query->$row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */