<section>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<?php 
			$diaporama = get_field('diaporama');
			if ($diaporama): ?>
				<div class="carousel-item active">
					<div class="slider d-block w-100">
						<img class="slider d-block w-100" src="<?= $diaporama['diaporama01']; ?>"/>
					</div>
					<div class="carousel-caption d-md-block animated">
						<div class="diapo">
							<h5 style="padding: 0px 15px 0px 15px; line-height: 1; margin-left: -3px; color:<?= $diaporama['color01']?>"; class="fronttitle align-left animated fadeine"> <?= $diaporama['diapotitle01']; ?></h5>
							<br>
							<p class="texttitle"> <?= $diaporama['diapotext01']; ?> </p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php 
			$diaporama01 = get_field('diaporama01');
			if ($diaporama): ?>
				<div class="carousel-item">
					<div class="slider d-block w-100">
						<img class="slider d-block w-100" src="<?= $diaporama01['diaporama02']; ?>"/>
					</div>
					<div class="carousel-caption d-md-block animated">
						<div class="diapo">
							<h5 style="padding: 0px 15px 0px 15px; line-height: 1;margin-left: -3px; color:<?= $diaporama01['color02']?>"; class="fronttitle align-left animated fadeine"> <?= $diaporama01['diapotitle02']; ?></h5>
							<br>
							<p class="texttitle"> <?= $diaporama01['diapotext02']; ?> </p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php 
			$diaporama02 = get_field('diaporama02');
			if ($diaporama): ?>
				<div class="carousel-item">
					<div class="slider d-block w-100">
						<img class="slider d-block w-100" src="<?= $diaporama02['diaporama02']; ?>"/>
					</div>
					<div class="carousel-caption d-md-block animated">
						<div class="diapo">
							<h5 style="padding: 0px 15px 0px 15px; line-height: 1;margin-left: -3px; color:<?= $diaporama02['color02']?>"; class="fronttitle align-left animated fadeine"> <?= $diaporama02['diapotitle02']; ?></h5>
							<br>
							<p class="texttitle"> <?= $diaporama02['diapotext02']; ?> </p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<a class="carousel-control-next animated heartBeat" href="#carouselExampleCaptions" role="button" data-slide="next">
			<i class="fa fa-chevron-right"></i>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>