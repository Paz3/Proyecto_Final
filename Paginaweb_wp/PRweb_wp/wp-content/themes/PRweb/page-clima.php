<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php //the_content(); ?>

	<main>
	<div class="container">
		<div class="container-fluid">
			<div class="row">

				<h1>¿Que me pongo? <i class="far fa-sun"></i></h1>
				<p>Acá un poquito de información extra por si planificamos una reunión y debamos llevar paraguas o andar con una botella de agua.</p>
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<h6 class="main__container_sub">Clima en Santiago</h6>

				<div class="col-xs-12">
						<div class="form-group">
								<select class="form-control" id="select">
									<option>Seleccione una ubicación</option>
									<option value="bla">Barrio Lastarria</option>
									<option value="baq">Baquedano</option>
									<option value="mmo">Manuel Monnt</option>
									<option value="lle">Los Leones</option>
								</select>
							<img src="" class="icon">
						</div>
				</div>


				<div class="col-xs-12" hidden="true" id="escondido">
					<h6 class="main__container_sub" id="resumen"></h6>
						<table class="table table-striped">
							<tr>
								<td>Sensación térmica</td>
								<td id="sensacion"></td>
							</tr>
							<tr>
								<td>Probabilidad de lluvia</td>
								<td id="probabilidad"></td>
							</tr>
							<tr>
								<td>Humedad relativa</td>
								<td id="humedad"></td>
							</tr>
						</table>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-12" id="map"></div>
				</div>
			</div>
		</div>

	</main>

<?php get_footer() ?>