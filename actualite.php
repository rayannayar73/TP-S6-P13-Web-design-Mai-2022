
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
			<?php foreach($liste['blog']as $blog){ ?>
				<div class="col-md-4 animate-box">
					<a href="index.php?pageRedirect=detail-actualite&blog=<?php echo $blog['id']?>" class="item-grid text-center">
						<div class="image" style="background-image: url(<?php echo $url."".$blog['urlImage']?>/image_4.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title"><?php echo($blog['titre'])?></h3>
								<h5 class="description"><?php echo($blog['description'])?></h5>
							</div>
						</div>
					</a>
				</div>
			<?php }?>
			</div>
		</div>
	</div>
