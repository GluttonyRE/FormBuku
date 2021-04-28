<?php

include "koneksi.php";


$id_buku = $_GET['id_buku'];


$sql = $pdo->prepare("SELECT gambar FROM formbuku WHERE id_buku=:id_buku");
$sql->bindParam(':id_buku', $id_buku);
$sql->execute(); 
$data = $sql->fetch(); 

if(is_file("images/".$data['gambar']))
	unlink("images/".$data['gambar']); 

$sql = $pdo->prepare("DELETE FROM formbuku WHERE id_buku=:id_buku");
$sql->bindParam(':id_buku', $id_buku);
$execute = $sql->execute();

if($execute){ 

	header("location: index.php"); 
}else{
	
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
