<!-- <form action="" method="POST"> -->
	<?php echo form_open("Obat/update"); ?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h3 class="panel-title">Tambah Obat</h3>
</div>
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $obat->obat_id; ?>">
		<label for="">NAMA OBAT :</label>
		<input type="text" class="form-control" id="" placeholder="" name="obat_nama" value="<?php echo $obat->obat_nama; ?>">
		<p class="help-block"></p>
	</div>
	<div class="form-group">
		<label for="">JUMLAH :</label> <br>
		<input type="number" class="form-control" id="" placeholder="" name="obat_jumlah" value="<?php echo $obat->obat_jumlah; ?>">
		<p class="help-block"></p>
	</div>
		<div class="form-group">
		<label for="">KHASIAT OBAT :</label>
		<input type="text" class="form-control" id="" placeholder="" name="obat_khasiat" value="<?php echo $obat->obat_khasiat; ?>">
		<p class="help-block"></p>
	</div>
		
</div>
</div>
<div class="panel-footer">
	<button type="submit" name="button" value="button" class="btn btn-primary">
		SIMPAN
	</button>
	<button type="submit" name="buttonback" value="button" class="btn btn-warning">
		SIMPAN & Kembali
	</button>
	</div>
</div>
<!-- </form> -->
<?php echo form_close(); ?>