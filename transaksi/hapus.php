<?php 
include '../koneksi.php';
$id=$_GET["id_pinjam"];
$query=mysqli_query($kon,"DELETE FROM detail_pinjam where id_pinjam='$id'");
$query=mysqli_query($kon,"DELETE FROM peminjaman where id_pinjam='$id'");
echo "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
if(isset($query)){
    header("location : index.php");
    exit;
}
else{
    header("location : index.php");
    exit;
}
?>