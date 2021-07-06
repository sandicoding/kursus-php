<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Transaksi Berhasil</h3>
			<div id="kanan">
				<form method="post" action="proseskonfirmasi">
				<table border="1px">
				<tr style="background: #11022a; color: white; font-size: 14px;">
					<th>ID</th>
					<th>Jenis Seni</th>
					<th>Nama Kursus</th>
					<th>Harga</th>
					<th>Nama</th>
					<th>Telepon</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM pemesanan ORDER BY idpesan DESC");
			  		while ($datax = $sql->fetch()) {
			  		$idpesan = $datax['idpesan'];
					$tipe = $datax['tipe'];
					$bidang = $datax['bidang'];
					$harga = $datax['harga'];
					$namax = $datax['nama'];
					$alamat = $datax['alamat'];
					$telepon = $datax['telepon'];
					$status = $datax['status'];

					
					$hargaa = number_format($harga,0,",",".");
					
					if ($status == 'Berhasil') {
  				?>
				<tr align="center" style="font-weight: normal; font-size: 12px;">
					<td class="tkonfirm"><?php echo $idpesan ?></td>
					<td class="tkonfirm"><?php echo $tipe ?></td>
					<td class="tkonfirm"><?php echo $bidang ?></td>
					<td class="tkonfirm"><?php echo $hargaa ?></td>
					<td class="tkonfirm"><?php echo $namax ?></td>
					<td class="tkonfirm"><?php echo $telepon ?></td>
				</tr>
				<?php
					}
			  	}
			  ?>
			  </table>
			  </form>
			</div>

			<a href="laporan-transaksi" target="_blank"><button id="laporan" style="width:150px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid white; margin-top: 5px;">Cetak Laporan</button></a>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>