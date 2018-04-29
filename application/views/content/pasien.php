  <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pasien</a>
        </li>
        <li class="breadcrumb-item active">Data Pasien</li>
      </ol>
      <!-- Icon Cards-->
      <a href="<?php echo base_url('Pasien/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Keluhan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
<?php
$row=$this->db->get('pasien');
if ($row->num_rows()>0) {
	$no=0;
	foreach ($row->result() as $rul) {
		$no++;
 ?>
                    <tr>
                <td><?=$no?></td>
                <td><?=$rul->pasien_nis?></td>
                <td><?=$rul->pasien_nisn?></td>
                <td><?=$rul->pasien_nama?></td>
                <td><?=$rul->pasien_jk?></td>
                <td><?=$rul->pasien_kelas?></td>
                <td><?=$rul->pasien_jurusan?></td>
                <td><?=$rul->pasien_alamat?></td>
                <td><?=$rul->pasien_keluhan?></td>
                <td><?=$rul->pasien_status?></td>
                <td>
                  <a href="<?php echo base_url('Pasien/edit/'.$rul->pasien_id);?>" class="btn btn-warning">Edit</a>
                  <a href="<?php echo base_url('Pasien/hapus/'.$rul->pasien_id);?>" class="btn btn-danger" name="hapus">Hapus</a>
                </td>
              </tr>
 <?php
	}
}

 ?>

            </tbody>
          </table>
        </div>

     