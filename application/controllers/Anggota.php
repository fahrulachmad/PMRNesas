<?php
	class Anggota extends CI_Controller{
				function tengok(){
			$data['content']='content/vanggota';
			$this->load->view("template",$data);
		}
		public function index(){
			$data['content']='content/anggota';
			$this->load->view("template",$data);

		}
		public function tambah(){
			$data['content']='content/anggota_tambah';
			$this->load->view("template",$data);
		
		}
		public function edit($id){
			$data['anggota']=$this->db->get_where('anggota',['anggota_id'=>$id])->row();
			$data['content']='content/anggota_edit';
			$this->load->view("template",$data);
			
		}
		public function tambah_proses(){

			$nis=$this->input->post('nis');
			$nisn=$this->input->post('nisn');
			$nama=$this->input->post('nama');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$agama=$this->input->post('agama');
			$tmp_lahir=$this->input->post('tmp_lahir');
			$tgl_lahir=$this->input->post('tgl_lahir');
			$alamat=$this->input->post('alamat');
			$no_tlp=$this->input->post('no_tlp');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');

			
				$data=array(
					'anggota_nis'=>$nis,
					'anggota_nisn'=>$nisn,
					'anggota_nama'=>$nama,
					'anggota_jk'=>$jenis_kelamin,
					'anggota_agama'=>$agama,
					'anggota_tmp'=>$tmp_lahir,
					'anggota_tgl'=>$tgl_lahir,
					'anggota_alamat'=>$alamat,
					'anggota_telp'=>$no_tlp
				);
				$insert=$this->db->insert('anggota',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('anggota');
					}else{
						redirect('anggota/tambah');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
}
			function hapus($id){
			$this->db->delete('anggota',['anggota_id'=>$id]);
			redirect('anggota');
		}
		public function update (){

			$id=$this->input->post('id');
			$nis=$this->input->post('nis');
			$nisn=$this->input->post('nisn');
			$nama=$this->input->post('nama');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$agama=$this->input->post('agama');
			$tmp_lahir=$this->input->post('tmp_lahir');
			$tgl_lahir=$this->input->post('tgl_lahir');
			$alamat=$this->input->post('alamat');
			$no_tlp=$this->input->post('no_tlp');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');

			
				$data=array(
					'anggota_nis'=>$nis,
					'anggota_nisn'=>$nisn,
					'anggota_nama'=>$nama,
					'anggota_jk'=>$jenis_kelamin,
					'anggota_agama'=>$agama,
					'anggota_tmp'=>$tmp_lahir,
					'anggota_tgl'=>$tgl_lahir,
					'anggota_alamat'=>$alamat,
					'anggota_telp'=>$no_tlp
				);
				$this->db->where("anggota_id",$id);
				$insert=$this->db->update('anggota',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('anggota');
					}else{
						redirect('anggota/edit');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
		}
}
 	

?>