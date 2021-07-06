<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Kursus</h3>
		<form method="post" action="fungsi/prosesinput" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID Kursus</td>
					<td><input type="text" required="required" name="id"></td>
				</tr>
				<tr>
					<td>Jenis Seni</td>
					<td>
						<select name="tipe" required="required" style="font-weight: bold; border: 2px solid #11022a;">
						<option selected="selected" disabled="disabled">--Pilih--</option>
						<option>Seni Musik</option>
						<option>Seni Tari</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nama Kursus</td>
					<td><input type="text" required="required" name="bidang"></td>
				</tr>
				<tr>
					<td>Jumlah Tersedia</td>
					<td><input type="text" required="required" name="jumlah"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" required="required" name="harga"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><input type="file" required="required" name="gambar"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" style="width:100px;background:#11022a; color:white;font-weight:bold;padding:4px;border:2px solid #11022a;">Simpan</button></td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>