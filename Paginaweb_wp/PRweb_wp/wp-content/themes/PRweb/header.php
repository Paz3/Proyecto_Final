<!DOCTYPE html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	
</head>
<body>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diseño Web Paz Romero</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php get_template_part('_includes/iOS', 'icons') ?>


	<?php wp_head() ?>

</head>
<body>

<div class="sidebar">
	<div class="sidebar__elements">
		<a href="index.html"><img class="sidebar__elements--logo" src="<?php bloginfo('template_url')?>/assets/images/logo.png" alt=""></a>

	
		<h3>Paz Romero S.</h3>
		<h4>Diseñadora Gráfica</h4>
		
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'container'			=> null,
				'menu_class'		=> 'sidebar__elements--menu',
				'link_after'		=> '</h2>',
				'link_before'		=> '<h2>'
			)); ?>
			
		<?php } ?>

	</div>
</div>

<nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   	<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>      
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array(
					'theme_location'	=> 'header-menu',
					'container'			=> false,
					'menu_class'		=> 'nav navbar-nav navbar-right mainNav'
				)); ?>
				<?php } ?>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </div>
        
</nav>