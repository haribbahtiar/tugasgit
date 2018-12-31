<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/icon.png">
	<title>Form Admin</title>
	<link rel="stylesheet" type="text/css" href="styletable.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background: #282828;
			font-family: tahoma;
			text-align: justify;
		}
		#about h2{
			margin-bottom: 47px;
			margin-top: 12px;
		}
		#about .social-link-text{
			margin-top: 50px;
			margin-bottom: 25px;
		}
		#about .about-link{
			padding-left: 0px;
		}
		#about .about-link li{
			display: inline-block;
		}
		#about .about-link li a i{
			width: 50px;
			height: 50px;
			border-radius: 50%;
			line-height: 50px;
			text-align: center;
			border: 1px solid #d6c6b2;
			margin-right: 10px;
			font-size: 22px;
			color: #d6c6b2;
			transition: all .3s;
		}
		#about .about-link li a i:hover{
			color: #222222;
			background: #d6c6b2;
			border-color: #d6c6b2;
		}
		.color-3{
			color: #d6c6b2;
		}
		.text-white{
			color: white;
		}
		.btn-danger{
			border-radius: 0;
			padding: 10px 20px;
		}
	</style>
</head>
<body>
	<section id="about">
		<div class="container">
			<br>
			<h2 class="color-3"><b>Data Pendaftar</b></h2>
			<p class="p-first text-white" align="center">
			<?php
				echo "Nama: ".$_GET['nama']."</br>";
				echo "Kata Sandi: ".$_GET['password']."</br>";
				echo "Jenis Kelamin: ".$_GET['jenis_kelamin']."</br>";
				if (isset($_GET['keahlian'])!=''){
					echo "Keahlian: ".$_GET['keahlian']."</br>";
                }
                if (isset($_GET['keahlian1'])!=''){
                	echo "Keahlian: ".$_GET['keahlian1']."</br>";
                }
                if (isset($_GET['keahlian2'])!='')
                {
                	echo "Keahlian: ".$_GET['keahlian2']."</br>";
                }
				echo "Tempat Lahir: ".$_GET['tempat_lahir']."</br>";
				echo "Deskripsi Diri: ".$_GET['deskripsi']."</br>";
			?>
			</p>
			<h3 class="color-3 social-link-text">
				<button class="btn btn-danger" onclick="window.location.href='page2.html'">Intip Galeriku!</button>
				<button class="btn btn-danger" onclick="window.location.href='page3.html'">Kuy Lihat KRS!</button>
				<button class="btn btn-danger" onclick="window.location.href='page4.html'">Hiburan Dikit</button>
				<button class="btn btn-danger" onclick="window.location.href='page1.html'">Kembali</button>
			</h3>
			<ul class="about-link">
				<li><a href="https://www.facebook.com/haribbahtiar"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/haribbahtiar"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/haribbahtiar/"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCSTbG4RPvEAr-irQXeanpLQ"><i class="fa fa-youtube-play"></i></a></li>
			</ul>
		</div>
	</section>
</body>
</html>