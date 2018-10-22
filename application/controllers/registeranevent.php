<?php
class Registeranevent extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('registerevents');
	}

	public function index()
	{
		//load registration view form
		$this->load->view('events_insert');
	
		//Check submit button 
		if($this->input->post('submit'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('Event_name');
		$d=$this->input->post('Description');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$this->registeranevent->save($n,$d);		
		echo "Records Saved Successfully";
		}
	}
}
?>