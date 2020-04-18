<?php

include '../koneksi.php';

$id_buku=$_GET['id_buku'];

$res=mysqli_query($kon, "DELETE FROM buku WHERE id_buku=$id_buku");
echo "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
// var_dump($res);
?> 
