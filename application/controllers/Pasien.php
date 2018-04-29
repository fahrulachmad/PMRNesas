<?php
	class Pasien extends CI_Controller{
				function tengok(){
			$data['content']='content/vpasien';
			$this->load->view("template",$data);
		}
		public function index(){
			$data['content']='content/pasien';
			$this->load->view("template",$data);
		}
			public function tambah(){
			$data['content']='content/pasien_tambah';
			$this->load->view("template",$data);

		}
		public function edit($id){
			$data['pasien']=$this->db->get_where('pasien',['pasien_id'=>$id])->row();
			$data['content']='content/pasien_edit';
			$this->load->view("template",$data);
			
		}

		public function tambah_proses(){

			$nis=$this->input->post('nis');
			$nisn=$this->input->post('nisn');
			$nama=$this->input->post('nama');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$kelas=$this->input->post('kelas');
			$jurusan=$this->input->post('jurusan');
			$alamat=$this->input->post('alamat');
			$keluhan=$this->input->post('keluhan');
			$status=$this->input->post('status');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');
			$data=array(
					'pasien_nis'=>$nis,
					'pasien_nisn'=>$nisn,
					'pasien_nama'=>$nama,
					'pasien_jk'=>$jenis_kelamin,
					'pasien_kelas'=>$kelas,
					'pasien_jurusan'=>$jurusan,
					'pasien_alamat'=>$alamat,
					'pasien_keluhan'=>$keluhan,
					'pasien_status'=>$status
					
				);
				$insert=$this->db->insert('pasien',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('pasien');
					}else{
						redirect('pasien/tambah');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
			
		}
		function update(){
			$id=$this->input->post('id');
			$nis=$this->input->post('nis');
			$nisn=$this->input->post('nisn');
			$nama=$this->input->post('nama');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$kelas=$this->input->post('kelas');
			$jurusan=$this->input->post('jurusan');
			$alamat=$this->input->post('alamat');
			$keluhan=$this->input->post('keluhan');
			$status=$this->input->post('status');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');
			$data=array(
					'pasien_nis'=>$nis,
					'pasien_nisn'=>$nisn,
					'pasien_nama'=>$nama,
					'pasien_jk'=>$jenis_kelamin,
					'pasien_kelas'=>$kelas,
					'pasien_jurusan'=>$jurusan,
					'pasien_alamat'=>$alamat,
					'pasien_keluhan'=>$keluhan,
					'pasien_status'=>$status
					
				);
			$this->db->where('pasien_id',$id);
				$insert=$this->db->update('pasien',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('pasien');
					}else{
						redirect('pasien/tambah');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
			
		}
		function hapus($id){
			$this->db->delete('pasien',['pasien_id'=>$id]);
			redirect('pasien');
		}
	
}

?>