<?php 
/*
Template Name: Brands
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
                <li class="glt-bc-item active">Brands</li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="gallery" class="glt-gallery glt-section glt-bg-alt">
    <div class="glt-container">
        <div class="glt-gallery-grid-pro">

            <?php
            $args = array(
                'post_type'      => 'brand',
                'posts_per_page' => -1, // Set to a number if you want pagination
                'orderby'        => 'title',
                'order'          => 'ASC',
            );

            $brands_query = new WP_Query($args);

            if ($brands_query->have_posts()) :
                while ($brands_query->have_posts()) : $brands_query->the_post(); 
                    
                    // Fetch the featured image URL, fallback to a placeholder if empty
                    $brand_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$brand_img) {
                        $brand_img = 'https://via.placeholder.com/800x600?text=No+Image';
                    }
                    ?>

                    <div class="glt-gallery-card">
                        <div class="glt-card-media">
                            <img src="<?php echo esc_url($brand_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        </div>
                        <div class="glt-card-overlay">
                            <div class="glt-card-content">
                                <h5><?php the_title(); ?></h5>
                                <?php if (get_the_excerpt()) : ?>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="glt-view-btn">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php _e('No brands found.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_header(); // Note: Your original code had get_footer here, which is correct. Fix if needed. ?>
<?php get_footer(); ?>