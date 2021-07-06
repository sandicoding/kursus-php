<?php
	require_once "view/header.php";

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
<link rel="stylesheet" type="text/css" href="styless.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<div id="imgindex">
		<div id="imglog">
			<p>Selamat Datang di Rumah Musik Harry Roesli<br><br></p>
			<p><a href="daftar" id="tomboll">DAFTAR AKUN</a>
			<a href="login" id="tombol2">LOGIN</a><br>&nbsp;</p>
			<P><i>*Silahkan Daftar Akun dan Login terlebih dahulu</i></P>
		</div>
	</div>


<!------ Course ------>

<section class="course">
	<h1>Kursus</h1>
	<p>Tingkatkan kreativitasmu, dengan kursus di RMHR.</p>

	<div class="row">
		<div class="course-col">
			<h3>Musik</h3>
			<p>Musik dapat Melatih konsentrasi dan ketekunan, Menumbuhkan kreativitas, dan Meningkatkan koordinasi tubuh. Di RMHR terdapat tingkatan kelas mulai dari Beginner, Intermediate, dan Advanced. Kamu dapat sharing cerita ke teman-teman di komunitas.</p>
			<a href="kamar.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
		<div class="course-col">
			<h3>Tari</h3>
			<p>Kami mempunyai kursus Line Dance, Line dance mampu Meningkatkan refleks, keseimbangan dan kekuatan tubuh bagian bawah, Dapat menjaga kepadatan tulang atau mampu mencegah osteoporosis, Meningkatkan keseimbangan tubuh, dan Mengencangkan otot pinggul.</p>
			<a href="kamar.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
	</div>
</section>

<!-- ------ Campus/Place -------->
<section class="campus">
	<h1>Our Place</h1>
	<p>Kami menyediakan berbagai spot untuk para siswa dapat berkumpul.</p>

	<div class="row">
		<div class="campus-col">
			<img src="gambar/london.png">
				<h3>LOBBY</h3>
		</div>
		<div class="campus-col">
			<img src="gambar/newyork.png">
				<h3>LIVING ROOM</h3>
		</div>
		<div class="campus-col">
			<img src="gambar/washington.png">
				<h3>LOUNGE</h3>
		</div>
	</div>
</section>

<!-------- Facilities -------->

<section class="facilities">
	<h1>Our Facilities</h1>
	<p>Di RMHR mempunyai beberapa fasilitas yang dapat diperoleh.</p>

	<div class="row">
		<div class="facilities-col">
			<img src="gambar/library.png">
			<h3>Cafe & Resto</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolor aliquet turpis nulla.</p>
		</div>
		<div class="facilities-col">
			<img src="gambar/basketball.png">
			<h3>Music Studio</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolor aliquet turpis nulla.</p>
		</div>
		<div class="facilities-col">
			<img src="gambar/cafeteria.png">
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
			<img src="gambar/user1.jpg">
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
			<img src="gambar/user2.jpg">
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

<?php
	require_once "view/footer.php"
?>
