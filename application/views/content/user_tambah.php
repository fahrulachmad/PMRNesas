<!-- <form action="" method="POST"> -->
	<?php echo form_open("User/simpan"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah User</h3>
<?php $query=$this->db->get('anggota'); ?>
</div>
	<input type="hidden" name="id">
	<div class="panel-body">
	<div class="form-group">
		<label for="">NAMA :</label>
		<select  name="nama" class="form-control">
			<?php 
			if ($query->num_rows()>0) {
				foreach ($query->result() as $napeg) {
				echo	'<option value="'.$napeg->anggota_nama.'">'.$napeg->anggota_nama.'</option>';				}
			}
			 ?>
		</select>
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">PASSWORD :</label>
		<textarea class="form-control" id="" placeholder="" name="password" rows="1" cols="80"></textarea>
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">LEVEL :</label><br>
		<input type="radio" name="level" value="admin">  Admin 
		<input type="radio" name="level" value="User">  User 
		<p class="help-block"></p>
	</div>
	

</div>
</div>
<div class="panel-footer">
	<button type="submit" name="submit" value="button" class="btn btn-primary">
		SIMPAN
	</button>
	<button type="submit" name="button" value="button" class="btn btn-warning">
		Kembali
	</button>
	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>