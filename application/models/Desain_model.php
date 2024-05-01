<?php

class Desain_model extends CI_model
{
	
	public function getAllDesain()
	{
		return $this->db->get('desain')->result_array();
	}
}