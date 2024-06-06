<?php
 $array = file_get_contents("data2.json");
 $data = json_decode($array,true);

foreach ($data as $key => $value) {
    echo "Nama : " .$value['nama']. " Umur : " .$value['umur']. " Kelas : " .$value['kelas'];
    echo "<br>";
}
?>