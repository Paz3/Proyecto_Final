<?php get_header()  ?>


<main>
	<div class="container">
		<div class="container-fluid">
			<div class="row">

				<h1>Hola <i class="far fa-smile"></i></h1>
				<p>Bienvenidos a mi página web.</p>
				

				<div id="myCarousel" class="carousel slide" data-ride="carousel">

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">

				      	<div class="item active">
				        	<img class="opacidad" src="<?php bloginfo('template_url')?>/assets/images/first.jpg" alt="escritorio">
				          		<div class="carousel-caption d-none d-md-block">
							    	<h5 class="carousel__text--first"><strong>EL DISEÑO ES SIMPLE,</strong> por eso es tan complicado. Paul Rand.</h5>
							  	</div>
				      	</div>

				      	<div class="item">
				        	<img class="opacidad" src="<?php bloginfo('template_url')?>/assets/images/second.jpg" alt="avion">
				        		<div class="carousel-caption d-none d-md-block">
							    	<h5 class="carousel__text--second"><strong>EL DISEÑO</strong> es el pensamiento hecho visual. Saul Bass.</h5>
							  	</div>
				      	</div>
				    
				      	<div class="item">
				        	<img class="opacidad" src="<?php bloginfo('template_url')?>/assets/images/third.jpg" alt="hojas">
				        		<div class="carousel-caption d-none d-md-block">
									<h5 class="carousel__text--third">Todo <strong>ES DISEÑO, ¡TODO!</strong> Paul Rand.</h5>
							  	</div>
				      	</div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>

				</div>

			</div>
		</div>
	</div>
</main>

<?php get_footer() ?>


