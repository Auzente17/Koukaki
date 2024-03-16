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

        <div class="buttonMenu">
            <span> </span>
</div>
<ul>
    <li class="site-title"><a href="<?php echo esc_url( home_url('/')); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
</ul>
</nav><!-- Site-navigation -->   

<section class="menu-items activeMenu">
    <div class="menu-items__container">
        <img id="logoMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/menulogo.png'; ?>" alt="Petit logo site Koukaki">
        <img id="blueCatMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/bleuKawaneko.png'; ?>" alt="image du chat bleu Kawaneco">
        <img id="blackCatMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/noirjaakuna.png'; ?>" alt="image du chat noir Jaakuna">
        <img id="orangeCatMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orangeonejiiro.png'; ?>" alt="image du chat orange Onejiiro">
        <img id="sunflowerMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>" alt="image d'une marguerite">
        <img id="orchidMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="image d'une orchidée violette">
        <img id="hibiscusMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="image d'un hibiscus">
        <img id="randomMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="image d'une fleur violette">
        <img id="flowerMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flowermenu.png'; ?>" alt="image d'une fleur orange">

                   
        <ul class="listMenu">
            <li><a href="#story"><span class="animeLink">Histoire</span></a></li>
            <li><a href="#characters"><span class="animeLink">Personnages</span></a></li>
            <li><a href="#place"><span class="animeLink">Lieu</span></a></li>
            <li><a href="#my-studio"><span class="animeLink">Studio Koukaki</span></a></li>
            </ul>

            <p class="paragrapheMenu">STUDIO KOUKAKI</p>
        </div>
</section>
	</header><!-- #masthead -->
    </div>
</body>

</html>