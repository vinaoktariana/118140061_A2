
<?php 
	$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa") or die ("koneksi ke database gagal");

	function tambah($data){

		global $conn;

		$nrp = $data["nrp"];
		$nama = $data["nama"];
		$alamat = $data["alamat"];
        $foto = $data["foto"];
		$jurusan = $data["jurusan"];

		if ($data["jurusan"] == "Telekomunikasi") {
			$id_tel = "310TL";
			$query = "INSERT INTO data mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_tel','$jurusan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
		}
		else if ($data["jurusan"] == "Elka") {
			$id_elka = "299EL";
			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_elka','$jurusan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);		
		}
		else if ($data["jurusan"] == "IT") {
			$id_it = "281IT";
			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_it','$jurusan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);			
		}
		else if ($data["jurusan"] == "Elin") {
			$id_elin = "082ELI";
			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$foto','$id_elin','$jurusan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
		}
	}

	function hapus($data){
		global $conn;
		$nrp = $data["nrpdel"];
		mysqli_query($conn, "DELETE FROM mahasiswa WHERE NRP = $nrp");
		return mysqli_affected_rows($conn);
	}
