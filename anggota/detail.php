<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota WHERE id_anggota=$id_anggota";
$res = mysqli_query($kon,$sql);
$det = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td><strong>Nama</strong></td>
						<td><?= $det['nama'] ?></td>
					</tr>
					<tr>
						<td><strong>Kelas</strong></td>
						<td><?= $det['kelas'] ?></td>
					</tr>
					<tr>
						<td><strong>Telepon</strong></td>
						<td><?= $det['telp'] ?></td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td><?= $det['password'] ?></td>
					</tr>
					<tr>
						<td><strong>Username</strong></td>
						<td><?= $det['username'] ?></td>
					</tr>
					<tr>
						<td><strong>Level</strong></td>
						<td><?= $det['id_level'] ?></td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>