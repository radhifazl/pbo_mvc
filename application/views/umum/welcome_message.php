<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: sans-serif;
			color: #FFF;
		}

		.content {
			width: 100%;
			min-height: 100vh;
			height: 100%;
			background: #1c1c1c;
		}

		.form-wrapper {
			width: 70%;
			padding: 1rem;
			padding-top: 5rem;
			margin: auto;
		}

		#form {
			width: 100%;
			display: flex;
			gap: 0.8rem;
		}

		#form .inp-search {
			width: 100%;
			padding: 0.8rem 1rem;
			border: none;
			outline: none;
			background-color: #3b3b3b;
			color: #FFF;
		}

		.btn-search {
			border: none;
			background: #3b3b3b;
			padding: 0.5rem 2rem;
			color: #a8a8a8;
			font-size: 1rem;
			cursor: pointer;
			transition: 0.35s ease-in-out;
		}

		.btn-search:hover {
			background: #5c5b5b;
		}

		.artikel {
			display: flex;
			width: 800px;
			height: 200px;
			gap: 1rem;
			background: #3b3b3b;
			position: relative;
		}
		#artikel-list {
			width: 100%;
			list-style: none;
			gap: 1rem;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.artikel-list-wrapper {
			margin: auto;
			width: 90%;
			padding: 1rem;
		}
		.artikel .artikel-img {
			width: 30%;
		}
		.artikel-teks {
			width: 50%;
			padding: 1rem;
		}
		.artikel-teks h3 {
			margin-bottom: 0.7rem;
		}
		.artikel-teks p {
			color: #F0F0F0;
		}
		.artikel-teks a {
			position: absolute;
			bottom: 8%;
		}
		.artikel .artikel-img img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>

	<title>Artikel</title>
</head>
<body>
	<div class="content">
		<div class="form-wrapper">
			<form method="POST" id="form">
				<input type="text" name="search" id="search" placeholder="Cari artikel" class="inp-search">
				<button class="btn-search">Cari</button>
			</form>
		</div>


		<div class="artikel-list-wrapper">
			<ul id="artikel-list">
				<li class="artikel-item">
					<div class="artikel">
						<div class="artikel-img">
							<img src="<?php echo base_url('image/'. 'img-1.jpg');?>" alt="Roronoa Raply">
						</div>
						<div class="artikel-teks">
							<h3>Roronoa Rapli</h3>
							<p>Roronoa Rapli berhasil menebas kaido di gang aut</p>
							<a href="">Lihat artikel</a>
						</div>
					</div>
				</li>
				<li class="artikel-item">
					<div class="artikel">
						<div class="artikel-img">
							<img src="<?php echo base_url('image/'. 'img-2.jpg');?>" alt="Roronoa Raply">
						</div>
						<div class="artikel-teks">
							<h3>7 Manusia Ter-ganteng versi On The Spot</h3>
							<p>Inilah 7 Manusia Ter-ganteng, nomor 5 bikin tercengang</p>
							<a href="">Lihat artikel</a>
						</div>
					</div>
				</li>
				<li class="artikel-item">
					<div class="artikel">
						<div class="artikel-img">
							<img src="<?php echo base_url('image/'. 'img-3.jpg');?>" alt="Roronoa Raply">
						</div>
						<div class="artikel-teks">
							<h3>Mr.R berhasil menghack NASA dengan HTML</h3>
							<p>Berikut prestasi Mr. R selama menjadi 12 RPL 1</p>
							<a href="https://www.merdeka.com/peristiwa/fakta-fakta-hacker-haikal-bobol-ratusan-situs-hingga-direkrut-polri.html">Lihat artikel</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>