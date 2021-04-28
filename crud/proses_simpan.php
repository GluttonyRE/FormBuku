<?php

include "koneksi.php";


$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];


$gambarbaru = date('dmYHis').$gambar;


$path = "images/".$gambarbaru;


if(move_uploaded_file($tmp, $path)){ 

	$sql = $pdo->prepare("INSERT INTO formbuku(judul, pengarang, penerbit, gambar) VALUES(:judul,:pengarang,:penerbit,:gambar)");
	$sql->bindParam(':judul', $judul);
	$sql->bindParam(':pengarang', $pengarang);
	$sql->bindParam(':penerbit', $penerbit);
	$sql->bindParam(':gambar', $gambarbaru);
	$sql->execute(); 

	if($sql){ 

		header("location: index.php");  
	}else{

		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}

	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
