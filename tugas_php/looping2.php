<?php
$siswa = 10;

echo "<table border=1";
echo "<tr><th>id</th><th>nama</th><th>kelas</th></tr>";

for($i = 1;$i <= $siswa;$i++ ){
    echo"<tr>";
    echo"<td>" . $i . "</td>";
    echo"<td>nama" . $i . "</td>";
    echo"<td>kelas" . (11 - $i) . "</td>";
}
echo"</table>";
?>