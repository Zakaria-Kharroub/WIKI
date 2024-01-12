<?php foreach ($searchResults as $wiki):?>
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
            id : <?php echo $wiki->wiki_id; ?><br>
            
            <a class="btn btn-danger" href="?uri=home/wikiDetail/<?php echo $wiki->wiki_id; ?>">Voir plus</a>
					</div>
				</div>
		</div>
 </div>      
</section>
<?php endforeach; ?>