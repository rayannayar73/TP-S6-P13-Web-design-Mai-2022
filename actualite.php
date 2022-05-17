
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
			<?php foreach($liste['blog']as $blog){ ?>
				<div class="col-md-4 animate-box">
					<a href="<?php echo $url."accueil/blog/".slugify($blog['titre'])."-".$blog['id']?>" class="item-grid text-center">
						<div class="image" style="background-image: url(<?php echo $url.$blog['urlImage'] ?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title"><?php echo($blog['titre'])?></h3>
								<h5 class="description"><p style="max-height: 60px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        <?php echo $blog['description']?>
                                    </p></h5>
							</div>
						</div>
					</a>
				</div>
			<?php }?>
			</div>
		</div>
	</div>
