<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_Model extends CI_Model {

	public function getRows()
	{
	   return $this->db->get('users')->results();
	}
}
