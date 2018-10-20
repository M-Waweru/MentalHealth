<?php
class Registerevents extends CI_Model 
{
	function save ($Event_no,$Event_name,$Description)
	{
	$query="insert into events values('$Event_no','$Event_name','$Description')";
	$this->db->query($query);
	}
}