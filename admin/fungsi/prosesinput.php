<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['tipe'];
$bidang = $_POST['bidang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];

$sqlsimpan = $pdo->query("INSERT INTO kursus VALUES('$id', '$tipe', '$bidang', '$jumlah', '$harga', '$gambar')");
$sqlsimpan2 = $pdo->query("INSERT INTO stokkursus VALUES('$id', '$tipe', '$bidang', '$jumlah')");

move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
echo"<script>alert('Data Kursus Tersimpan');document,location.href='../datakamar';</script>";
?>