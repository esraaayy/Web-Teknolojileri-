<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>Web_Teknolojileri</title>

</head>

<body>




	<nav class="navbar navbar-expand-sm fixed-top 
	bg-info navbar-white">

		<div class="container">
		
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="index.html" class="nav-link active  text-white">
	      				Hakkımda
	      				</a></li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
	      				Özgeçmiş
	      				</a></li>

	      			<li class="nav-item">
						<a href="sehrim.html" class="nav-link active  text-white">
	      				Şehrim
	      				</a></li>	

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
	      				Mirasımız
	      				</a></li>

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
	      				İletişim
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.html" class="nav-link active  text-white">
	      				Log-In
	      				</a></li>					
				</ul>
			</div>

		</div>
	</nav>

	<header>

		<div class="bg-info text-light jumbotron hosgeldiniz-jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 ">
						MESAJINIZ VAR
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<?php

			error_reporting(0);

			if(isset($_POST['gonder'])){
    
    			$ad=$_POST["ad"];
    			$soyad=$_POST["soyad"];
    			$email=$_POST["email"];
    			$cinsiyet=$_POST["cinsiyet"];
    			$konu=$_POST["konu"];
    			$diller=$_POST["dil"];
    			$mesaj=$_POST["mesaj"];
    			if($ad!="" && $soyad!="" && $email!="" && $cinsiyet!="" && $konu!="" && $diller!="" && $mesaj!=""){
        			
					echo "Ad Soyad : $ad $soyad <br>";
        			echo "E-Mail : $email <br>";
        			echo "Cinsiyet : $cinsiyet <br>";
        			echo "Konu : $konu <br>";
        			echo "Diller : ";
        			foreach ($diller as $key => $value) {
            			echo "$value / ";
        			}
        			echo "<br>Mesaj : $mesaj";
    			}
    			else{
        			header("Location: iletisim.html");
    			}
			}
			else {
    			header("Location: iletisim.html");
			}
			?>
			
		</div>
    

	</main>


	<footer class="py-5 bg-info text-white text-center">
		Web_Teknolojileri_Projesi © 2023
	</footer>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


   
	

</body>

</html>
