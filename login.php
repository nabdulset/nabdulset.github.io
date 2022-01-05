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

  

    <title>Welcome back! - Anastudy</title>
  </head>
  <body>
    <div class="container d-flex justify-content-center mt-5">
      <div class="card-login">
        <div class="card-body"> 
          <?php
                  if (isset($_GET['pesan'])){
                    ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Login Gagal!</strong> <?php echo $_GET['pesan']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php } ?>
                
                
                <h3 class="text-center mt-3">Login</h3> 
                <form action="cekLogin.php" method=post>

                      <div class="form-group mt-4">
                        <input placeholder="Enter your username" type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <input placeholder="Enter your password" type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      </div>
                     <div>
                       <button type="submit" class="btn btn-danger form-control button" name="btnLogin">Login</button>
                     </div>
                     <div class="text-center mt-4">
                       Don't have an account yet? <a href="register.php">Register</a>
                     </div>
                     
                  </form>
            </div>
        </div>
    </div>

  
  
  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
  

  
</html>