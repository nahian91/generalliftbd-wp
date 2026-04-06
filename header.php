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

<div class="glt-topbar animate__animated animate__fadeIn">
    <div class="glt-container glt-topbar-flex">
        <div class="glt-topbar-left">
            <div class="glt-social-minimal">
                <a href="https://www.facebook.com/generallifttech" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://youtube.com/@generallifttechnology7321?si=xW_QyAyBkJnM8Mli" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="glt-topbar-right">
            <a href="tel:18005554583" class="glt-top-info"><i class="fa-solid fa-phone"></i> +88 01621 222 255</a>
            <span class="glt-top-info glt-hide-mobile"><i class="fa-solid fa-envelope"></i> generallifttechnology@gmail.com</span>
        </div>
    </div>
</div>

<style>
    /* Base Header Setup */
    .glt-header { 
        background: #fff; 
        width: 100%; 
        position: relative; 
        z-index: 9999; 
        transition: all 0.3s ease;
    }

    /* Sticky State - Triggered by JS */
    .glt-header.is-sticky {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        animation: gltSlideDown 0.4s ease-in-out;
        border-bottom: 1px solid #eee;
    }

    @keyframes gltSlideDown {
        from { transform: translateY(-100%); }
        to { transform: translateY(0); }
    }

    .glt-header-flex { display: flex; align-items: center; justify-content: space-between; margin: 0 auto; padding: 10px 20px; }
    .glt-nav-list { display: flex; list-style: none; gap: 20px; margin: 0; padding: 0; }
    .glt-logo img { max-height: 50px; width: auto; }

    /* Mobile Logic */
    @media (max-width: 991px) {
        .glt-mobile-toggle { 
            display: flex !important; 
            align-items: center;
            justify-content: center;
            background: #f4f4f4; 
            border: none; 
            font-size: 20px; 
            cursor: pointer; 
            width: 45px;
            height: 45px;
            border-radius: 5px;
            order: 3;
            transition: transform 0.3s ease;
        }

        .glt-nav {
            position: absolute !important;
            top: 100% !important;
            left: 0 !important;
            width: 100% !important;
            background: #ffffff !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
            z-index: 10000 !important;
            max-height: 0;
            opacity: 0;
            visibility: hidden;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
            display: block !important;
        }

        .glt-nav.active-menu {
            max-height: 80vh !important;
            opacity: 1 !important;
            visibility: visible !important;
            border-top: 2px solid #007bff;
        }

        .glt-nav-list {
            flex-direction: column;
            padding: 20px !important;
        }
        
        .glt-nav-list li { 
            width: 100%; 
            padding: 12px 0; 
            border-bottom: 1px solid #f0f0f0; 
        }
    }
</style>

<header class="glt-header" id="main-header">
    <div class="glt-container glt-header-flex">
        
        <a href="<?php echo esc_url(home_url('/')); ?>" class="glt-logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo">
        </a>

        <nav class="glt-nav" id="glt-navigation">
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

        <div class="glt-header-action" style="display: flex; align-items: center; gap: 10px;">
            <a href="tel:+8801621222255" class="glt-btn-primary" style="padding: 10px 15px; text-decoration: none; border-radius: 5px; background: #007bff; color: #fff;">
                <i class="fa-solid fa-phone"></i>
            </a>

            <?php echo do_shortcode('[gtranslate]');?>

            <button class="glt-mobile-toggle" id="glt-trigger">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const trigger = document.getElementById('glt-trigger');
    const menu = document.getElementById('glt-navigation');
    const topbarHeight = document.querySelector('.glt-topbar')?.offsetHeight || 50;

    // --- STICKY LOGIC ---
    window.addEventListener('scroll', function() {
        if (window.scrollY > topbarHeight + 20) {
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }
    });

    // --- MENU TOGGLE LOGIC ---
    if (trigger && menu) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            menu.classList.toggle('active-menu');
            
            if(menu.classList.contains('active-menu')) {
                trigger.style.transform = "rotate(90deg)";
            } else {
                trigger.style.transform = "rotate(0deg)";
            }
        });

        // Close menu if user clicks anywhere else
        document.addEventListener('click', function(event) {
            if (!menu.contains(event.target) && !trigger.contains(event.target)) {
                menu.classList.remove('active-menu');
                trigger.style.transform = "rotate(0deg)";
            }
        });
    }
});
</script>