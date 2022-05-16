
	<div class="fh5co-about animate-box">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<h2><?php echo $oneBlog['titre']?></h2>
			<p><?php echo ("en ".($oneBlog['lieu'])."  le ".$oneBlog['dateIncident'])?></p>
		</div>	
		<div class="container">
			<div class="col-md-6 animate-box">
				<figure>
					<img src="<?php echo $url ?>images/about-img.jpg" alt="Free HTML5 Template" class="img-responsive">
				</figure>
			</div>
			<div class="col-md-4  animate-box">
				<p><?php echo $oneBlog['description']?></p>
				<p><a href="<?php echo $url?>accueil/donnez-de-l-argent" class="btn btn-primary btn-outline with-arrow">Donnez de l'argent <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
