<?php $query=$this->db->get('anggota');?>
  
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
              </tr>
            </thead>
            <tbody>
<?php if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $anggota) {
 $no++;
 ?> 

                    <tr>
                <td>11111111111</td>
                <td><?=$anggota->anggota_nis?></td>
                <td><?=$anggota->anggota_nisn?></td>
                <td><?=$anggota->anggota_nama?></td>
                <td><?=$anggota->anggota_jk?></td>
                <td><?=$anggota->anggota_agama?></td>
                <td><?=$anggota->anggota_tmp?></td>
                <td><?=$anggota->anggota_tgl?></td>
                <td><?=$anggota->anggota_alamat?></td>
                <td><?=$anggota->anggota_telp?></td>
              </tr>

 <?php
  }
} ?>
            </tbody>
          </table>
        </div>
