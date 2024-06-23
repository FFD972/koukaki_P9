<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header"> 

		<nav id="site-navigation" class="main-navigation">

                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-toggle__line"></span>
                    <span class="menu-toggle__line"></span>
                    <span class="menu-toggle__line"></span>
                </button> 

            <div class="menuOpen">
                <div>
                    <img class="logo-menu" src= "<?php echo get_template_directory_uri() . '-child/assets/images/logo_menu.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                </div>
                <div class="menu">
                    <ul class="menu-listing">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>

                </div>

                 <div class="menu-cats">
                    <img class="menu-cats__kawaneko" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'; ?>" alt="chat kawaneko">
                    <img class="menu-cats__orenjiiro" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/Orenjiiro.png'; ?>" alt="chat Orenjiiro">
                    <img class="menu-cats__jaakuna" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna.png'; ?>" alt="chat Jaakuna">

                </div>  

                <div class="menu-flowers">
                    <img class="menu-flowers__orchid" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="image fleurs orchid">
                    <img class="menu-flowers__sunflower" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower.png'; ?>" alt="image fleurs sun flower">
                    <img class="menu-flowers__flower" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>" alt="image flower">
                    <img class="menu-flowers__random_flower" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="image fleurs random_flower">
                    <img class="menu-flowers__hibiscus_footer" src= "<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="image fleurs random_flower">
                </div>
                
                </div>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
