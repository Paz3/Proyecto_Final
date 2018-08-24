<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>

	<main>
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<h1>Actualizado? <i class="far fa-star"></i></h1>
					<p>Revisa ésta sección para que te hagas una idea de lo último en tendencias de diseño gráfico.</p>
				</div>
			</div>
		</div>

		<div class="container">
						
					<div class="container-fluid">
						<div class="row" id="profile-grid">
							<div class="col-sm-4 col-sm-12 profile">

								<?php
									$trends_a = array(
										'post_type'		 => 'trends',
										'posts_per_page' => 1
									);
								
									$get_trends_a = new WP_Query( $trends_a );
								
									while ( $get_trends_a->have_posts() ) {
										$get_trends_a->the_post();

										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

									?>

									
									<?php the_title() ?>
										<div class="panel panel-default">
								          <div class="panel-thumbnail2">
								          	<a href="<?php the_permalink() ?>">
								          		<img src="<?= $thumb_url[0] ?>" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
								          	</a>
								          </div>
								        </div>
								
									<?php } wp_reset_postdata();
								?> 

							</div>
		                  
							<div class="col-sm-4 col-sm-12 profile">

								<?php
									$trends_a = array(
										'post_type'		 => 'trends',
										'posts_per_page' => 1,
										'offset'		 => 1
									);
								
									$get_trends_a = new WP_Query( $trends_a );
								
									while ( $get_trends_a->have_posts() ) {
										$get_trends_a->the_post();

										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

									?>

									
									<?php the_title() ?>

								        <div class="panel panel-default">
								          <div class="panel-thumbnail2">
								          	<a href="<?php the_permalink() ?>">
								          		<img src="<?= $thumb_url[0] ?>" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
								          	</a>
								          </div>
								        </div>

									<?php } wp_reset_postdata();
								?>
						    </div>

							<div class="col-sm-4 col-sm-12 profile">

								<?php
									$trends_a = array(
										'post_type'		 => 'trends',
										'posts_per_page' => 1,
										'offset'		 => 2
									);
								
									$get_trends_a = new WP_Query( $trends_a );
								
									while ( $get_trends_a->have_posts() ) {
										$get_trends_a->the_post();

										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

									?>

									
									<?php the_title() ?>

								        <div class="panel panel-default">
								          <div class="panel-thumbnail2">
								          	<a href="<?php the_permalink() ?>">
								          		<img src="<?= $thumb_url[0] ?>" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
								          	</a>
								          </div>
								        </div>

									<?php } wp_reset_postdata();
								?>
						    </div>							
		   				 </div>
					</div>
				</div>


			<!-- .modal-profile -->
			<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" type="button" data-dismiss="modal">×</button>
							</div>
							<div class="modal-body">
							</div>
						</div>
		        
					</div>
				</div>
	</main>


	

<?php get_footer() ?>