<!DOCTYPE html>
<html>
<head> 
	<title>Menu utama</title>
</head>
<body>

<h2>DATA MAHASISWA PENS</h2>
<p>=================================</p>
<h2>TAMBAH DATA</h2>

	<?php if(isset($_GET['addMHS']) && $_GET['addMHS'] == 1){ ?>
		<p style="color:green;">Data Berbasil Ditambahkan</p>
	<?php } ?>

	<form action="register.php" method="post" >
		<label for="nrp">NRP: </label>
		<input type="text" id="nrp" name="nrp">
		<br>

		<label for="nama">Nama: </label>
		<input type="text" id="nama" name="nama">
		<br>

		<label for="alamat">Alamat: </label>
		<input type="text" id="alamat" name="alamat">
		<br>

		<label for="foto">Foto: </label>
		<input type="file" id="foto" name="foto">
		<br>

		<label>Jurusan: </label>
		<select name="jurusan">
			<option value="310TL">Telekomunikasi</option>
			<option value="299EL">Elka</option>
			<option value="281IT">IT</option>
			<option value="082ELI">Elin</option>
		</select> 

		<br><br><br>
		<input type="submit" value="Tambah Data">
		<br><br>
		<p>=================================</p>
	</form>

	<h2>SEARCH DATA</h2>
	<br>
	<form action="output.php" method="get">
	<label for="nama">Nama: </label>
	<input type="text" id="nama" name="carinama">
	<input type="submit" value="cari">
	</form>
	<br>
	<p>=================================</p>

	<?php include 'connection.php'; 

		$getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.jurusan = jurusan.ID_Jur ") or die(mysqli_error());
	?>

	<?php if(isset($_GET['delete']) && $_GET['delete'] == 1){ ?>
		<p style="color:green;">Data Berbasil Dihapus</p>
	<?php } ?>

	<br>

	<table border="1">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		<?php while($data = mysqli_fetch_array($getData)){ ?>
			<tr>
				<th> <?php echo $data['nrp'] ?> </th>
				<th> <?php echo $data['nama'] ?> </th>
				<th> <?php echo $data['alamat'] ?> </th>
				<th> <?php echo $data['foto'] ?> </th>
				<th> <?php echo $data['jurusan'] ?> </th>
				<th> 
					<a href="delete.php?nrp=<?php echo $data['nrp'] ?>"> Delete </a>
				</th>
			</tr>
		<?php } ?>


	</table>

	<p>=================================</p>

	<h2>DELETE DATA</h2>
	<br>
	<form action="delete.php" method="get">
	<label for="nrpdel">NRP: </label>
	<input type="text" id="nama" name="nrpdel">
	<button type="submit" name="del" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete Data</button>
	</form>
	<br>
	<p>=================================</p>
	
</body>
</html>

