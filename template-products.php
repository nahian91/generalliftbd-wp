<?php 
/*
Template Name: Products
*/
get_header(); ?>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="glt-bc-item active">Products</li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="products" class="glt-products-section glt-section">
    <div class="glt-container">
        <div class="glt-grid-3">
            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post(); 
                    
                    // ACF Fields
                    $badge       = get_field('product_badge');
                    $short_desc  = get_field('product_short_description');
                    $specs       = get_field('product_technical_specs'); // Repeater
                    ?>

                    <div class="glt-prod-card">
                        <div class="glt-prod-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>

                            <?php if ($badge) : ?>
                                <div class="glt-prod-status"><?php echo esc_html($badge); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="glt-prod-info">
                            <span class="glt-cat-tag">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $short_desc ? esc_html($short_desc) : wp_trim_words(get_the_excerpt(), 15); ?></p>

                            <a href="<?php the_permalink(); ?>" class="glt-btn-full">View Details</a>
                        </div>
                    </div>

                <?php 
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<section class="glt-quality glt-section">
    <div class="glt-container">
        <div class="glt-grid-4">
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>ISO 9001:2026</h4>
                <p>Global standards for manufacturing and safety excellence.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-microchip"></i></div>
                <h4>Smart Monitoring</h4>
                <p>IoT-enabled telemetry for predictive maintenance.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-leaf"></i></div>
                <h4>Eco-Engineered</h4>
                <p>Regenerative drives return power to the grid.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <h4>Lifetime Support</h4>
                <p>Engineered for 25+ years of operational service.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>