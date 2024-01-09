<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="?uri=/home" style="color: #1F2532;"><span style="color: #B40C0C;" class="nav-brand-two">WIKI</span>'S</a> 
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
					<!-- <li class="nav-item">
						<a class="nav-link navigation" href="about.html">About</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link ml-5 navigation" href="contact.html" >Contact</a>
					</li>
					<li class="nav-item pt-1">
						<select class="form-select" aria-label="Default select example">
							<option selected>Categories</option>
						    <?php foreach ($categories as $categorie):?>
								
								<option value="<?php echo $categorie->category_id ; ?>"><?php echo $categorie->category_name; ?></option>
							<?php endforeach; ?>
						</select>
						

					</li>
					

					<li class="nav-item">
						<form class="d-flex" style="padding-top: 5px;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                          </form>
					</li>


					<!-- check session -->
					<?php if (isset($_SESSION['id'])){
						// var_dump($_SESSION);
						// echo "id : ".$_SESSION['id']."<br>";
						// echo "name : ".$_SESSION['username']."<br>";
						// echo "le role : ".$_SESSION['role_id']."<br>";
						// echo '<li class="nav-item">';
						// echo '<a class="nav-link ml-5 navigation" href="?uri=/logout" >logout</a>';
						// echo '</li>';
						?>



                  

					<div class="dropdown mt-1 ms-2">
						<a class="btn btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
							<?php echo $_SESSION['username']; ?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li><a class="dropdown-item" href="#">profile</a></li>
							<li><a class="dropdown-item" href="#">add wiki</a></li>
							<li><a class="dropdown-item" href="?uri=/logout/logout">Log out</a></li>
						</ul>
					</div>



						<?php
					}
					else{
						?>
						<li class="nav-item">
						    <a class="nav-link ml-5 navigation" href="?uri=/login" >login</a>
					    </li>
					    <li class="nav-item">
						    <a class="nav-link ml-5 navigation" href="?uri=/register" >register</a>
					    </li>
				 <?php } ?>
						

					



					
                    <!-- <li class="nav-item">
						<a class="nav-link ml-5 navigation" href="?uri=/login" >login</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link ml-5 navigation" href="?uri=/register" >register</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>