<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Anggota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/desainjson.css">
  <script src="assets/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<br>
<body background="assets/back3.jpg">
<br>
<div class="container">
<div class="kotak">
<h3>Data Anggota</h3>
<br>          
<table class="table table-condensed">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Umur</th>
		<th>Hobi</th>
		<th>Aksi</th>
	</tr>

	<?php
	$no = 1;
	foreach ($anggota as $a){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->nama ?></td>
			<td><?php echo $a->alamat?></td>
			<td><?php echo $a->umur ?></td>
			<td><?php echo $a->hobi ?></td>
			<td>
			<?php echo anchor('crud/edit/'.$a->id, 'Edit'); ?>
			<?php echo anchor('crud/hapus/'.$a->id, 'Hapus'); ?>
			</td>
		</tr>
	<?php } ?>
</table>
<?php echo anchor('crud/tambah', 'Tambah data') ?>
</div>
</div>
</body>
</html>