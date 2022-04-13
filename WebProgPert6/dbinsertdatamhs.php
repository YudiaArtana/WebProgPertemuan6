<?php

if(issset($_POST)["txNIM"])){
    include_once("dbkoneksi2.php");

    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $tgl = $_POST["txTGL"];
    $jur = $_POST["txJUR"];
    $passs = $_POST["txPASSS"];

    $sqlINSERT = "INSERT INTO mhs (NIM, NAMA, JURUSAN, JK, TGL_LAHIR, PASSCODE) VALUES
    ('".$nim."', '".$nama."', '".$jur."', '".$jk."', '".$tgl."', '".$passs."');";

    $hasil = mysqli_query($cnn, $sqlINSERT);

    if($hasil){
        echo "<br>Insert Data Sukses";
    }else{
        echo "<br>Insert Data Gagal";
    }

    mysqli_close($cnn);
}