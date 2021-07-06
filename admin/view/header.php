<?php
	session_start();
	require_once "fungsi/koneksi.php";
	if(!isset($_SESSION['ceklog'])) {
?>
		<html>
		<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		</head>
		<body>
			<script>
				swal({
			  		title: 'Oops...?',
			  		text: 'Silahkan Login Terlebih Dahulu!',
			  		showConfirmButton: false,
			  		type: 'warning',
			  		backdrop: 'rgba(123,0,0,5)',
				});
				window.setTimeout(function(){
					window.location.replace('index.php');
		 		} ,2000); 
		 	</script>;
		</body>
		</html>
<?php
	}	
?>

<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/stylesss.css" type="text/css"/>
</head>
<body>
	<header>
		<h1 class="judul">Rumah Musik Harry Roesli</h1>
		<h3 class="desc">Admin</h3>
	</header>

	<nav>
		<ul>
			
		</ul>
	</nav>

	<main>
		<ul>
			<li><a href="beranda" class="kiri">Beranda Admin</a></li>
			<li><a href="inputkamar" class="kiri">Input Kursus</a></li>
			<li><a href="datakamar" class="kiri">Data Kursus</a></li>
			<li><a href="datauser" class="kiri">Data User</a></li>
			<li><a href="databayar" class="kiri">Data Pembayaran</a></li>
			<li><a href="konfirmasi" class="kiri">Konfirmasi Pesanan</a></li>
			<li><a href="transaksiberhasil" class="kiri">Transaksi Sukses</a></li>
			<li><a href="kontak" class="kiri">Kontak</a></li>
			<li><a href="fungsi/proseskeluar" class="kiri">Keluar</a></li>
		</ul>
		
	</main>