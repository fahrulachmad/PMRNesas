<!-- <form action="" method="POST"> -->
	<?php echo form_open("Anggota/tambah_proses", ['method'=>'post']); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah Anggota</h3>
</div>
	<div class="panel-body">
		<div class="form-group">
		<label for="">NIS :</label>
		<input type="text" class="form-control" id="" placeholder="" name="nis">
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
		<label for="">AGAMA :</label>
		<select class="form-control" name="agama">
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
		<input type="text" class="form-control" id="" placeholder="" name="tmp_lahir">
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">TANGGAL LAHIR :</label><br>
		<input type="date" class="form-control" id="" placeholder="" name="tgl_lahir">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">ALAMAT :</label>
		<textarea class="form-control" id="" placeholder="" name="alamat" rows="4" cols="80"></textarea>
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">NOMER TELEPON :</label>
		<textarea class="form-control" id="" placeholder="" name="no_tlp" rows="1" cols="80"></textarea>
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