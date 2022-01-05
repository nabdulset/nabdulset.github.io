<?php
  $host="localhost";
  $user="root";
  $password="";
  $database="db_anastudy";
  $connect=mysqli_connect($host,$user,$password);
  mysqli_select_db($connect,$database);
  
?>