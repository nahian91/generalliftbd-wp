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
                <h4 class="glt-col-title">Contact Us</h4>
                <address class="glt-address">
                    <p><i class="fa-solid fa-location-dot"></i> NS Tower, House No-21, Block-J, Gate-4, EXT. Pallabi, Mirpur, Dhaka.</p>
                    <p><i class="fa-solid fa-location-dot"></i> House No-03, Road No-42, Block-C, ABC Point, Shahjalal Upashahar, Sylhet.</p>
                    <p><i class="fa-solid fa-phone"></i> 01621-222255 [Hotline Number]</p>
                    <p><i class="fa-solid fa-phone"></i> 01726-218583 [CEO Number]</p>
                    <p><i class="fa-solid fa-phone"></i> 01712-256270 [Director Number]</p>
                    <p><i class="fa-solid fa-envelope"></i> generallifttechnology@gmail.com</p>
                </address>
                <br>
                <div class="glt-social-minimal">
                    <h4 class="glt-col-title">Social</h4>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/generallifttech" target="_blank" rel="noopener">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a href="https://youtube.com/@generallifttechnology7321" target="_blank" rel="noopener">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="glt-contact-grid-2">
            
            <div class="glt-contact-info-column">

                <div class="glt-contact-methods">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d203.51415999938854!2d90.3606486!3d23.7909669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c187bcee31b9%3A0x7f1a8c791c9d3d05!2sNS%20TOWER!5e1!3m2!1sen!2sbd!4v1773167843531!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="glt-contact-info-column">

                <div class="glt-contact-methods">

                    <iframe src="https://www.google.com/maps/embed?pb=!4v1773167890725!6m8!1m7!1sjInvOQFpN0IagZCtPL8wFA!2m2!1d24.88806144061236!2d91.89025542951728!3f267.66!4f-22.11!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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
