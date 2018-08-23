<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<?php //the_content(); ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>

	<main>
	<div class="container">
		<div class="container-fluid">
			<div class="row">

				<h1>¿Quieres contactarme? <i class="far fa-comments"></i></h1>
				<p>Envíame un correo con tus consultas y te contestaré en breve.</p>
				
			</div>
		</div>
	</div>

	<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="well well-sm">
                <form class="form-horizontal">
	                <form action="assets/php/formulario.php" method="post" id="contact_form">
	                    <fieldset>
	                        <div class="form-group">
	                            <div class="col-xs-12">
	                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-xs-12">
	                                <input id="email" name="email" type="text" placeholder="Correo" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-xs-12">
	                                <textarea class="form-control" id="message" name="message" placeholder="Tu mensaje." rows="7"></textarea>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-xs-12">
	                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
	                            </div>
	                        </div>
	                    </fieldset>
					</form>
                </form>
            </div>
        </div>
    </div>
</div>


</main>

<?php get_footer() ?>