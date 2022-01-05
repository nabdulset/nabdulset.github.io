<?php
include 'koneksi.php';

$name=$_GET['name'];

$query= "DELETE FROM contact where name='$name'";
mysqli_query($connect, $query);

    header ('location:kelola.php')
?>