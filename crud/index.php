<html>
<head>
	<title>FORM_BUKU</title>
</head>
<body>
	<h1>form buku</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th colspan="6">FormBuku</th>
	</tr>
	<tr>
		<th>gambar</th>
		<th>judul</th>
		<th>pengarang</th>
		<th>penerbit</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	
	include "koneksi.php";

	
	$sql = $pdo->prepare("SELECT * FROM formbuku");
	$sql->execute(); 

	while($data = $sql->fetch()){ 
		echo "<tr>";
		echo "<td><img src='images/".$data['gambar']."' width='100' height='100'></td>";
		echo "<td>".$data['judul']."</td>";
		echo "<td>".$data['pengarang']."</td>";
		echo "<td>".$data['penerbit']."</td>";
		echo "<td><a href='form_ubah.php?id_buku=".$data['id_buku']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id_buku=".$data['id_buku']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
