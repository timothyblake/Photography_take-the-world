<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TAKE-THE-WORLD_Timothy_Blake
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	 <!-- Bootstrap 5.3.2 CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <!--Apple Touch Icons-->
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="Timothy Blake" />
	<link rel="manifest" href="/site.webmanifest" />

	 <!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&family=Rubik:ital,wght@0,300..900;1,300..900&family=Handlee&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



	 <header class="py-2 header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					test
					<img src="https://timothyblake.com/_astro/timothy-blake-logo-black.D9h9S3wC_ZVwjfD.svg" alt="Timothy Blake logo" width="50" class="light-mode-logo"/>

				</a>
            </div>

            <div class="d-flex align-items-center  mr-5">
               
			<div class="hamburger-menu">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>            

		
           
        </div>
    </header>


	

<div class="fullscreen-menu">
    <nav>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
    </nav>
</div>



