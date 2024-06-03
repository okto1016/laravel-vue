<?php
$server_name = "localhost";
$database = "perpus";
$username = "root";
$password = "";

$conn = mysqli_connect($server_name, $username, $password, $database);

if (!$conn){
    die("Connnection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM anggota WHERE role = 'admin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo "Admin : " . $row["nama"] . " " .$row["username"] . " " .$row["role"] ."<br>";
    }
} else {
    echo "0 results";
}

$sql2 = "SELECT * FROM `pengarang`";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()){
        echo "Pengarang : " . $row["nama_pengarang"] . " " .$row["email"] . " " .$row["telp"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>