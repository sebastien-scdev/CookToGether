<?php
/*
Template Name: 404 
*/
?>

<?php get_header(); ?>

<section>
	<!-- start-->
	<div class="container mt-7">
		<div class="col-md-12">
			<section class="text-center error-404 not-found mt-7 mb-7">
				<h4>Désolé mais cette page n'existe pas.</h4>
				<p>Trouver la page ici :</p>
				<div class="clearfix"></div>
				<form role="search" method="post" class="form form-group" action="<?php echo home_url( '/' ); ?>">
					<div class="u-PaddingLeft10 u-PaddingRight10">
						<div class="input-group">
							<input type="search" required class="form-control" placeholder="Find" value="" name="s"
								title="Search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"
									style="padding: 5px 20px!important; height: 38px;">
									ok
								</button>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<input type="hidden" name="search-type" value="general" />
				</form>
			</section>
		</div>
	</div>
</section>

<?php get_footer(); ?>