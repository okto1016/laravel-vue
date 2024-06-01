<?php
$file_path = file_get_contents('data.json');

$data = json_decode($file_path,true);
echo "<table border=1";
echo "<tr><th>No</th><th>Nama</th><th>Tanggal Lahir</th><th>Umur</th><th>Alamat</th><th>Kelas</th><th>Nilai</th><th>Hasil</th></tr>";
$i = 1;
foreach ($data as $item) {
    $tanggal_lahir_timestamp = strtotime($item['tanggal_lahir']);
    $umur = date('Y') - date('Y', $tanggal_lahir_timestamp);
    $hasil = '';
    if ( $item['nilai'] >= 90 ) {
        $hasil = "A";
    } else if ($item['nilai'] >= 80 && $item['nilai'] < 90 ) {
        $hasil = "B";
    } else if ($item['nilai'] >= 70 && $item['nilai'] < 80 ) {
        $hasil = "C";
    } else {
        $hasil = "D";
    }
    echo"<tr>";
    echo"<td>" .  $i. "</td>";
    echo"<td>" .  $item['nama']. "</td>";
    echo"<td>" .  $item['tanggal_lahir']. "</td>";
    echo"<td>" .  $umur. "</td>";
    echo"<td>" .  $item['alamat']. "</td>";
    echo"<td>" .  $item['kelas']. "</td>";
    echo"<td>" .  $item['nilai']. "</td>";
    echo"<td>" .  $hasil. "</td>";
$i++;
}
?>