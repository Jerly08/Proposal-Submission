<?php

class Merek_model extends CI_model
{
	
	public function getAllMerek()
	{
		return $this->db->get('merek')->result_array();
	}
}