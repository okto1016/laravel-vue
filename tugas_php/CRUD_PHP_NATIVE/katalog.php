<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT katalog.*, id_katalog, nama FROM katalog");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>

<nav class="nav nav-tabs justify-content-center">
  <a class="nav-link" href="index.php">Buku</a>
  <a class="nav-link" href="penerbit.php">Penerbit</a>
  <a class="nav-link" href="pengarang.php">Pengarang</a>
  <a class="nav-link" href="katalog.php">Katalog</a>
</nav>

<a href="addkatalog.php">Add New katalog</a><br/><br/>
 
    <table class="table table-striped" width='80%' border=1>
 
    <tr>
        <th>Id katalog</th> 
        <th>Nama katalog</th> 
        <th>Aksi</th>
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>".$katalog_data['id_katalog']."</td>";
            echo "<td>".$katalog_data['nama']."</td>";
            echo "<td><a class='btn btn-primary' href='katalogedit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='deletekatalog.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>