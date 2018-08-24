<?php get_header() ?>

	<ul>
	<?php
		$arg = array(
			'post_type'		 => 'news',
			'posts_per_page' => 10
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
		<li><?php the_title() ?></li>
		<?php } wp_reset_postdata();
	?>
	</ul>

<?php get_footer() ?>