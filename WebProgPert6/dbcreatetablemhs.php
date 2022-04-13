<?php
    include_once("dbkoneksi2.php");
    
    $sql = "CREATE TABLE mhs(
        NIM varchar(10) PRIMARY KEY,
        NAMA varchar(20),
        JURUSAN varchar(10),
        JK varchar(1),
        TGL_LAHIR date,
        PASSCODE varchar(10)
    );";

    $hasil = mysqli_query($cnn, $sql);

    if($hasil){
        echo "<br>Pembuatan tabel MHS suskes";
    }else{
        echo "<br>Pembuatan tabel MHS gagal";
    }
    mysqli_close($cnn);