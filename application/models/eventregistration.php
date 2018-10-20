<?php
class Eventregistration extends CI_Model 
{
	function saverecords($name,$email,$mobile)
	{
	$query="insert into users values('$User_no','$Username','$Email_address','$Phone_number')";
	$this->db->query($query);
	}
}