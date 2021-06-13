<?php 

if(isset($_POST['simpan'])){
	include('koneksi.php');
	$nim    = $_POST['nim'];
	$nama   = $_POST['nama'];	
	$gender   = $_POST['gender'];
	$alamat = $_POST['alamat'];
	$update = mysqli_query($koneksi, "UPDATE mahasiswa SET 
			  nama = '$nama',
			  gender = '$gender',
			  alamat = '$alamat'
			  WHERE nim = '$nim' ") or die(mysqli_error());  // untuk mengakhiri statement dan memberitahu letak kesalahan

	if($update) {
		echo"<script> 
				alert('Data berhasil diubah') 
				window.location = 'index.php'
			</script>";
	}
	else {
		echo"<script> 
				alert('Gagal menyimpan data') 
				window.location = 'edit.php ?nim= ".$nim."'
				</script>";
	}
}
else {
	echo "<script> window.history.back() </script>";
}

?>