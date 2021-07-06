<?php
	require_once "view/header.php";
	if(isset($_SESSION['tipe'])) {
		$amb = $_SESSION['tipe'];
		$sqlx = $pdo->query("SELECT * FROM kursus WHERE tipe=$amb");
		$datax = $sqlx->fetch();
		$idkursus = $datax['idkursus'];
		$tipe = $datax['tipe'];
		$jumlah = $datax['jumlah'];
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');
	}
?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- -------- -->
	<div id="imgindex">
		<div id="imglog">
			<h1>Rumah Musik Harry Roesli</h1><br>
				<p><i>Good times, Good music and Good friends.<br>
		Rumah berkumpulnya para pecinta seni.<br>
		Since. 1998</i><br>&nbsp;</p>
		</div>
	</div>

<!------ Course ------>

<section class="course">
	<h1>Kursus</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="course-col">
			<h3>Musik</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<a href="kursus.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
		<div class="course-col">
			<h3>Tari</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			<a href="kursus.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
	</div>
</section>

<!-- ------ Campus/Place -------->
<section class="campus">
	<h1>Our Course Place</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="campus-col">
			<img src="../gambar/london.png">
				<h3>LOBBY</h3>
		</div>
		<div class="campus-col">
			<img src="../gambar/newyork.png">
				<h3>LIVING ROOM</h3>
		</div>
		<div class="campus-col">
			<img src="../gambar/washington.png">
				<h3>LOUNGE</h3>
		</div>
	</div>
</section>

<!-------- Facilities -------->

<section class="facilities">
	<h1>Our Facilities</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="facilities-col">
			<img src="../gambar/library.png">
			<h3>Cafe & Resto</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolor aliquet turpis nulla.</p>
		</div>
		<div class="facilities-col">
			<img src="../gambar/basketball.png">
			<h3>Music Studio</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolor aliquet turpis nulla.</p>
		</div>
		<div class="facilities-col">
			<img src="../gambar/cafeteria.png">
			<h3>Gathering Room</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolor aliquet turpis nulla.</p>
		</div>

	</div>
</section>

<!-- ------ testimonials ------ -->

<section class="testimonials"> 
	<h1>What Our Student Says</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="testimonial-col">
			<img src="../gambar/user1.jpg">
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<h3>Rissa Gunawan</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="testimonial-col">
			<img src="../gambar/user2.jpg">
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<h3>Risgoon Geez</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
		</div>
	</div>
</section>

<section class="cta">
	<h1>Daftar kursus di RMHR<br>Dimanapun dan kapanpun !</h1>
	<a class="icons-putih" href="https://wa.wizard.id/b64f44" target="_blank"><i class="fa fa-whatsapp fa-5x" ></i></a>
	<p>Klik whatsapp diatas untuk bertanya ... </p>
</section>
	

<?php
	require_once "view/footer.php"
?>
