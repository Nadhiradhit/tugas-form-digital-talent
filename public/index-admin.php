<?php

include '../config/connect.php';

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
</head>
<body>

    <!-- Cek Status Login -->
    <?php
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.php?belum=login");
    }

    ?>

    <!-- Navbar Side -->

    <div class="bg-white">
        <div class="flex">
            <div class="flex-auto w-56 h-screen bg-indigo-500 rounded-r">
                <div class="px-6 pt-8">
                    <div class="flex items-center justify-between">
                        <a class="text-white font-semibold font-Poppins text-md-1" href="">Hello, Admin <?php echo $_SESSION['username'];?></a>
                    </div>
                </div>
                <div class="px-6 pt-4">
                <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-indigo-700">
                                <path 
                                fill-rule="evenodd" 
                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" 
                                clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input 
                        type="text" 
                        class="w-full pl-8 pr-4 px-8 py-2.5 text-sm font-light rounded-md bg-slte-50 text-indigo-700 placeholder-indigo-700" 
                        placeholder="Search">
                    </div>
                </div>
                    <div class="px-6 pt-4">
                        <hr class="border-white">
                    </div>
                <div class="px-6 pt-4">
                <ul>
                    <li class="relative text-white font-semibold font-Poppins">
                        <div class="absolute inset-y-0 left-0 flex-items-center pl-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path 
                                d="M2.879 7.121A3 3 0 007.5 6.66a2.997 2.997 0 002.5 1.34 2.997 2.997 0 002.5-1.34 3 3 0 104.622-3.78l-.293-.293A2 2 0 0015.415 2H4.585a2 2 0 00-1.414.586l-.292.292a3 3 0 000 4.243zM3 9.032a4.507 4.507 0 004.5-.29A4.48 4.48 0 0010 9.5a4.48 4.48 0 002.5-.758 4.507 4.507 0 004.5.29V16.5h.25a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75v-3.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v3.5a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5H3V9.032z" 
                                />
                            </svg>
                        </div>
                        <a href="index-admin.php" class="inline-block w-full pl-10 py-2 rounded-md hover:bg-indigo-300">Dasbord Admin</a>
                    </li>
                    <!-- Tambah Data -->
                    <li class="relative text-white font-semibold font-Poppins">
                        <div class="absolute inset-y-0 left-0 flex-items-center pl-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path 
                                    ill-rule="evenodd" 
                                    d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zM10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z" 
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <a href="index-input-data.php" class="inline-block w-full pl-10 py-2 rounded-md hover:bg-indigo-300">Tambah Data</a>
                    </li>
                    <!-- Lihat Data -->
                    <li class="relative text-white font-semibold font-Poppins">
                        <div class="absolute inset-y-0 left-0 flex-items-center pl-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path 
                                d="M4.75 3A1.75 1.75 0 003 4.75v2.752l.104-.002h13.792c.035 0 .07 0 .104.002V6.75A1.75 1.75 0 0015.25 5h-3.836a.25.25 0 01-.177-.073L9.823 3.513A1.75 1.75 0 008.586 3H4.75zM3.104 9a1.75 1.75 0 00-1.673 2.265l1.385 4.5A1.75 1.75 0 004.488 17h11.023a1.75 1.75 0 001.673-1.235l1.384-4.5A1.75 1.75 0 0016.896 9H3.104z" />
                            </svg>
                        </div>
                        <a href="index-lihat-data.php" class="inline-block w-full pl-10 py-2 rounded-md hover:bg-indigo-300">Lihat Data</a>
                    </li>
                    <li class="relative text-white font-semibold font-Poppins">
                    <div class=" fixed bottom-0 top-0    py-4">
                        <button  class="flex w-52 justify-center rounded-md bg-gradient-to-br from-indigo-600 to-sky-600 px-3 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gradient-to-bl hover:from-green-700to-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <a href="../config/logout-admin.php">Log Out</a>
                        </button>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Content -->
            <div class="flex-auto w-4/5 px-4 mt-10">
                <div class="flex">
                    <h4 class="flex-start px-6 font-Poppins font-bold text-2xl text-primary basis-1/2">Index Admin</h4>
                    <button class="flex-end basis-1/2 btn btn-wide btn-primary">
                        <a href="index-print-data.php">PRINT</a>
                    </button>
                </div>
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
                                <th>Pengaturan</th>
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
                                echo "<td>".$warga['usia']." Tahun"."</td>";
                                echo "<td>".$warga['alamat']."</td>";
                                echo "<td>".$warga['no_telp']."</td>";
                                echo "<td>".$warga['status_warga']."</td>";
                                echo "<td>".$warga['jum_anggota']."</td>";
                                echo "<td>";
                                echo "<a href='index-edit-data.php?id_warga=".$warga['id_warga']."'>Edit </a>";
                                echo "<a href='../config/delete-data.php?id_warga=".$warga['id_warga']."'> Delete</a>";
                                echo "</tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                
            </div>  
        </div>
    </div>

    
    

</body>
</html>