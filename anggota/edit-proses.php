<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_anggota = $_POST['id_anggota'];
	$nama 		= $_POST['nama'];
	$kelas 		= $_POST['kelas'];
	$telp 		= $_POST['telp'];
	$password 	= $_POST['password'];
	$username 	= $_POST['username'];
	$id_level 	= 3;

	$query = mysqli_query($kon, "UPDATE anggota SET nama = '$nama',
													kelas = '$kelas',
													telp = '$telp',
													password = '$password',
													username = '$username',
													id_level = $id_level WHERE id_anggota=$id_anggota");
	echo "<script>
			alert('Data berhasil diubah');
			window.location='index.php'
		  </script>";
	
}else{
	echo "<script>
			alert('Data gagal diubah');
			window.location='edit.php'
		  </script>";
}
?>