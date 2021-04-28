<html>
<head>
	<title>FORM_BUKU</title>
</head>
<body>
	<h1>FORM_INPUT</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>JUDUL</td>
		<td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<td>PENGARANG</td>
		<td><input type="text" name="pengarang"></td>
	</tr>
	<tr>
	<td>PENERBIT</td>
		<td><input type="text" name="penerbit"></td>
	</tr>
	<tr>
		<td>GAMBAR</td>
		<td><input type="file" name="gambar"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
