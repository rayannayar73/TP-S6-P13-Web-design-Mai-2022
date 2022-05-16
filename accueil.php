
	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Nos projets</h2>
					<p>Très loin, derrière les grattes ciels, loin de la ville et du pays, il y a les grands blancs qui sont entrain de fondre. 
						Les animaux ne trouvent plus d'abris, les ours ne peuvent plus hiberner. C'est pour les sauver que nous existons, avec <b>vous</b>. 
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-server"></i>
						<div class="desc">
							<h3>Administration</h3>
							<p>Nous sommes répartis dans plusieurs pays comme l'Europe, l'Amérique, l'Australie. No actions sont donc universelles et impactent beaucoup sur la faune antarctique. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-money"></i>
						<div class="desc">
							<h3>Collecte de fond</h3>
							<p>Par l'argent que vous donnez, nous donnons de la nourriture et des abris aux animaux. Des espaces naturelles, des parc zoologiques et des abris ont déjà été construits.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-tablet"></i>
						<div class="desc">
							<h3>Blog-Partage</h3>
							<p>Prochainement il y a aussi des actualités sur nos projets concrétisés et d'autres nouvelles sur les dégats causés par la hausse de temperature dans le monde.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Actualités</h2>
				</div>
			</div>
			<div class="row">
                <?php foreach($liste['blog']as $blog){ ?>
				<div class="col-md-4 animate-box">
					<a href="<?php echo $url."accueil/blog/".slugify($blog['titre'])."-".$blog['id']?>" class="item-grid text-center">
						<div class="image" style="background-image: url(<?php echo $url ?>images/incidents/paysage.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title"><?php echo $blog['titre']?></h3>
								<h5 class="description"><?php echo $blog['description']?></h5>
							</div>
						</div>
					</a>
				</div>
                <?php }?>
				<div class="col-md-12 text-center animate-box">
					<p><a href="<?php echo $url ?>accueil/actualite" class="btn btn-primary with-arrow">Voir tous les actualités <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>