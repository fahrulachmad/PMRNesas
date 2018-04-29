<?php $query=$this->db->get('user');?>
  <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">User</a>
        </li>
        <li class="breadcrumb-item active">Data User</li>
      </ol>
      <!-- Icon Cards-->

    <a href="<?php echo base_url('User/tambah'); ?>" class="btn btn-success">Tambah Data User</a>
    
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
                

              </tr>
            </thead>
            <tbody>
<?php if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $user) {
 $no++;
 ?> 

                    <tr>
                <td><?=$no?></td>
                <td><?=$user->user_nama?></td>
                <td><?=$user->user_pas?></td>
                <td><?=$user->user_level?></td>
                
                <td>
                  <a href="<?php echo base_url('user/edit/'.$user->user_id);?>" class="btn btn-warning" name="edit" >Edit</a>
                  <a href="<?php echo base_url('user/hapus/'.$user->user_id);?>" class="btn btn-danger" name="hapus">Hapus</a>
                </td>
              </tr>

 <?php
 }
} ?>
            </tbody>
          </table>
        </div>
