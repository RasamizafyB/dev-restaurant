<?php
/*
Template Name: Archive Recipes
Template Post Type: page
*/
?>

<?php get_header() ?>


	<header>
		
	</header>

	<section class="jumbotron jumbotron-fluid bkgImageHeader">
		<?php include 'assets/php/navbar.php' ?>
		<div class="container-page fondjumbotron">
			<h2 class="jumbotronTitle">
				The Chef's selection
			</h2>
			<h1 class=" highlightedTitle">
				Recipes Blog
			</h1>
			<div class="linkCheckMenu">
				<hr class="line">
				<a>Check our menu</a>
			</div>
		</div>
	</section>

	<div class="styleAtricleSection">
		<section class="container-page">
			<section>
 				<?php $meals = get_terms(['taxonomy' => 'meal']); ?> 
 					<?php if (is_array($meals)): ?>
						<ul class="navCategory">
							<?php foreach ($meals as $meal): ?>
								<li class="navItemCategory font-weight-bold">
									<a href="<?= get_term_link($meal) ?>" class=" <?= is_tax('meal', $meal->term_id) ? 'active' : '' ?>"><?= $meal->name ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
			</section>
			<!-- template card deux premier -->

			<section>
				<?php 
					$query = new WP_Query([
						'post_type' => 'recipes',
						'posts_per_page' => 4,
						'orderby' => 'time',
						'order' => 'DESC'
					]);
					
					while($query->have_posts()): $query->the_post();
				?>
						<div id="templateCard">
						  	<div class="description-recipe text-center">
						  	  	<div class="body-recipe">
						  	  		<div class="articleDate">
										  <h6 class="card-subtitle mb-2 text-muted text-uppercase"><img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="time clock">    <?php the_time("F d, Y"); ?></h6>
						  	  		</div>
									<h5 class="card-title titleCategoryArticle"><?php the_terms(get_the_ID(), 'meal') ?></h5>
									
									<h6 class="card-title titleArticle"><?php the_title(); ?></h6>
									<div class=" littleDescriptionCard">
										<?php the_excerpt(); ?>
									</div>
						  	  	  	<a class="btn btn-dark" id="buttonArticleReadMore" href="<?php the_permalink(); ?>" role="button">read more</a>
						  	  	</div>
						  	</div>
						  	<div class="img-recipe">
						  	  	<?php the_post_thumbnail('card-image-reciep', ['class' => 'card-img', 'id' => 'cardImg', 'alt' => '' ]); ?>
						  	</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>

				<nav class="navPagination" aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item numberPageContent">
							<a class="page-link bkgArrow" href="#" aria-label="Previous">
							    <span class="styleItemsPagination" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
							</a>
						</li>
						<li class="page-item numberPageContent">
							<a class="page-link styleItemsPagination" href="#">1</a>
						</li>
						<li class="page-item numberPageContent">
							<a class="page-link styleItemsPagination" href="#">2</a>
						</li>
						<li class="page-item numberPageContent">
							<a class="page-link styleItemsPagination" href="#">3</a>
						</li>
						<li class="page-item numberPageContent">
						  <a class="page-link bkgArrow" href="#" aria-label="Next">
						    <span class="styleItemsPagination" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
						  </a>
						</li>
					</ul>
				</nav>
			</section>
		</section>
	</div>
	
	<?php include 'assets/php/home-menu.php' ?>


<?php get_footer() ?>