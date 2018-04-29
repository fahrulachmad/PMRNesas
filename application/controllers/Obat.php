<?php
	class Obat extends CI_Controller{
		function tengok(){
			$data['content']='content/vobat';
			$this->load->view("template",$data);
		}
		public function index(){
			$data['content']='content/obat';
			$this->load->view("template",$data);
		}
			public function tambah(){
			$data['content']='content/obat_tambah';
			$this->load->view("template",$data);
		}
		public function tambah_proses(){

			$nama=$this->input->post('obat_nama');
			$jumlah=$this->input->post('obat_jumlah');
			$khasiat=$this->input->post('obat_khasiat');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');

			
				$data=array(
					'obat_nama'=>$nama,
					'obat_jumlah'=>$jumlah,
					'obat_khasiat'=>$khasiat

				);
				$insert=$this->db->insert('obat',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('obat');
					}else{
						redirect('obat/tambah');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
			}
			public function edit($id){
			$data['obat']=$this->db->get_where('obat',['obat_id'=>$id])->row();
			$data['content']='content/obat_edit';
			$this->load->view("template",$data);
			
		}
		function update(){

			$id=$this->input->post('id');
			$nama=$this->input->post('obat_nama');
			$jumlah=$this->input->post('obat_jumlah');
			$khasiat=$this->input->post('obat_khasiat');
			$submit=$this->input->post('buttonback');
			$submit = $this->input->post('submit');

			
				$data=array(
					'obat_nama'=>$nama,
					'obat_jumlah'=>$jumlah,
					'obat_khasiat'=>$khasiat

				);
				$this->db->where('obat_id',$id);
				$insert=$this->db->update('obat',$data);
				if($insert){
					echo "<script>alert('data berhasil ditambahkan');</script>";
					if ($submit=$this->input->post('buttonback')) {
						redirect('obat');
					}else{
						redirect('obat/tambah');
					}
				}else{
					echo "<script>alert('data gagal ditambahkan');</script>";
				}
		}
		function hapus($id){
			$this->db->delete('obat',['obat_id'=>$id]);
			redirect('obat');
		}
	}

?>