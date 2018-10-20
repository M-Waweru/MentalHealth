<?php
/**
 * 
 */
class Eventregistration extends CI_model
{
	
	public function registerforevent($users){
		$this->db->insert('user', $users)
	}


	
	
}