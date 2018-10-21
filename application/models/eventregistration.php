<?php
class Eventregistration extends CI_Model 
{
	function save ($Username,$Email_address,$Phone_number)
	{
	$query="insert into users (Username, Email_address, Phone_number) values('$Username','$Email_address','$Phone_number')";
	$this->db->query($query);
	}
}