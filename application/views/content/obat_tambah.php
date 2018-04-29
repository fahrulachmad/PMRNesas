<!-- <form action="" method="POST"> -->
	<?php echo form_open("Obat/tambah_proses"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah Obat</h3>
</div>
	<div class="form-group">
		<label for="">NAMA OBAT :</label>
		<input type="text" class="form-control" id="" placeholder="" name="obat_nama">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">JUMLAH :</label> <br>
		<input type="number" class="form-control" id="" placeholder="" name="obat_jumlah">
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">KHASIAT OBAT :</label>
		<input type="text" class="form-control" id="" placeholder="" name="obat_khasiat">
		<p class="help-block"></p>
	</div>
		
</div>
</div>
<div class="panel-footer">
	<button type="submit" name="button" value="button" class="btn btn-primary">
		Tambahkan
	</button>
	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		Tambahkan & Kembali
	</button>
	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>