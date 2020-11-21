<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 3 sql - Vina Oktariana</title>
</head>
<body>

	<?php 
	// require 'fungsi.php';
	$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa") or die("koneksi ke database gagal");

	if(isset($_GET['carinama'])){
		$cari = $_GET['carinama'];
		echo "<b>Data yang anda cari : ".$cari."</b><br><br>";
	}
	?>
 
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Foto</th>
		<th>Nama Jurusan</th>
	</tr>
	
	<?php 
	if(isset($_GET['carinama'])){
		$cari = $_GET['carinama'];
		$data = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nama LIKE '%".$cari."%'");	
	}
	else{
		$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
		echo "<h3>Data Mahasiswa</h3>";		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d["nrp"]; ?></td>
		<td><?php echo $d["nama"]; ?></td>
		<td><?php echo $d["foto"]; ?></td>
		<td><?php echo $d["jurusan"]; ?></td>
	</tr>
	<?php } ?>

	</table>
	
	<h4><a href="menutama.php" style="text-decoration: none;">Kembali ke menu awal</a></h4>

</body>
</html>