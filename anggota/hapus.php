<?php

include '../koneksi.php';

$id_anggota=$_GET['id_anggota'];

$res=mysqli_query($kon, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
echo "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
// var_dump($res);
?> 
