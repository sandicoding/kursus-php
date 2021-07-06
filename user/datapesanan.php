<?php
	require_once "view/header.php";
?>

<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- -------- -->

<section class="data-pembayaran" >
	<h1>Data Pembayaran</h1>
	<p><i>Mohon dipastikan hanya mentransfer ke no rekening dibawah !</i></p>
	<center>
	<div id="rekening" style="width: 50%; height: 200px;">
				<li>No. Rekening <br> Rumah Musik Harry Roesli</li>
				<table style="width: 98%;">
					<tr style="text-align: center; border: 2px solid #B40301">
						<td><img src="../gambar/mandiri.png" align="left"></td>
						<td style="color: #B40301; border-right: 2px solid #B40301;">0000-00-000000-000</td>
						<td><img src="../gambar/bca.jpg" align="left"></td>
						<td style="color: #B40301;";>1111-11-111111-111</td>
					</tr>
					<tr style="text-align: center; border: 2px solid #B40301">
						<td><img src="../gambar/bni.png" align="left"></td>
						<td style="color: #B40301; border-right: 2px solid #B40301">2222-22-222222-222</td>
						<td><img src="../gambar/bri.png" align="left"></td>
						<td style="color: #B40301;">3333-33-333333-333</td>
					</tr>
				</table>
			</div>
		</center>
</section>
<hr size="2px" width="100%" color="red"  >
<section class="data-pesanan" >
	<h1>Data Pesanan</h1>
	<p><i>*Silahkan melakukan pembayaran, dan lakukan <b>Konfirmasi Pembayaran</b> dibawah.</i></p>
</section>


			<div id="pemesanan">
			<?php
			include"../fungsi/koneksi.php";
			$sqlx = $pdo->query("SELECT * FROM pemesanan WHERE idtamu = $ambil ORDER BY idpesan DESC");
			while($datax = $sqlx->fetch()){
				$idpesan = $datax['idpesan'];
				$idkursus = $datax['idkursus'];
				$tipe = $datax['tipe'];
				$bidang = $datax['bidang'];
				$harga = $datax['harga'];
				$idtamu = $datax['idtamu'];
				$namax = $datax['nama'];
				$alamat = $datax['alamat'];
				$telepon = $datax['telepon'];
				$status = $datax['status'];
		?>
			<div id="pesankamar">
			<table width="300px" >
			<tr align="center">
				<td colspan="2">Kode Transaksi : <?php echo $idpesan ?>
					<input type="hidden" name="idd" value="<?php echo $idpesan ?>">
				</td>
			</tr>
			<tr align="center">
				
				<td colspan="2" >
				<?php
					$sqly = $pdo->query("SELECT * FROM kursus WHERE idkursus=$idkursus");
					while($datay = $sqly->fetch()){
						$gambary = $datay['gambar'];
				?>
					<img src="../simpangambar/<?php echo $gambary?>" width='200px' height='120px' style="border:2px solid #B40301;">
				<?php
					}
				?>
				</td>
			</tr>
			<tr>
				<td>Jenis Seni</td>
				<td><?php echo $tipe ?></td>
			</tr>
			<tr>
				<td>Jenis Kursus</td>
				<td><?php echo $bidang ?></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>Rp. <?php echo $harga ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $namax ?>
					<input type="hidden" name="namax" value="<?php echo $namax ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $alamat ?></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><?php echo $telepon ?></td>
			</tr>
			<!-- <tr>
				<td>
					<br><a href="bayar.php?id=<?php echo $idpesan ?>" ><button id="bbayar">Upload Bukti Pembayaran</button></a>
					style="width:170px;background:green;color:black;font-weight:bold;padding:4px;border:2px solid white; margin-bottom: 3px;
				</td>
			</tr> -->
		</table>
			<br>

			<?php if($status == 'Berhasil'){ ?>
				<h1>Pesananmu Berhasil diproses!</h1>
			<?php } else { ?>
			<br>
			
			<a href="bayar.php?id=<?php echo $idpesan ?>" ><button id="bbayar" style="cursor: pointer;">Upload Bukti Pembayaran</button></a>
		<?php  }?>
			<br>
			<p><i>*Untuk Kelanjutan Konfirmasi Pemesanan yang sudah dilakukan, kami akan menghubungi <b>Via Whatsapp</b></i></p>
		</div>
		<?php
			}
		?>
		</center>
		</div>
	</aside>

<?php
	require_once "view/footer.php"
?>