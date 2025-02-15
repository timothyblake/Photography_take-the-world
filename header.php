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
    <link rel="apple-touch-icon" sizes="57x57" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/favicon/faviconapple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconapple-icon-180x180.png">

    <!--Web Favicons-->
    <link rel="icon" type="image/png" sizes="192x192"  href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/faviconandroid-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://timothyblake.com/wp-content/themes/tb-compile/images/favicon/favicon-16x16.png">

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
					
					<img src="https://timothyblake.com/wp-content/themes/tb-compile/img/timothy-blake-logo-black.svg" alt="Timothy Blake logo" width="50" class="light-mode-logo"/>

					<img src="https://timothyblake.com/wp-content/themes/tb-compile/images/timothy-blake-logo-white.svg" alt="Timothy Blake logo" width="50" class="dark-mode-logo" class="py-3"/>
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



