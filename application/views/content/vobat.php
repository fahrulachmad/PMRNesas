 <?php $query=$this->db->get('obat'); ?>
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jumlah Obat</th>
                <th>Khasiat Obat</th>
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
              </tr>
		<?php
	}
}
 ?>
                

            </tbody>
          </table>
        </div>
