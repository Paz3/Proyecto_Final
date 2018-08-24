
<?php get_header() ?>
	<main>
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<h1><?php the_title() ?> <i class="far fa-star"></i></h1>
				</div>
			</div>
		</div>

		<?php if ( have_posts() ) { ?>
		<?php while ( have_posts() ) { ?>
			<?php the_post(); ?>
			<?php the_content() ?>
			<?php } ?>
		<?php } else { ?>

		<?php } wp_reset_query(); ?>
	</main>
	
<?php get_footer() ?>