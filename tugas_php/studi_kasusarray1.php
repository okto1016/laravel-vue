<?php
 $array = array(
    array(
        'nama' => 'Okto',
        'umur' => 23,
        'kelas' => 'Laravel'
    ),
    array(
        'nama' => 'Todi',
        'umur' => 24,
        'kelas' => 'Node Js'
    ),
    array(
        'nama' => 'Todo',
        'umur' => 21,
        'kelas' => 'Javascript'
    ),
);

foreach ($array as $key => $value) {
    echo "Nama : " .$value['nama']. " Umur : " .$value['umur']. " Kelas : " .$value['kelas'];
    echo "<br>";
}
?>