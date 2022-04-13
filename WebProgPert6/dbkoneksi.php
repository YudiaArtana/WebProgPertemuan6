<?php
    include_once("konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("koneksi ke DBMS MySQL GAGAL");
    echo "koneksi ke DBMS MySQL SUKSES";