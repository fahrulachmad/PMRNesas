<!-- <form action="" method="POST"> -->
	<?php echo form_open("User/update"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah User</h3>
</div>
	<input type="hidden" name="id" value="<?php echo $user->user_id; ?>">
	<div class="panel-body">
	<div class="form-group">
		<label for="">NAMA :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $user->user_nama; ?>">
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">PASSWORD :</label>
		<textarea class="form-control" id="" placeholder="" name="password" rows="1" cols="80"><?php echo $user->user_pas; ?></textarea>
		<p class="help-block"></p>
	</div>

	<?php 
	if ($user->user_level=='admin') {
	 	$a='checked';
	 	$b=null;
	 }else{
	 	$a=null;
	 	$b='checked';

	 } ?>
			<div class="form-group">
		<label for="">LEVEL :</label><br>
		<input type="radio" name="level" value="admin" <?=$a?>>  Admin 
		<input type="radio" name="level" value="User" <?=$b?>>  User 
		<p class="help-block"></p>
	</div>
	

</div>
</div>
<div class="panel-footer">
	<button type="submit" name="submit" value="button" class="btn btn-primary">
		SIMPAN
	</button>
	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		SIMPAN & Kembali
	</button>
	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>