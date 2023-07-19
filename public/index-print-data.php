<?php

include '../config/connect.php';

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tambah Data</title>
</head>
<body>
    <!-- Cek Status Login -->
    <?php
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.php?belum=login");
    }

    ?>
    <div class="bg-white">
            <!-- Input Form -->
            <div class="w-full px-4 mt-10">
                <h4 class="px-6 font-Poppins font-bold text-2xl text-primary">Data Warga</h4>
                <div class="py-4 px-6">
                    <hr class="px-4 border-indigo-700">
                </div>
                <div class="overflow-x-auto">
                    <table class="table table-lg">
                        <thead class=" font-Poppins text-primary">
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Alamat</th>
                                <th>Nomor Telpon</th>
                                <th>Status</th>
                                <th>Jumlah Anggota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $see = "SELECT * FROM warga";
                            $query = mysqli_query($db, $see);
                            
                            while($warga = mysqli_fetch_array($query)){
                                echo "<tr class=bg-base-200>";

                                echo "<td>".$no++."</td>";
                                echo "<td>".$warga['nama']."</td>";
                                echo "<td>".$warga['usia']."</td>";
                                echo "<td>".$warga['alamat']."Tahun"."</td>";
                                echo "<td>".$warga['no_telp']."</td>";
                                echo "<td>".$warga['status_warga']."</td>";
                                echo "<td>".$warga['jum_anggota']."</td>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
        </div>

        <script>
            window.print()
        </script>
</body>
</html>