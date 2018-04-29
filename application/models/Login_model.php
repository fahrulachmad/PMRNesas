<?php
  class Login_model extends CI_Model{

    public function proseslogin($user,$pass){
      $this->db->where('user_nama',$user);
      $this->db->where('user_pas',$pass);
      return $this->db->get('user')->row();
    }

  }

 ?>
