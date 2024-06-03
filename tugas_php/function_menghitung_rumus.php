<?php
    //Luas Persegi
    function hitung_luas_persegi($sisi){
        $luas = $sisi * $sisi;
        echo "ini luas persegi = $luas <br>";
    }
    hitung_luas_persegi(20);

    //Luas Persegi Panjang
    function hitung_luas_persegi_panjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        echo "ini luas persegi panjang= $luas <br>";
    }
    hitung_luas_persegi_panjang(20, 10);

    //Luas Lingkaran
    function hitung_luas_lingkaran($jari_jari){
        $luas = 3.14 * $jari_jari * $jari_jari;
        echo "ini luas lingkaran = $luas <br>";
    }
    hitung_luas_lingkaran(20);

    //Volume Bola
    function hitung_volume_bola($jari_jari, $phi){
        $vol = 4/3 * $phi * $jari_jari ** 3;
        echo "ini volume bola = $vol <br>";
    }
    hitung_volume_bola(5, 3.14);

    // Volume Kubus
    function hitung_volume_kubus($sisi){
        $vol = $sisi ** 3;
        echo "ini volume kubus = $vol <br>";
    }
    hitung_volume_kubus(4);
?>