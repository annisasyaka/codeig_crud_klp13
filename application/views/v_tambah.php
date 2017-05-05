<?php $this->load->view('header');?>
<body>
<div class="container">
<div class="kotak">
<h3>Tambah Data Anggota</h3>
<br>          
<form action="<?php echo base_url(). 'crud/tambah_proses'; ?>" method="post">
	<table class="table table-condensed">
		<tr>
			<td>Id</td>
			<td>
				<input type="text" name="id">	
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama">	
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<input type="text" name="alamat">
			</td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>
				<input type="text" name="umur">
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>
				<input type="text" name="hobi">
			</td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Tambah">
</form>
</div>
</div>
</body>
<?php $this->load->view('footer');?>
</html>