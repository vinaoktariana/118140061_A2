<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 - Vina Oktariana</title>
</head>
<body>

	<form action="" method="get">
		<label for="nama">Masukan Nama: </label>
		<input type="text" id="nama" name="nama" required>
		<br><br>
		<label for="warna">Masukan warna font: </label>
		<input type="text" id="warna" name="warna" placeholder="kuning, ungu, dan p
		ink">
		<br><br>
		<button type="submit" name="input">Input</button>

	</form>
	<br>

	<?php 
		function tampil($nama,$warna){
			$countname=strlen($nama);
			$sum=0;

			if ($countname<=10 && $countname>=1 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+300;
				}
                if ($warna=="kuning" || $warna=="kuning") {
					echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna=="ungu" || $warna=="ungu") {
					echo "<font style='color: purple;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna=="pink" || $warna=="pink") {
					echo "<font style='color: pink;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna=="") {
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning,Ungu, dan Pink";
                }
            }

			else if ($countname>=11 && $countname<=20 ) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+500;
				}
				if ($warna=="kuning" || $warna=="kuning") {
					echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna=="ungu" || $warna=="ungu") {
					echo "<font style='color: purple;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna=="pink" || $warna=="pink") {
					echo "<font style='color: pink;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}
				else if ($warna==""){
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning, Ungu, dan Pink";
				}

			}

			else if ($countname>20) {
				for($i=1;$i<=$countname;$i++){
					$sum=$sum+700;
				}

				if ($warna=="kuning" || $warna=="kuning") {
					echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="ungu" || $warna=="ungu") {
					echo "<font style='color: purple;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="pink" || $warna=="pink") {
					echo "<font style='color: pink;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else if ($warna=="") {
					echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
				}

				else {
					echo "Maaf, pilihan warna yang tersedia hanya Kuning, Ungu, dan Pink";
				}

			}
			
		}

		if (isset($_GET["input"])) {
			tampil($_GET["nama"],$_GET["warna"]);
		}

 ?>

</body>
</html>


