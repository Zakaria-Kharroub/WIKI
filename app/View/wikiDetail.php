
<!DOCTYPE html>
<html lang="en">
    <!-- head -->
<?php include '../app/View/layout/head.php' ?>
<body class="bg-light">
<!-- navbar -->
<?php include '../app/View/layout/navbar.php' ?>



<div class="mt-5  " >
-----
<section class=" container about mt-5" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="./asset/images/img-slide-1.jpg"></div>
				</div>
				<div class="col-lg-7 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h1><b><?php echo $wiki->title; ?></b> </h1>

                        <h4 class='mt-4 ps-2' ><b>description</b></h4>
							
						<h5 class='ps-3'><?php echo $wiki->description; ?></h5>
                       
    
					</div>
                    <h4 class='mt-4' >ajouter par : <b class='text-danger '><?php echo $wiki->author_name; ?></b></h4>
                    
				</div>
               
		</div>
        <h5 class='mt-3' >la date de pulication : <em style="color:brown;"><?php echo $wiki->date_create; ?></em></h5>

        <h5 class='mt-4'># les tags de cette wiki</h5>
        <h6 class='text-danger'><?php echo $wiki->tag_names; ?></h6>

        <h5>cette wiki dans dans la categorie de : <?php echo $wiki->category_name; ?></h5>


 </div>    
  
</section>

</div>
























  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
