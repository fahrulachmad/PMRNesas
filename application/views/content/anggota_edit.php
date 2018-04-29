<!-- <form action="" method="POST"> -->
	<?php echo form_open("Anggota/update"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Edit Anggota</h3>
</div>
	<div class="panel-body">
		<input type="hidden" name="id" value="<?php echo $anggota->anggota_id; ?>">
		<div class="form-group">
		<label for="">NIS :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nis" value="<?php echo $anggota->anggota_nis; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NISN :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nisn" value="<?php echo $anggota->anggota_nisn; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NAMA :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $anggota->anggota_nama; ?>">
		<p class="help-block"></p>
	</div>
		<?php 
if ($anggota->anggota_jk=='L') {
	$laki='checked';
	$cwe=null;
}else{
	$laki=null;
	$cwe='checked';
}

	 ?>
	<div class="form-group">
		<label for="">JENIS KELAMIN :</label> <br>
		<input type="radio" id="" placeholder="" name="jenis_kelamin" value="L" <?php echo $laki; ?>>Laki-Laki
		<input type="radio" id="" placeholder="" name="jenis_kelamin" value="P" <?php echo $cwe; ?>>Perempuan
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">AGAMA :</label>
		<select class="form-control" name="agama" value"<?php echo $anggota->anggota_alamat; ?>">
			<option value="Islam">islam</option>
			<option value="Kristen">kristen</option>
			<option value="Katholik">Katholik</option>
			<option value="Konghucu">Konghucu</option>
			<option value="Budha">Budha</option>
			<option value="Hindu">Hindu</option>
		</select>
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">TEMPAT LAHIR :</label><br>
		<input type="text" class="form-control" id="" placeholder="" name="tmp_lahir" value="<?php echo $anggota->anggota_tmp; ?>">
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">TANGGAL LAHIR :</label><br>
		<input type="date" class="form-control" id="" placeholder="" name="tgl_lahir" value="<?php echo $anggota->anggota_tgl; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">ALAMAT :</label>
		<textarea class="form-control" id="" placeholder="" name="alamat"  rows="4" cols="80"><?php echo $anggota->anggota_alamat; ?></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-"<?php echo $anggota->anggota_id; ?>">
		<label for="">NOMER TELEPON :</label>
		<textarea class="form-control" id="" placeholder="" name="no_tlp" cols="80" rows="4"><?php echo $anggota->anggota_telp; ?></textarea>
		<p class="help-block"></p>
	</div>
</div>
</div>
<div class="panel-footer">
	<button type="submit" name="submit" value="button" class="btn btn-primary">
		Tambahkan
	</button>

	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>