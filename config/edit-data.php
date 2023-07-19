<?php

include("connect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id_warga'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no_telp'];
    $status_warga = $_POST['status_warga'];
    $jumlah = $_POST['jum_anggota'];


    // buat query update
    $sql = "UPDATE warga SET nama='$nama', usia='$usia',alamat='$alamat', no_telp='$no', status_warga='$status_warga', jum_anggota='$jumlah' WHERE id_warga=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../public/index-lihat-data.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>