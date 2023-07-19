<?php

include ("connect.php");

if( isset($_GET['id_warga'])){

    $id = $_GET['id_warga'];

    $sql = "DELETE FROM warga WHERE id_warga = $id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../public/index-lihat-data.php');
    }else{
        die("gagal menghapus...");
    }
}else {
    die("akses dilarang...");
}


?>