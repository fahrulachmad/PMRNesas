 <?php $query=$this->db->get('obat'); ?>
  <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Obat</a>
        </li>
        <li class="breadcrumb-item active">Data Obat</li>
      </ol>
      <!-- Icon Cards-->
   <a href="<?php echo base_url('Obat/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jumlah Obat</th>
                <th>Khasiat Obat</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
<?php 

if ($query->num_rows()>0) {
	$no=0;
	foreach ($query->result() as $obat) {$no++;
		?>
    <tr>
                <td><?=$no?></td>
                <td><?=$obat->obat_nama?></td>
                <td><?=$obat->obat_jumlah?></td>
                <td><?=$obat->obat_khasiat?></td>
                <td>
                  <a href="<?=base_url('obat/edit/'.$obat->obat_id)?>" class="btn btn-warning"  name="edit" >Edit</a>
                  <a href="<?=base_url('obat/hapus/'.$obat->obat_id)?>" class="btn btn-danger" name="hapus">Hapus</a>
                </td>
              </tr>
		<?php
	}
}
 ?>
                

            </tbody>
          </table>
        </div>

     