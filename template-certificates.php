<?php 
/*
Template Name: Certificates
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
                <li class="glt-bc-item active">Certificates</li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <p class="glt-page-subtitle">Recognized excellence and industry-standard certifications.</p>
    </div>
</section>

<section id="gallery" class="glt-gallery glt-section glt-bg-alt">
    <div class="glt-container">
        <div class="glt-gallery-grid-pro">

            <?php
            $args = array(
                'post_type'      => 'certificate',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $cert_query = new WP_Query($args);

            if ($cert_query->have_posts()) :
                while ($cert_query->have_posts()) : $cert_query->the_post(); 
                    
                    // Get the image IDs and URLs
                    $full_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $thumb_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    
                    // Fallback if no image is set
                    if (!$thumb_img_url) {
                        $thumb_img_url = 'https://via.placeholder.com/800x1100?text=Certificate+Pending';
                        $full_img_url = $thumb_img_url;
                    }
                    ?>

                    <div class="glt-gallery-card">
                        <div class="glt-card-media">
                            <img src="<?php echo esc_url($thumb_img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <div class="glt-card-badge">
                                <?php echo get_the_date('Y'); ?>
                            </div>
                        </div>
                        <div class="glt-card-overlay">
                            <div class="glt-card-content">
                                <h5><?php the_title(); ?></h5>
                                <?php if (has_excerpt()) : ?>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                <?php else: ?>
                                    <p>Official Certification</p>
                                <?php endif; ?>
                                
                                <a href="<?php echo esc_url($full_img_url); ?>" class="glt-view-btn" target="_blank">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="glt-no-results">
                    <p><?php _e('No certificates found.'); ?></p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>