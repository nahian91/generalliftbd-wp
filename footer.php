<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package generallift
 */

?>

<footer class="glt-footer">
    <div class="glt-container">
        <div class="glt-footer-main">
            <div class="glt-footer-col">
                <h4 class="glt-col-title">About Us</h4>
                <p class="glt-brand-desc">
                    General Lift Technology is a leading lift company in Bangladesh, specializing in state-of-the-art elevator solutions for residential, commercial, and industrial buildings. With a commitment to innovation and safety, General Lift Technology offers a wide range of elevator products and services tailored to meet the unique needs of its customers.
                </p>
            </div>

            <div class="glt-footer-col">
    <h4 class="glt-col-title">Important Links</h4>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'footer-1',
        'container'      => false,
        'items_wrap'     => '<ul class="glt-link-list">%3$s</ul>',
        'fallback_cb'    => false,
    ) );
    ?>
</div>

<div class="glt-footer-col">
    <h4 class="glt-col-title">Quick Links</h4>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'footer-2',
        'container'      => false,
        'items_wrap'     => '<ul class="glt-link-list">%3$s</ul>',
        'fallback_cb'    => false,
    ) );
    ?>
</div>

            <div class="glt-footer-col">
                <h4 class="glt-col-title">Head Office</h4>
                <address class="glt-address">
                    <p><i class="fa-solid fa-location-dot"></i> NS Tower, House No-21, Block-J, Gate-4, EXT. Pallabi, Mirpur, Dhaka.</p>
                    <p><i class="fa-solid fa-phone"></i> 01621-222255</p>
                    <p><i class="fa-solid fa-envelope"></i> generallifttechnology@gmail.com</p>
                </address>
            </div>
        </div>

        <div class="glt-footer-bottom">
            <div class="glt-bottom-inner">
                <p class="glt-copy">&copy; 2026 Design & Developed by <a href="https://infinityflamesoft.com/" target="_blank">Infinity Flame Soft</a>.</p>
                <div class="footer-bottom-links">
    <div class="glt-legal">
    <?php
    $menu_name = 'footer-3'; // The theme_location ID
    $locations = get_nav_menu_locations();
    
    if (isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $count = 0;
        $total = count($menu_items);

        foreach ($menu_items as $item) {
            $count++;
            echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
            
            // Add the separator ONLY if it's NOT the last item
            if ($count < $total) {
                echo '<span class="glt-sep">|</span>';
            }
        }
    }
    ?>
</div>
</div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
