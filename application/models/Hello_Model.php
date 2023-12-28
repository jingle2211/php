<?php
class Hello_Model extends CI_Model 
{
	function saverecords($name)
	{
	$query="insert into countries values('','$name')";
	$this->db->query($query);
	}
}