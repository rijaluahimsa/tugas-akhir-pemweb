<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Ajarin.id</title>
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<link href="{{ asset('css/home.css') }}" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container d-flex align-items-center justify-content-between">
			<div class="logo">
				<h1><a href="index.html">Ajarin.id</a></h1>
			</div>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					@guest
					<li><a class="nav-link" href="/login">Login</a></li>
					<li><a class="nav-link" href="/register#" role="button">Sign Up</a></li>
					@else	
					<li><a class="nav-link" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form></li>
					@endguest

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div class="hero-container">
			<h1>Belajar Ekslusif dengan Guru Privat Terbaik</h1>
			<h2>Kami membantumu meraih prestasi di sekolahmu!</h2>
			<a href="/search" class="btn-get-started scrollto">Find a mentor</a>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="mt-5 about">
			<div class="container">

				<div class="row content">
					<div class="col-lg-12">
						<h2>Belajar Eksklusif 1 Murid 1 Guru!</h2>
						<h3>Dapatkan pengalaman belajar privat lebih efektif dengan beragam pilihan sesuai kebutuhanmu.
							Kamu bisa
							belajar apa saja, kapan saja dengan media apapun sesuai keinginan. Guru privat terbaik siap
							membimbing
							kamu!</h3>
					</div>
				</div>
		</section><!-- End About Section -->


		<!-- ======= Testimonials Section ======= -->
		<section id="testimonials" class="testimonials">
			<div class="container position-relative">

				<div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="https://images.unsplash.com/photo-1597223557154-721c1cecc4b0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
									class="testimonial-img" alt="">
								<h3>Ibu Deden</h3>
								<h4>Orang Tua Siswa</h4>
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									“Saya sangat puas dengan mentor rekomendasi Ajarin.id. Karena mentornya sabar,
									telaten, dan
									bertanggungjawab mengajar hingga anak saya paham. Akhirnya anak saya diterima di
									FMIPA UI jurusan
									Fisika”
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="https://images.unsplash.com/photo-1592821166384-8130a978709c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
									class="testimonial-img" alt="">
								<h3>Ucup Surucup</h3>
								<h4>Siswa</h4>
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									“Mentor Ajarin.id sangat asik. Tadinya nilai matematika ku 40-50 bahkan pernah 0,
									setelah les privat
									di ruangles nilaiku jadi 70-80 bahkan sekarang aku masuk 10 besar. Belajarnya tidak
									monoton karena
									mentornya bisa menyesuaikan”
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="https://images.unsplash.com/photo-1577975882846-431adc8c2009?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
									class="testimonial-img" alt="">
								<h3>Otong Surotong</h3>
								<h4>Siswa</h4>
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									“Sebelumnya nilai UTS aku 70. Namun, sejak belajar dengan mentor dari Ajarin.id
									nilai UAS aku jadi 90.
									Pengalaman unik dan menyenangkan dengan mentor Ajarin.id yaitu dibuatin buku kecil
									yang isinya
									kisi-kisi plus teorinya. Jadi memudahkan aku banget buat belajar. Aku baru pertama
									kali dapat mentor
									segitu baiknya”
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="https://images.unsplash.com/photo-1583451888125-258fa2c22242?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
									class="testimonial-img" alt="">
								<h3>Ajeng Maharani</h3>
								<h4>Mentor</h4>
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									"Disini aku bisa mencari murid yang butuh les privat dengan mudah dan bisa menambah
									penghasilanku"
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-item">
								<img src="https://images.unsplash.com/photo-1618077360395-f3068be8e001?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
									class="testimonial-img" alt="">
								<h3>Bambang Subambang</h3>
								<h4>Mentor</h4>
								<p>
									<i class="bx bxs-quote-alt-left quote-icon-left"></i>
									"Ajarin.id mempertemukan dua pihak yang membutuhkan, saya yang ingin mencari
									penghasilan tambahan dari
									mentor, dan siswa-siswa saya yang ingin mencari mentor terbaik. Ajarin.id adalah
									tempat yang tepat
									untuk itu"
									<i class="bx bxs-quote-alt-right quote-icon-right"></i>
								</p>
							</div>
						</div><!-- End testimonial item -->

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section><!-- End Testimonials Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Our Team</h2>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="member">
							<div class="member-img">
								<img src="https://media.discordapp.net/attachments/830997955129376778/846051306941448212/photo-1607990281513-2c110a25bd8c.png?width=739&height=676" class="img-team" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Faiz Aulia Al Farisi</h4>
								<span>Backend Developer</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="member">
							<div class="member-img">
								<img src="https://media.discordapp.net/attachments/830997955129376778/846056946426970152/photo-1518468819319-0b52ebdd0774.png?width=676&height=676"
									class="img-team w-100" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Nofath Zukhrufi Haideal</h4>
								<span>Frontend Developer</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="member">
							<div class="member-img">
								<img src="https://media.discordapp.net/attachments/830997955129376778/846051395311239218/photo-1569779213435-ba3167dde7cc.png?width=676&height=676"
									class="img-team" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Tsany Rijalu Ahimsa</h4>
								<span>Frontend Developer</span>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Our Contact</h2>
				</div>
			</div>
			<div class="map">
				<iframe style="border:0; width: 100%; height: 350px;"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.448675461734!2d112.61167171530934!3d-7.952498981437824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sBrawijaya%20University!5e0!3m2!1sen!2sid!4v1621499970268!5m2!1sen!2sid"
					frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="container">
				<div class="row mt-5 justify-content-center">

					<div class="col-lg-10">

						<div class="info-wrap">
							<div class="row">
								<div class="col-lg-4 info">
									<i class="bi bi-geo-alt"></i>
									<h4>Location:</h4>
									<p>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
								</div>

								<div class="col-lg-4 info mt-4 mt-lg-0">
									<i class="bi bi-envelope"></i>
									<h4>Email:</h4>
									<p>info@ajarin.id<br>contact@ajarin.id</p>
								</div>

								<div class="col-lg-4 info mt-4 mt-lg-0">
									<i class="bi bi-phone"></i>
									<h4>Call:</h4>
									<p>(0341) 551611</p>
								</div>
							</div>
						</div>

					</div>

				</div>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">

			<div class="container">

				<div class="row  justify-content-center">
					<div class="col-lg-6">
						<h3>Ajarin.id</h3>
						<p>Solusi mencari guru privat berkualitas.</p>
					</div>
				</div>


				<div class="social-links">
					<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
					<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
					<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
					<a href="#" class="skype"><i class="bi bi-skype"></i></a>
					<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
				</div>

			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>Ajarin.id</span></strong>. <br> All Rights Reserved
			</div>
			<div class="credits">
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="{{ asset('js/home.js') }}"></script>

</body>

</html>
