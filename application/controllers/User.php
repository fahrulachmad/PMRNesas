<?php
	class User extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('level') != 'admin') {
				redirect('404');
			}
		}
		function tengok(){
			$data['content']='content/vuser';
			$this->load->view("template",$data);
		}
			public function index(){
			$data['content']='content/user';
			$this->load->view("template",$data);
		}
		public function tambah(){
			$data['content']='content/user_tambah';
			$this->load->view("template",$data);

		}
		public function simpan(){
			$nama=$this->input->post('nama');
			$password=$this->input->post('password');
			$level=$this->input->post('level');
			$data=array(
				'user_nama'=>$nama,
				'user_pas'=>$password,
				'user_level'=>$level
			);
			if ($this->db->insert('user',$data)) {
				redirect('user');
			}

		}
		public function edit($id){
			$data['user']=$this->db->get_where('user',['user_id'=>$id])->row();
			$data['content']='content/user_edit';
			$this->load->view("template",$data);
			
		}
		public function update(){
			$id=$this->input->post('id');
			$nama=$this->input->post('nama');
			$password=$this->input->post('password');
			$level=$this->input->post('level');
			$data=array(
				'user_nama'=>$nama,
				'user_pas'=>$password,
				'user_level'=>$level
			);
			$this->db->where('user_id',$id);
			if ($this->db->update('user',$data)) {
				redirect('user');
			}
		}
		function hapus($id){
			$this->db->delete('user',['user_id'=>$id]);
			redirect('user');
	}
}
?>