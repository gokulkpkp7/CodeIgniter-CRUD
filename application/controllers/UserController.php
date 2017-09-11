<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	

	public function registerUser() //Function to register a new user
	{
		
		if($this->input->post()){

			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$dob = $this->input->post('dob');

			$credentials = array(
				'firstname' => $firstname,
				'lastname' => $lastname,
				'email' => $email,
				'password' => $password,
				'phone' => $phone,
				'dob' => $dob
			);

			if($this->usermodel->saveUserDetails($credentials)){
				
				$this->load->view('success');
			
			}else{

				$this->load->view('failure');
			}

		}else{

			$this->load->view('signup');	
		}
	}



	public function changePassword() //Function to change password of a user
	{

		if($this->input->post()){
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$login_credentials = array(
				'email' => $email,
				'password' => $password
			);

			if($this->usermodel->updateUserDetails($login_credentials)){

				$this->load->view('pwd_chng_success');
			}

		}else{

			$this->load->view('change');
		}	
	}

	public function deleteUser() //Function to delete user
	{

		if($this->input->post()){
			
			$email = $this->input->post('email');

			if($this->usermodel->deleteUserDetails($email)){

				$this->load->view('delete_success');
			}
		}else{

			$this->load->view('delete');
		}	
	}

	public function displayUserProfile() //Function to display details of a user
	{

		$ses = $this->session->userdata('Id');

		if(isset($ses)){

			$this->load->view('display');

		}

		elseif($this->input->post()){
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$credentials = array(
				'email'=> $email,
				'password'=> $password
			);

			
			$ret = $this->usermodel->displayUserDetails($credentials);

			if($ret != 0){

				$this->load->view('display');

			}else{
				
				$data =array('value'=>1);
				$this->load->view('login',$data);
			}	
		}else{

			redirect('login');
		}

	}

	public function search() //Function to search with a wildcard
	{

		if($this->input->post()){

			$term = $this->input->post('term');
			$option = $this->input->post('drop');

			$searchQuery = array(
				'term'=>$term,
				'option'=> $option
			);


			if($this->usermodel->searchModel($searchQuery) != NULL){

				$searcharray['result'] = $this->usermodel->searchModel($searchQuery);
				$this->load->view('searchresult',$searcharray);		

			}else{

				$data =array('value'=>1);
				$this->load->view('search',$data);
			}

		}else{

			$data =array('value'=>0);
			$this->load->view('search',$data);
		}
	}

	public function loginUser()
	{

		$ses = $this->session->userdata('Id');

		if(isset($ses)){
			
			redirect('profile');

		}else{

			$data =array('value'=>0);
			$this->load->view('login',$data);
		}

	}

	public function logout() //Function to log out a user
	{

		$sessarray = $this->session->all_userdata();
		
		foreach ($sessarray as $key => $value) {

			$this->session->unset_userdata('$key');
		}
		
		$this->session->sess_destroy();
		
		redirect('login');
	}
}