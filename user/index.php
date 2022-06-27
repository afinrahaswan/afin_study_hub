<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Halaman user</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
</body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home!</title>
  </head>
  <body>
   
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src=" " class="d-block w-100" height="550" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: rgb(15, 20, 20);">
                <h1>welcome</h1>
                <h2> Kejujuran Adalah Cermin Dari Kepribadianmu </h2>
            </div>
          </div>
          </div>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
      
   
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-black">

        <div class="container">
          <a class="navbar-brand text-white " href="#">HRA GROUP</a>
          <a class="navbar-brand" href="#">
            <img src="https://media-exp1.licdn.com/dms/image/C510BAQHFY1gKRuIaLQ/company-logo_200_200/0/1519884072657?e=2147483647&v=beta&t=AEtQRAJZA_vJe984K0IQjj9y46MBYlVYj5eu_f0pqXU" alt="" width="70" height="50" class="rounded-circle">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active  text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
			  <a class="nav-link  text-white" href="absensi.php">Absensi</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link  text-white" href="contact.html">Aktivitas</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link  text-white" href="contact.html">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-white"  href="logout.php">Logout</a>
              </li>
            
            </ul>          
          </div>
        </div>
    </div>
</nav>



<!-- <div class="alert alert-success" role="alert" style="color: black; text-align: center;">
    <h6 class="alert-heading">About!</h6>
    <p>perusahaan E-commerce Tujuan utamanya adalah untuk memperdayakan pertumbuhan E-commerce di Asia Tenggara.
    Klik <a href="https://jetcommerce.co.id"> disini untuk mengetahui informasi lebih lanjut.
    </p>
    <hr>
    <a>Alamat Jl.Pluit Selatan Raya No.2, Landmark Pluit
        Tower B2 7th Floor. Penjaringan, Telepon: (021)80823118.</a>
  </div> -->

<!-- <div class="alert alert-secondary" role="alert">
    perusahaan E-commerce Enabler,
    Tujuan utamanya adalah untuk memperdayakan pertumbuhan E-commerce di Asia Tenggara.
    Klik <a href="https://jetcommerce.co.id"> disini untuk mengetahui informasi lebih lanjut. -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>