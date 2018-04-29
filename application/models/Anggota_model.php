<?php
class Angggota_model extends CI_Model{
	function getAllData(){
		$this->db->order_by("anggota_nama", "DESC")
		$query = $this->db->get("anggota");
		return $query;
	}
}
?>