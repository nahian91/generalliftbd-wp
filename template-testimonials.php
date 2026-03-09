<?php 
/*
Template Name: Testimonials
*/
get_header(); ?>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="glt-bc-item active"><?php the_title(); ?></li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p class="glt-page-subtitle"><?php echo get_the_excerpt(); ?></p>
        <?php else : ?>
            <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
        <?php endif; ?>
    </div>
</section>

<section class="glt-testimonials glt-section">
    <div class="glt-container">
        
        <div class="glt-center-header">
            <span class="glt-upper-title">Client Validation</span>
            <h2 class="glt-section-title">Performance <span class="glt-text-blue">Reports</span></h2>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <?php 
            $args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => -1, // Shows all testimonials
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $testi_query = new WP_Query($args);

            if ( $testi_query->have_posts() ) : 
                while ( $testi_query->have_posts() ) : $testi_query->the_post(); 
                    
                    // Fetching Custom Meta Data
                    $data_val   = get_post_meta(get_the_ID(), 'testimonial_data_val', true); // e.g., -22%
                    $data_label = get_post_meta(get_the_ID(), 'testimonial_data_label', true); // e.g., Energy Overhead
                    $client_role = get_post_meta(get_the_ID(), 'testimonial_client_role', true); // e.g., Director, Grand Plaza
                ?>
            
                <div class="glt-testi-card-trad">
                    <?php if($data_val): ?>
                    <div class="glt-testi-data">
                        <span class="glt-data-val"><?php echo esc_html($data_val); ?></span>
                        <span class="glt-data-label"><?php echo esc_html($data_label); ?></span>
                    </div>
                    <?php endif; ?>

                    <div class="glt-testi-content">
                        <svg class="glt-quote-svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2">
                            <path d="M3 21c3 0 7-1 7-8V5H3v8h4c0 5-4 6-4 6zM14 21c3 0 7-1 7-8V5h-7v8h4c0 5-4 6-4 6z"/>
                        </svg>
                        <blockquote>"<?php echo get_the_content(); ?>"</blockquote>
                    </div>

                    <div class="glt-testi-footer">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('thumbnail', ['class' => 'glt-testi-avatar']); ?>
                        <?php else : ?>
                            <img src="https://i.pravatar.cc/100?u=<?php the_ID(); ?>" alt="<?php the_title(); ?>" class="glt-testi-avatar">
                        <?php endif; ?>

                        <div class="glt-testi-meta">
                            <strong><?php the_title(); ?></strong>
                            <span><?php echo esc_html($client_role); ?></span>
                        </div>
                    </div>
                </div>

            <?php 
                endwhile; 
                wp_reset_postdata(); 
            else : 
                echo '<p>No testimonials found.</p>';
            endif; 
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>