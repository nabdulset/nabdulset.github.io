<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicons -->
    <link href="assets/logo.png" rel="icon">

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  

    <title>Register - Anastudy</title>
  </head>
  <body>
    <form method=post>
    <div class="container d-flex justify-content-center mt-5">
          <div class="card-login">
                <div class="card-body">
                  <h3 class="text-center mt-3">Register here</h3> 
                  <form>
                      <div class="form-group mt-4">
                        <input placeholder="Enter your username" type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <input placeholder="Enter your password" type="password" class="form-control" id="password" name="password">
                     <div>
                       <button type="submit" class="btn btn-danger form-control button mt-4" name="btnDaftar">Register</button>
                     </div>
                     <div class="text-center mt-4">
                       Having an account already? <a href="login.php">Login</a>
                     </div>
                     
                  </form>
            </div>
        </div>
    </div>
  
	  <?php
	    error_reporting(0);
        include "koneksi.php";
	    if ($_POST['btn']=='submit'){
			$nama_user=$_POST['nama_user'];
			$kata_sandi=md5($_POST['kata_sandi']);
			
            $query="SELECT count(*) as jml  FROM users WHERE 
			username LIKE '$username' AND password LIKE '$password' ";			
			$sql=mysqli_query($connect,$query);
			 				
			while($data=mysqli_fetch_row($sql)){
				if ($data[0]==0){
				   echo "User dan Password salah";
			    }else{
				   header('location:contact.php');
			    }								
			}
		}
	  ?>
	</form>

  
  
  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
  

  
</html>

<?php
include 'koneksi.php';
if (isset($_POST['btnDaftar'])){
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

    $query=mysqli_query($connect, "INSERT INTO users VALUES ('$username','$password')");

    if ($query){
        echo "
        <script>
        alert ('Registrasi berhasil');
        window.location.href='login.php';
        </script>
        ";
    }
}
?>