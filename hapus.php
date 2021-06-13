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
    <?php 
      if(isset($_GET['nim'])){
          include('koneksi.php');
          $nim = $_GET['nim'];
          $cek = mysqli_query($koneksi, "select nim from mahasiswa where nim = '$nim'") or die(mysqli_error());
          
          if(mysqli_num_rows($cek)==0)
          {
              echo "<script>window.history.back()</script>";
          } 
          
          
          else
          {
              $del = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim' ");
              
              if($del)
              {
                  echo "<h3>Data mahasiswa berhasil dihapus</h3>";
                  echo "<script>window.location = 'index.php';</script>";
              }
              else
              {
                  echo "<h2>gagal menghapus data</h2>";
                  echo "<a href = 'index.php' > Kembali </a>";
              }
          }
      }
     
     else
     {
         echo "<script>window.history.back()</script>";
     }
     ?>
     
     
    <body> 
        
        
     </body>
</html>