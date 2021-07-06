ha<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM kursus WHERE idkursus='$ambil'");
$sql2 = $pdo->query("DELETE FROM stokkursus WHERE idkursus='$ambil'");
echo"<script>document.location.href='../datakamar';</script>";
?>