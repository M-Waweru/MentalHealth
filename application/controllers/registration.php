<?php
class Registration extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('eventregistration');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->view('registration');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('User_no');
		$e=$this->input->post('Username');
		$m=$this->input->post('Email_address');
		$p=$this->input->post('Phone_number');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$this->Hello_Model->saverecords($n,$e,$m,$p);		
		echo "Records Saved Successfully";
		}
	}
}
?>