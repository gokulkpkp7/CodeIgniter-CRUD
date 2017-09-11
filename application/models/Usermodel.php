<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	
	public function saveUserDetails($credentials)
	{
		
		if($this->db->insert('User_details',$credentials)){

			return true;

		}else{

			return false;
		}
	}

	public function updateUserDetails($login_credentials)
	{

		$data = array(
			'password'=>$login_credentials['password']
		);

		$this->db->set($data);
		$this->db->where('email',$login_credentials['email']);

		if($this->db->update('User_details',$data)){

			return true;

		}else{

			return false;
		}
	}

	public function deleteUserDetails($email)
	{

		$this->db->where('email',$email);

		if($this->db->delete('User_details')){

			return true;

		}else{

			return false;
		}
	}

	public function displayUserDetails($credentials)
	{

		$condition = array('email'=>$credentials['email'],'password'=>$credentials['password']);
		$this->db->where($condition);
		
		$query = $this->db->get('User_details');

		if($query){

			foreach ($query->result() as $row)
			{
				$val = (array) $row;

				$session_data = array(
					'Id' => $val['Id'],
	    			'Firstname' => $val['firstname'],
	    			'Lastname' => $val['lastname'],
	    			'Email' => $val['email'],
	    			'Password' => $val['password'],
	    			'Date_of_birth' => $val['dob'],
	    			'Phone' => $val['phone']
				);

				$this->session->set_userdata($session_data);
				return 1;
			}

			
		}else{

			return 0;
		}

	}

	public function searchModel($searchQuery)
	{

		$this->db->like($searchQuery['option'],$searchQuery['term']);
		
		if($query = $this->db->get('User_details')){

			$i = 0;
			$val = array();

			foreach ($query->result() as $row)
			{
				$val[$i]= (array) $row;
				$i++;
			}
			return $val;

		}else{

			return NULL;
		}
	}
}