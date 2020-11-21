<?php 

    include 'connection.php';

    $nrp        = $_POST['nrp'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $foto       = $_POST['foto'];
    $nrp        = $_POST['nrp'];
    $jurusan    = $_POST['jurusan'];

    $insertData =  mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('$nrp', '$nama', '$alamat', '$foto', '$jurusan')");
    
    if($insertData) {
        header('location:menutama.php?addMHS=1');
    } else {
        echo "ERROR sql : ";
        echo $insertData;
        return false;
    }