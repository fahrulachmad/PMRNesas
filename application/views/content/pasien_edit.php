<form action="<?php echo base_url(). 'pasien/update'; ?>" method="POST">

	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Edit Pasien</h3>
</div>
<input type="hidden" name="id" value="<?php echo $pasien->pasien_id; ?>">
	<div class="panel-body">
		<div class="form-group">
		<label for="">NIS :</label>
                
		<input type="text" class="form-control" placeholder="" name="nis" value="<?php echo $pasien->pasien_nis; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NISN :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nisn" value="<?php echo $pasien->pasien_nisn; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NAMA :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $pasien->pasien_nama; ?>">
		<p class="help-block"></p>
	</div>
	<?php 
if ($pasien->pasien_jk=='L') {
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
		<label for="">KELAS :</label>
		<select class="form-control" name="kelas" value="<?php echo $pasien->pasien_kelas; ?>">
			<option value="X">X</option>
			<option value="XI">XI</option>
			<option value="XII">XII</option>
		</select>
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">JURUSAN :</label><br>
		<input type="text" class="form-control" id="" placeholder="" name="jurusan" value="<?php echo $pasien->pasien_jurusan; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">ALAMAT :</label>
		<textarea class="form-control" id="" placeholder="" name="alamat" rows="4" cols="80"><?php echo $pasien->pasien_alamat; ?></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">KELUHAN :</label>
		<textarea class="form-control" id="" placeholder="" name="keluhan" rows="4" cols="80"><?php echo $pasien->pasien_keluhan; ?></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-group">
			<?php 
if ($pasien->pasien_status=='Disekolah') {
	$a='checked';
	$b=null;
}else{
	$a=null;
	$b='checked';
}

	 ?>
		<label for="">STATUS :</label> <br>
		<input type="radio" id="" placeholder="" name="status" value="Disekolah" <?php echo $a; ?>>Di sekolah
		<input type="radio" id="" placeholder="" name="status" value="Di luar" <?php echo $b; ?>>DI luar
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
</form>
<?php echo form_close(); ?>