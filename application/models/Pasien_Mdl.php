<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Mdl extends CI_Model {
function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
	

}

/* End of file Pasien_Mdl.php */
/* Location: ./application/models/Pasien_Mdl.php */