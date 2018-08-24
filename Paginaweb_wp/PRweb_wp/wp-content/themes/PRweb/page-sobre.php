<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php //the_content(); ?>

	<main>
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<h1>Me presento <i class="far fa-hand-paper"></i></h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3">
					<img src="<?php bloginfo('template_url')?>/assets/images/paz.png" alt="">
				</div>
				<div class="col-xs-1">
					<p class="p__col--key">{</p>
				</div>
				<div class="col-xs-7">
					<p class="p__col--intro">Soy <strong>Diseñadora en Comunicación Visual</strong> y opté por el camino tecnológico-digital. Mi formación fue en la escuela de Diseño y Humanidades de la Universidad Tecnológica Metropolitana, dónde le dieron importancia a la creación y coordinación de proyectos de comunicación gráfica, enfatizando la
					creatividad, innovación y el desarrollo de habilidades blandas. Cuento con un <strong>diplomado Crossmedia</strong>
					y me encuentro terminando un bootcamp de desarrollo <strong>Front End</strong>, con expectativas personales de
					continuar capacitándome.</p>
				</div>
				<div class="col-xs-1">
					<p class="p__col--key">}</p>
				</div>
			</div>
		</div>
	</div>

		

				
				
				

</main>

<?php get_footer() ?>