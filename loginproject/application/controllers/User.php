<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();


		$this->load->model("Auth_model", "a"); 
		if($_SESSION['user_logged'] == FALSE){

			$this->session->set_flashdata("error","Please login first to view this page!! ");


			redirect("auth/login");




		}
	}




	public function profile()

	{
		if($_SESSION['user_logged'] == FALSE){

			$this->session->set_flashdata("error","Please login first to view this page!! ");


			redirect("auth/login");
		}
		 $this->load->helper('url');
		$this->load->view('header');
		$this->load->view('profile');
       
		
		
		$this->load->view('footer');




	}

public function home()



	

{
		
	



			if($_SESSION['user_logged'] == FALSE)
			{

			$this->session->set_flashdata("error","Please login first to view this page!! ");


			redirect("auth/login");
		}
		 $this->load->helper('url');
		$this->load->view('header');
		
       $data['message']="";
		$this->load->view('home',$data);

		
		
		$this->load->view('footer');




	}


function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'StudentName'     => $this->input->post('StudentName'),  
                        'MathsMarks'  => $this->input->post('MathsMarks'),  
                        'ScienceMarks'   => $this->input->post('ScienceMarks'),  
                        'EnglishMarks' => $this->input->post('EnglishMarks')  
                        );  
        //insert data into database table.  
        $this->db->insert('studdata',$data);  
  
        redirect("user/home");  
    }  





}



