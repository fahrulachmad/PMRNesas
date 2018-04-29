<?php

class Login extends CI_Controller {

  function __construct() {
    parent:: __construct();
    $this->load->model('Login_model');

  }
  function index(){
    $this->load->view('login');
  }
  function cek_login(){
    if(isset($_POST['submit'])){
      $user=$this->input->post('user',TRUE);
      $pass=$this->input->post('pass',TRUE);
      $cek=$this->Login_model->proseslogin($user,$pass);
      $hasil=count($cek);
      if ($hasil>0){
        $where=array('user_nama'=>$user,'user_pas'=>$pass);
        $login=$this->db->get_where('user',$where)->row();
        $data=array(
            'nama' =>$login->user_nama ,
            'level' =>$login->user_level ,
            'status' =>'login'
           );
        $this->session->set_userdata($data);
        redirect('Dashboard');

      }else{
        redirect('login');
      }

    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }


}


 ?>
