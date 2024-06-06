<?php
    $nama = "Okto";
    $jenis_kelamin = "Laki-laki";
    $tahun_lahir = 2000;
    $umur = date('Y') - $tahun_lahir;

    if ($jenis_kelamin == "Perempuan") {
        echo "Selamat pagi, nyonya $nama <br>";
        echo "Umur anda $umur sekarang";
    } else {
        echo "Selamat pagi, tuan $nama <br>";
        echo "Umur anda $umur sekarang";
    }
?>