<?php
    include_once("dbkoneksi.php");

    if($cnn){
        $sql = "CREATE DATABASE mahasiswa;";

        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "<br>Database mahasiswa BERHASIL dibuat";
        }else{
            echo "<br>Database mahasiswa GAGAL dibuat";
        }
    }
    mysqli_close($cnn);
