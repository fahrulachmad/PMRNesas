<?php $query=$this->db->get('anggota');?>
  <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Anggota</a>
        </li>
        <li class="breadcrumb-item active">Data Anggota</li>
      </ol>
      <!-- Icon Cards-->

    <a href="<?php echo base_url('Anggota/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Nama </th>
                <th>JK</th>
                <th>Agama</th>
                <th>Tmpt Lahir</th>
                <th>Tgl Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Ket</th>
              </tr>
            </thead>
            <tbody>
<?php if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $anggota) {
 $no++;
 ?> 

                    <tr>
                <td><?=$no?></td>
                <td><?=$anggota->anggota_nis?></td>
                <td><?=$anggota->anggota_nisn?></td>
                <td><?=$anggota->anggota_nama?></td>
                <td><?=$anggota->anggota_jk?></td>
                <td><?=$anggota->anggota_agama?></td>
                <td><?=$anggota->anggota_tmp?></td>
                <td><?=$anggota->anggota_tgl?></td>
                <td><?=$anggota->anggota_alamat?></td>
                <td><?=$anggota->anggota_telp?></td>
                <td>
                  <a href="<?php echo base_url('anggota/edit/'.$anggota->anggota_id);?>" class="btn btn-warning" name="edit" >Edit</a>
                  <a href="<?php echo base_url('anggota/hapus/'.$anggota->anggota_id);?>" class="btn btn-danger" name="hapus">Hapus</a>
                </td>
              </tr>

 <?php
  }
} ?>
            </tbody>
          </table>
        </div>
