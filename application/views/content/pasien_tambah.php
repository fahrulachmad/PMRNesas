<!-- <form action="" method="POST"> -->
	<?php echo form_open("Pasien/tambah_proses"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah Pasien</h3>
</div>
	<div class="panel-body">
		<div class="form-group">
		<label for="">NIS :</label>
		<input type="text" class="form-control" td="" placeholder="" name="nis">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NISN :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nisn">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NAMA :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nama">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">JENIS KELAMIN :</label> <br>
		<input type="radio" id="" placeholder="" name="jenis_kelamin" value="L">Laki-Laki
		<input type="radio" id="" placeholder="" name="jenis_kelamin" value="P">Perempuan
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">KELAS :</label>
		<select class="form-control" name="kelas">
			<option value="X">X</option>
			<option value="XI">XI</option>
			<option value="XII">XII</option>
		</select>
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">JURUSAN :</label><br>
		<input type="text" class="form-control" id="" placeholder="" name="jurusan">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">ALAMAT :</label>
		<textarea class="form-control" id="" placeholder="" name="alamat" rows="4" cols="80"></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">KELUHAN :</label>
		<textarea class="form-control" id="" placeholder="" name="keluhan" rows="4" cols="80"></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">STATUS :</label> <br>
		<input type="radio" id="" placeholder="" name="status" value="Disekolah">Di sekolah
		<input type="radio" id="" placeholder="" name="status" value="Di luar">DI luar
		<p class="help-block"></p>
	</div>
	
</div>
</div>
<div class="panel-footer">
	<button type="submit" name="submit" value="button" class="btn btn-primary">
		Tambahkan
	</button>
	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		Tambahkan & Kembali
	</button>
	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>