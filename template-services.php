<?php 
/*
Template Name: Services
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
                <li class="glt-bc-item active">Services</li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="services" class="glt-services glt-section glt-bg-slate">
    <div class="glt-container">

        <div class="glt-grid-3">
            <?php
            $args = array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $services_query = new WP_Query($args);
            $count = 1;

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post(); 
                    
                    // Fetch ACF Fields
                    $icon_data = get_field('service_icon'); // Icon Picker return
                    $description = get_field('service_description');
                    ?>

                    <div class="glt-service-card">
                        <div class="glt-card-number"><?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?></div>
                        
                        <div class="glt-card-icon">
                            <?php 
                            if ($icon_data) :
                                // Check if the icon is a URL (likely your .svg file)
                                if (filter_var($icon_data, FILTER_VALIDATE_URL)) : ?>
                                    <img src="<?php echo esc_url($icon_data); ?>" alt="<?php the_title(); ?>" width="32" height="32">
                                <?php 
                                // Check if it's a Dashicon class name
                                elseif (strpos($icon_data, 'dashicons-') !== false) : ?>
                                    <span class="dashicons <?php echo esc_attr($icon_data); ?>" style="font-size: 32px; width:32px; height:32px;"></span>
                                <?php 
                                // Otherwise, treat it as a media ID or raw string
                                else : ?>
                                    <img src="<?php echo esc_url($icon_data); ?>" alt="icon">
                                <?php endif;
                            endif; ?>
                        </div>

                        <h3><?php the_title(); ?></h3>
                        
                        <p>
                            <?php 
                            // Prioritize ACF description, fallback to post content
                            if ($description) {
                                echo esc_html($description);
                            } else {
                                echo wp_trim_words(get_the_excerpt(), 20);
                            }
                            ?>
                        </p>

                        <?php if (get_the_content()) : ?>
                            <a href="<?php the_permalink(); ?>" class="glt-card-link">
                                Learn More <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>

                <?php 
                $count++;
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>