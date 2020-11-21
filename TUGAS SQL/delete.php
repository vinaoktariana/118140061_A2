<?php 

    include "connection.php";

    $nrp = $_GET['nrpdel'];
    
    $data_delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nrp='$nrp';");
    
    if(mysqli_affected_rows($koneksi) == 1){
        echo "Berhasil Dihapus Dari Database</b>";
        header("location:menutama.php?delete=1");
    }else{
        echo " Gagal Dihapus Dari Database </b>";
    }