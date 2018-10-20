<?php
class Eventregistration extends CI_Model 
{
	function save ($User_no,$Username,$Email_address,$Phone_number)
	{
	$query="insert into users values('$User_no','$Username','$Email_address','$Phone_number')";
	$this->db->query($query);
	}
}