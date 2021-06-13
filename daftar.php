<?php
    include ("daftar_proses.php");
?>

<!DOCTYPE html>
<html> 
    <head>
    <title> Find your Treasure</title>
        <link rel="icon" href="TREASURE_logo.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        
        <!-- awal dari navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
      <img src="TREASURE_logo.png" height="33px" class=" mr - 3">
    <a class="navbar-brand" href="#">TREASURE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#member">MEMBER</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MEDIA
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#sosmed">Social Media</a></li>
            <li><hr class="dropdown-divider">
            <li><a class="dropdown-item" href="#lokasi">Lokasi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#hak">Hak Cipta</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">트레저</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" href ="login.php">LOGIN</button>
      </form>
    </div>
  </div>
</nav>
        
        
        
        <!-- akhir dari navbar -->
        

    <!-- Awal Form sign up -->
    <div class="container">
        <form class="login-username" action="daftar_proses.php" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password1" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Konfirmasi Password" name="password2" required>
            </div>
            <div class="input-group">
                <button class="btn" name="buatakun">Sign Up</button>
            </div>
            <p class="login-register-text">Sudah punya akun? <a href="login.php" style="color: blue">Masuk Disini</a>.</p>
        </form>
    </div>
    <?php
            if(count($errors)>0){
                foreach($errors as $error){
                    ?>
                    <div class="alert alert-danger" role="alert">
                    
                        <?php echo "$error<br>"; ?>
                    </div>
        <?php
                }
            }
        ?> 

    <!-- Akhir Form sign up -->

      
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>