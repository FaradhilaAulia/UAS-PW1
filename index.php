<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location: login.php");
}
if(!isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
    
    
?>

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
    
    <body> 
        
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
            <li><a class="dropdown-item" href="#hak">Hak Cipta</a>
            </li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">트레저</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-submit" type="submit" >SEARCH</button>
      </form>
    </div>
  </div>
</nav>
        
        
        
        <!-- akhir dari navbar -->
        
        <!-- AWAL UTAMA -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="about">
    <div class="carousel-item active">
      <img src="DB_TREASURE_HEADER.jpg" class="d-block w-100" alt="debut" height="500px">
      <div class="carousel-caption ">
        <h1 style="color: black">TREASURE DEBUT</h1>
        <p style="color: black">Treasure debut with 12 member and debut on August 7th 2020</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="treasure%2520album.jpeg" class="d-block w-100" alt="album" height="500px">
      <div class="carousel-caption ">
        <h1 style="color: black">THE FIRST STEP : </h1>
        <p style="color: black">chapter one, chapter two and chapter three</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="tmap.jpeg" class="d-block w-100" alt="tmap" height="500px">
      <div class="carousel-caption">
        <h1 style="color: black">TREASURE MAP</h1>
        <p style="color: black">Variety show of Treasure</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
        <!-- AKHIR UTAMA -->
        <div>
            <figure class="text-end" >
               <blockquote class="blockquote">
                <p>FIND YOUR TREASURE</p>
                     </blockquote>
                      <figcaption class="blockquote-footer">
                          -Treasure <cite title="Source Title">Korea</cite>
                      </figcaption>
    
            </figure>
        </div>
    </body>
    <div class="jumbotron" id="member"></div>
    
    <title> TREASURE MEMBER </title>
     <link rel="icon" href="TREASURE_logo.png">
    <body style="background-color: floralwhite;">
          
       <h1 style="text-align: center; font-family: cursive; font-size: 500%"> THIS IS TREASURE</h1>
    
       <h2 style="font-family: Abella;
                  font-size: 200%;
                  text-align: center;
                  color: dimgrey"> TREASURE MEMBER</h2>
         <table border="1" width=800 align="center" style="background-color:#f1cab1;"> 
           <tr> 
            <td colspan="2" align="center" title="Choi Hyunsuk"> <img src="hyunsuk.jpg" width="360" height="450"> 
                 </td>
            <td colspan="2" align="center" title="Park Jihoon"> <img src="jihoon.jpg" width="360" height="450"> 
                 </td>
            <td colspan="2" align="center" title="Yoshinori"> <img src="yoshi.jpg" width="360" height="450"> 
                 </td>
             </tr>
             
             <tr> 
                <td colspan="2" align="center"> Choi Hyunsuk (Leader) </td>
               <td colspan="2" align="center">Park Jihoon (Leader) </td>
                 <td colspan="2" align="center">Kanemoto Yoshinori</td>
             </tr>
             
             <tr>
                 <td colspan="2" align="center" title="Junkyu"> <img src="junkyu.jpg" width="360" height="450"> 
                 </td>
                 <td colspan="2" align="center" title="Mashiho"> <img src="mashiho.jpg" width="360" height="450"> 
                 </td>
                 <td colspan="2" align="center" title="Jaehyuk"> <img src="jaehyuk.jpg" width="360" height="450"> 
             
             </tr>
             
             <tr> 
               <td colspan="2" align="center"> Kim Junkyu </td>
                 <td colspan="2" align="center">Takata Mashiho</td>
                 <td colspan="2" align="center">Yoon Jaehyuk</td>
             
             </tr>
                
               <tr> 
                   <td colspan="2" align="center" title="Asahi"> <img src="asahi.jpg" width="360" height="450"> 
                 </td>
               
                  <td colspan="2" align="center" title="Yedam"> <img src="yedam.jpg" width="360" height="450"> 
                 </td>
                 
                  <td colspan="2" align="center" title="Doyoung"> <img src="doyoung.jpg" width="360" height="450"> 
              </tr>
             
             <tr> 
              <td colspan="2" align="center">Hamada Asahi</td>
              <td colspan="2" align="center"> Bang Yedam</td>
              <td colspan="2" align="center"> Kim Doyoung</td>
             
             </tr>
             
             
             <tr> 
              <td colspan="2" align="center" title="Haruto"> <img src="haruto.jpg" width="360" height="450"> 
                 </td>
               
                  <td colspan="2" align="center" title="Jeongwoo"> <img src="jeongwoo.jpg" width="360" height="450"> 
                 </td>
                 
                  <td colspan="2" align="center" title="Junghwan"> <img src="junghwan.jpg" width="360" height="450"> 
              </tr>
              
             <tr>
            <td colspan="2" align="center">
                 Watanabe Haruto</td>
            <td colspan="2" align="center">
                 Park Jeongwoo</td>
                 <td colspan="2" align="center">
                So Junghwan</td>
            </tr>
             
             <tr> <td colspan="5" align="center" class="hal2"> <a href="TREASURE.html" target="_blank" style="text-decoration: underline; color: dimgray; font-size: 50px; font-family: abella"> Treasure</a></td> 
             </tr>
        </table>
                            
    </body>
    
    <!-- awal card -->
    <div class="container-fluid" id="sosmed">
    <div class="row d-flex justify-content-around mt-5 mb-5">
        <div class="col-lg-3 col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="TREASURE_logo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">YOUTUBE</h5>
    <p class="card-text">Treasure have a lot content on youtube. you can check it and streaming their MV songs because it's a bop.</p>
    <a href="https://www.youtube.com/c/OfficialTreasure/featured" class="btn btn-primary">Official Treasure</a>
      </div>
  </div>
    
</div>
        <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
  <img src="TREASURE_logo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TWITTER TREASURE</h5>
    <p class="card-text">This might help you to know a lot about TREASURE and can be talk with them </p>
    <a href="https://twitter.com/treasuremember" class="btn btn-primary">Twitter</a>
  </div>
            </div>
</div>
        <div class="col-lg-3 col-md-6">
        <div class="card" style="width: 18rem;">
  <img src="TREASURE_logo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">INSTAGRAM TREASURE</h5>
    <p class="card-text">This might help you to interactions with them and see their updates. go follow them. </p>
    <a href="https://www.instagram.com/yg_treasure_official/" class="btn btn-primary">Follow their Instagram</a>
  </div>
</div>
</div>
    </div>
    </div>
    
    <!-- akhir card -->
    
    <!-- daftar pengunjung -->
    
    <div class="jumbotron" id="pengunjung">
     <div class="container">
         <div class="col-lg-12 text-center-mt-5 mb-5">
         <h3 class="display-4"> PENGUNJUNG </h3>
             <a href="tambah.php"><h4> Tambah Mahasiswa </h4></a>
         </div>
         <table class="table table-striped" style="text-align:center">
         <thead class="table-dark">
             <th> NO </th>
             <th> Nim </th>
             <th> Nama </th>
             <th> Gender </th>
             <th> Alamat </th>
             <th> Opsi </th>
             </thead>
             
             <!-- Menampilkan data mahasiswa -->
              <?php
                include_once 'koneksi.php';
                  $no=1;
                  $data=mysqli_query($koneksi, "select * from mahasiswa");
             
                  while ($d=mysqli_fetch_array($data)) {
                      ?>
                     <tr> 
                      <td><?php echo $no++; ?></td>
                         <td><?php echo $d['nim'] ?> </td>
                         <td><?php echo $d['nama'] ?> </td>
                         <td><?php echo $d['gender'] ?> </td>
                         <td><?php echo $d['alamat'] ?> </td>
                         <td> <a href="edit.php ?nim=<?php echo $d['nim'];?>">edit</a>
                              <a href="hapus.php  ?nim=<?php echo $d['nim'];?> " >hapus</a>
                         
                         </td>
             
             </tr>
             
                 <?php
                  }
             ?>
                </table>
        
        </div>
    
    </div>
    
    
    <!-- awal peta -->
    <div class="embed-responsive embed-responsive-16by9" id="lokasi" style="align-items: center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.2660803626973!2d126.9060025146649!3d37.54879443290293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c992bb3f6a887%3A0x6058954f87325221!2sYG%20Entertainment!5e0!3m2!1sid!2sid!4v1619273888552!5m2!1sid!2sid" width="1350" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
    <!-- akhir peta -->
    
    
    <!-- awal footer -->
    <div class="card" id="hak">
  <div class="card-body">
    <blockquote class="blockquote mb-0 text-center mr-5">
    <img src="TREASURE_logo.png" height="66px" class="mb-2">  <p>Treasure from YG ENTERTAINMENT. <br> &copy;2019</p>
    </blockquote>
  </div>
</div>
    <!-- akhir footer -->

</html>