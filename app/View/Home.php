<!DOCTYPE html>
<html lang="en">
    <!-- head -->
<?php include '../app/View/layout/head.php' ?>
<body>
<!-- navbar -->
<?php include '../app/View/layout/navbar.php' ?>




	<!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./asset/images/law-img.jpg" class="d-block w-100 "  alt="...">
        <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
            <h5>les droits de l'homme</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
        </div>
    </div>


    <div class="carousel-item">
      <img src="./asset/images/history-img.png" class="d-block w-100 " alt="...">
      <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
            <h5>les histoires des hommes</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
        </div>
    </div>


    <div class="carousel-item">
      <img src="./asset/images/medcin-img.png" class="d-block w-100 " alt="...">
      <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
            <h5 >medical news</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
      </div>
    </div>
    
  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carousel -->
<h1>welcome back</h1>
<?php ?>
  





<?php foreach ($wikis as $wiki):?>
    <section class="about m-5" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="./asset/images/img-slide-1.jpg"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2><?php echo $wiki->title; ?> <br> </h2>
							
						<h5><?php echo $wiki->description; ?></h5>
            <p>ajouter a : <em style="color:brown;"><?php echo $wiki->date_create; ?></em><br>
            par : <b style="color:brown;"><?php echo $wiki->author_name; ?></b>
            </p>
            <button class="btn btn-danger">voir</button>
					</div>
				</div>
		</div>
 </div>      
</section>
<?php endforeach; ?>









































<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- script js -->
<script src='./asset/js/script.js'></script>
</body>
</html>



