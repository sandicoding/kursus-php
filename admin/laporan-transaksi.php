<?php
// memanggil library FPDF
require('../lib/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(275,7,'LAPORAN INFORMASI PENDAFTARAN KURSUS RUMAH MUSIK HARRY ROESLI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(275,7,'DATA TRANSAKSI PENDAFTARAN KURSUS',0,1,'C');
 
$pdf->Line(300,23,-300,23);
$pdf->Line(300,23.5,-300,23.5);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'KODE',1,0);
$pdf->Cell(25,6,'TIPE',1,0);
$pdf->Cell(25,6,'BIDANG',1,0);
$pdf->Cell(25,6,'HARGA',1,0);
$pdf->Cell(40,6,'NAMA',1,0);
$pdf->Cell(35,6,'TELEPON',1,0);

 
$pdf->SetFont('Arial','',10);


 
include 'fungsi/koneksi.php';
$bayar = $pdo->query("SELECT * From pemesanan WHERE status='Berhasil'");
while ($row = $bayar->fetch()){
	$pdf->Cell(10,7,'',0,1);
    $pdf->Cell(15,6,$row['idpesan'],1,0);
    $pdf->Cell(25,6,$row['tipe'],1,0);
    $pdf->Cell(25,6,$row['bidang'],1,0);
    $pdf->Cell(25,6,$row['harga'],1,0); 
   
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(35,6,$row['telepon'],1,0);

}
 
$pdf->Output();
?>