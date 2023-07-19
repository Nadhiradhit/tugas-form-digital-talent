<?php

include("connect.php");


if(isset($_POST['submit'])){

   
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no_telp'];
    $status_warga = $_POST['status_warga'];
    $jumlah = $_POST['jum_anggota'];

   
    $sql = "INSERT INTO warga (nama, usia,alamat, no_telp, status_warga,jum_anggota) VALUE ('$nama', '$usia','$alamat', '$no', '$status_warga', '$jumlah')";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
        
        $_SESSION['status'] = "Data Inserted Successfully";
        header('Location: ../public/index-input-data.php?status=sukses');
    } else {

        header('Location: ../public/index-input-data.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}


?>