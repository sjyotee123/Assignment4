<?php

class Auth extends CI_Controller
{





	public function logout()
	{

		unset($_SESSION);
		session_destroy();
		redirect("auth/login", "refresh");
	}




	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		   if($this->form_validation->run() == TRUE){
		   		
		   		$username = $_POST['username'];
		   		$password = md5($_POST['password']);


		   		//CHECK USER IN DATABASE

		   		$this->db->select('*');
		   		$this->db->from('users');
		   		$this->db->where(array('username' => $username, 'password' => $password));
		   		$query = $this->db->get();
		   		$user = $query->row();
		   		// if user exists

		   		if ($user->username){

		   			//temporary message
		   			$this->session->set_flashdata("Success", "You are logged in");


		   			//set session variables

		   			$_SESSION['user_logged'] = TRUE;
		   			$_SESSION['username'] = $user->username;
		   				//redirect to profile page

		   			redirect("user/profile","refresh");

		   		} else{
		   			$this->session->set_flashdata("error", "No such account exists in the database");
		   			redirect("auth/login","refresh");

		   		}

		   }




		$this->load->view('login');





	}


public function register()
{

	if(isset($_POST['register']))
	{

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('password2','Confirm Password','required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('phone','Mobile No','required|max_length[10]');
//if form validation true
		if($this->form_validation->run()==TRUE)
		{
//echo 'form validated';
//add user in database
			$data = array(

			'username'=>$_POST['username'],
			'email'=>$_POST['email'],
			'password'=>md5($_POST['password']),
			'gender'=>$_POST['gender'],
			'createddate'=> date('Y-m-d'),
			'phone'=>$_POST['phone']
				);

			$this->db->insert('users', $data);
			$this->session->set_flashdata("success","Your account has been registered. You can login now.");
			redirect("auth/register","refresh");

		}
	}



		//load view
		$this->load->view('register');
}












}

?>