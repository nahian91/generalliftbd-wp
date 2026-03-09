<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package generallift
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'generallift' ); ?></a>

	 <div class="glt-topbar">
    <div class="glt-container glt-topbar-flex">
        <div class="glt-topbar-left">
            <div class="glt-social-minimal">
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="glt-topbar-right">
            <a href="tel:18005554583" class="glt-top-info"><i class="fa-solid fa-phone"></i> +88 01621 222 255</a>
            <span class="glt-top-info glt-hide-mobile"><i class="fa-solid fa-envelope"></i> info@generalliftbd.com</span>
        </div>
    </div>
</div>

<header class="glt-header">
    <div class="glt-container glt-header-flex">
        <a href="index.php" class="glt-logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
        </a>

        <nav class="glt-nav">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'container'      => false,
        'menu_class'     => 'glt-nav-list',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'walker'         => new GLT_Walker_Nav_Menu(),
    ) );
    ?>
</nav>

        <div class="glt-header-action">
            <a href="#contact" class="glt-btn-primary"><i class="fa-solid fa-magnifying-glass"></i> +88 01621 222 255</a>
            <button class="glt-mobile-toggle"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>
    </div>
</header>
