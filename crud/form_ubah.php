<html>
<head>
	<title>FORM_BUKU</title>
</head>
<body>
	<h1>Ubah Data</h1>

	<?php
	
	include "koneksi.php";

	
	$id_buku = $_GET['id_buku'];

	
	$sql = $pdo->prepare("SELECT * FROM formbuku WHERE id_buku=:id_buku");
	$sql->bindParam(':id_buku', $id_buku);
	$sql->execute(); 
	$data = $sql->fetch(); 
	?>

	<form method="post" action="proses_ubah.php?id_buku=<?php echo $id_buku; ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
			</tr>
			<tr>
				<td>PENGARANG</td>
				<td><input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>"></td>
			</tr>
			<tr>
				<td>PENERBIT</td>
				<td><input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
			</tr>
			<tr>
				<td>GAMBAR</td>
				<td>
					<input type="file" name="gambar">
				</td>
			</tr>
		</table>

		<hr>
		<input type="submit" value="Ubah">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
