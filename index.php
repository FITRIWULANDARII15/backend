<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kebudayaan  Jawa barat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contac</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/foto1.jpg" alt="sunrise" width="1500" height="500">
      <div class="carousel-caption">
        <h3>Makanan sunda</h3>
        <p>ayo cobaaa</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/foto4.jpg" alt="nature" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Masakan sunda</h3>
        <p>ayo cobaa</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/foto3.jpg" alt="island" width="1500" height="500">
      <div class="carousel-caption">
        <h3>Masakan sunda</h3>
        <p>ayo cobaa</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-3">
		<h2 class="text-center"> Kesenian Jawa barat</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="image/foto6.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-5">tarian sunda</h2>
			<p class="py-3">Jawa barat</p>
			<a href="about.php" class="btn btn-info">baca selengkapnya</a>
		</div>
	</div>
</section>

<section class="my-5">
<div class="py-3">
	<h2 class="text-center">Masakan Nusantara</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/manis1.jpg" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">gurandil</h4>
    					<p class="card-text">makanan.</p>
   						 <a href="#" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/pedas3.jpg" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">ceker kaki</h4>
    					<p class="card-text">makanan.</p>
   						 <a href="#" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/asin1.jfif" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">ayam crispy</h4>
    					<p class="card-text">makanan.</p>
   						 <a href="#" class="btn btn-primary">See Profile</a>
  						</div>
					</div>
				</div>


			</div>
		</div>
</section>


		
	</div>
</section>

<footer>
	<p class="p-2 bg-info text-white text-center">@ fitri wulandari</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
