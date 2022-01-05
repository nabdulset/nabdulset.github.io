<?php
include 'koneksi.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$btn=$_POST["btn"];

if ($btn=="simpan"){
    $query= "INSERT INTO contact VALUES ('','$name', '$email', '$subject', '$message')";
    $sql= mysqli_query($connect, $query);
} if ($btn="update"){
    $query= "UPDATE contact SET name='$name', email='$email', subject='$subject',message='$message' WHERE name='$name'";
    $sql= mysqli_query($connect, $query);

header('location:kelola.php');
    
}


?>