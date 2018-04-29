<?php $query=$this->db->get('user');?>
	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                

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
              </tr>

 <?php
 }
} ?>
            </tbody>
          </table>
        </div>
