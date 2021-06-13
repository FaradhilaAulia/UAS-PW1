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
    
    
    <!-- edit data mahasiswa -->
        
     <?php
        include ('koneksi.php');
        $nim = $_GET['nim'];
        $show = mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
        if(mysqli_num_rows($show)==0)
        {
            echo '<script>window.history.back()</script>';
        }
        else
        {
            $d = mysqli_fetch_assoc($show);
        }
        
        ?>
        
        
    <!-- edit data mahasiswa -->
        
        <form action="edit_proses.php" method="post" >
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
            <table>
               <tr>
                <td> Nama Lengkap </td>
                   <td>:</td>
                   <td>
                     <input type="text" name="nama" size="33" value="<?php echo $d['nama']; ?>" required>
                   </td>
                </tr>
                <tr>
                <td>Gender</td>
                    <td>:</td>
                    <td>
                    <select name="gender" required>
                        <option value="">PILIH</option>
                        <option value="Pria"><? php if ($d['gender']== 'Pria') {echo 'selected';} ?> Pria</option>
                        <option value="Wanita"><? php if ($d['gender']== 'Wanita') {echo 'selected';} ?> Wanita </option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Alamat</td>
                <td>:</td>
                    <td>
                    <input type="text" name="alamat" size="33" value="<?php echo $d['alamat']; ?>" required>
                    </td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
        </form>
    
    </body>
    
</html>