<?php
class Registerevents extends CI_Model 
{
	function save ($Event_no,$Event_name,$Description)
	{
	$query="insert into events(Event_no, Event_name, Description) values('$Event_no','$Event_name','$Description')";
	$this->db->query($query);
	}
}