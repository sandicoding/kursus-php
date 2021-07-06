<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$bidang = $_POST['editbidang'];
$jumlah = $_POST['editjumlah'];
$harga = $_POST['editharga'];
$gambar = $_FILES['editgambar']['name'];

move_uploaded_file($_FILES['editgambar']['tmp_name'],"../../simpangambar/".$gambar);

	if(empty($gambar)) {
		$update = $pdo->query("UPDATE kursus SET idkursus='$id', tipe='$tipe', bidang='$bidang', jumlah='$jumlah', harga='$harga' WHERE idkursus='$id'");
		$update2 = $pdo->query("UPDATE stokkursus SET idkursus='$id', tipe='$tipe' WHERE idkursus='$id'");

		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
	}
	elseif (!empty($gambar)) {
		$update = $pdo->query("UPDATE kursus SET idkursus='$id', tipe='$tipe', bidang='$bidang', jumlah='$jumlah', harga='$harga', gambar='$gambar' WHERE idkursus='$id'");
		$update2 = $pdo->query("UPDATE stokkursus SET idkursus='$id', tipe='$tipe' WHERE idkursus='$id'");
		
		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
}

?>
