<?php $this->load->view('header');?>
<body>
<div class="container">
<div class="kotak">
<h3>Edit Data Anggota</h3>
<br>
<?php foreach ($anggota as $a) { ?>
<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
	<table class="table table-condensed">
		<tr>
			<td>Nama</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $a->id; ?>">
				<input type="text" name="nama" value="<?php echo $a->nama; ?>">	
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<input type="text" name="alamat" value="<?php echo $a->alamat; ?>">
			</td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>
				<input type="text" name="umur" value="<?php echo $a->umur; ?>">
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>
				<input type="text" name="hobi" value="<?php echo $a->hobi; ?>">
			</td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Simpan">
</form>
<?php } ?>
</div>
</div>
</body>
<?php $this->load->view('footer');?>
</html>