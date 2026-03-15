<?php 

/*
Template Name: About
*/

get_header(); ?>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="#">Home</a></li>
                <li class="glt-bc-item active">About Us</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">About Us</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="about" class="glt-about glt-section">
    <div class="glt-container">
        <div class="glt-about-grid">
            
            <div class="glt-about-visual">
                <div class="glt-image-stack">
                    <div class="glt-img-frame">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.jpg" alt="Elevator Engineering" class="glt-about-img">
                    </div>
                    
                    <div class="glt-experience-badge">
                        <div class="glt-badge-inner">
                            <span class="glt-badge-num">40+</span>
                            <span class="glt-badge-txt">Years of <br>Precision</span>
                        </div>
                    </div>

                    <div class="glt-shape-deco-dots"></div>
                    <div class="glt-line-deco"></div>
                </div>
            </div>
            <div class="glt-about-text">

            <?php 
                $about_subtitle = get_field('about_subtitle', 'option');
                $about_title = get_field('about_title', 'option');
                $about_description = get_field('about_description', 'option');
                $about_features = get_field('about_features', 'option');
            ?>

                <div class="glt-label-group">
                    <span class="glt-upper-title"><?php echo $about_subtitle;?></span>
                    <div class="glt-title-line"></div>
                </div>
                
                <h2 class="glt-section-title"><?php echo $about_title;?></h2>
                
                <p class="glt-lead">
                    <?php echo $about_description;?>
                </p>

                <div class="glt-about-features">
    <?php 
    $about_features = get_field('about_features', 'option');

    if ( $about_features ) :
        foreach ( $about_features as $feature ) : 
            $icon_class  = esc_attr( $feature['about_feature_icon'] );
            $feat_title  = esc_html( $feature['about_feature_title'] );
            $feat_desc   = esc_html( $feature['about_feature_description'] );
    ?>
        <div class="glt-feat-item">
            <div class="glt-feat-icon">
                <?php if ( strpos($icon_class, 'dashicons') !== false ) : ?>
                    <span class="dashicons <?php echo $icon_class; ?>"></span>
                <?php else : ?>
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    </svg>
                <?php endif; ?>
            </div>
            
            <div class="glt-feat-content">
                <h4><?php echo $feat_title; ?></h4>
                <p><?php echo $feat_desc; ?></p>
            </div>
        </div>
    <?php 
        endforeach; 
    endif; 
    ?>
</div>
            </div>

        </div>
    </div>
</section>

<section class="glt-testimonials glt-section glt-bg-dark">
    <div class="glt-container">
        
        <div class="glt-center-header">
            <span class="glt-upper-title" style="color: #64748b;">Client Validation</span>
            <h2 class="glt-section-title" style="color: #ffffff;">Performance <span class="glt-text-blue">Reports</span></h2>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <?php 
            $args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 3, // Shows only the latest 3
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $testi_query = new WP_Query($args);

            if ( $testi_query->have_posts() ) : 
                while ( $testi_query->have_posts() ) : $testi_query->the_post(); 
                    
                    // ACF Data Mapping
                    $data_val    = get_field('performance_value'); // e.g., -22%
                    $data_label  = get_field('performance_label'); // e.g., Energy Overhead
                    $speech      = get_field('client_speech');
                    $name        = get_field('client_name');
                    $designation = get_field('client_designation');
                    
                    // Fallbacks
                    $display_name = $name ? $name : get_the_title();
                    $display_text = $speech ? $speech : get_the_content();
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
                        <blockquote>"<?php echo wp_strip_all_tags($display_text); ?>"</blockquote>
                    </div>

                    <div class="glt-testi-footer">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('thumbnail', ['class' => 'glt-testi-avatar']); ?>
                        <?php else : ?>
                            <img src="https://i.pravatar.cc/100?u=<?php the_ID(); ?>" alt="<?php echo esc_attr($display_name); ?>" class="glt-testi-avatar">
                        <?php endif; ?>

                        <div class="glt-testi-meta">
                            <strong style="color: #ffffff;"><?php echo esc_html($display_name); ?></strong>
                            <span style="color: #94a3b8;"><?php echo esc_html($designation); ?></span>
                        </div>
                    </div>
                </div>

            <?php 
                endwhile; 
                wp_reset_postdata(); 
            else : 
                echo '<p style="color: #ffffff; text-align: center;">No reports available at this time.</p>';
            endif; 
            ?>

        </div>
    </div>
</section>

<section class="glt-team glt-section">
    <div class="glt-container">
        <div class="glt-center-header">
            <span class="glt-upper-title">Executive Governance</span>
            <h2 class="glt-section-title">The <span class="glt-text-blue">Leadership</span> Team</h2>
            <p>Our dedicated team of professionals ensures excellence in every project, bringing years of industry expertise to the table.</p>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-4">
            <?php
            // WP_Query to fetch Team Members
            $team_args = array(
                'post_type'      => 'team',
                'posts_per_page' => -1, // Shows all members
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $team_query = new WP_Query($team_args);

            if ($team_query->have_posts()) :
                while ($team_query->have_posts()) : $team_query->the_post(); 
                    
                    // Fetch ACF Field: Designation
                    $designation = get_field('designation');
                ?>

                <div class="glt-team-card-trad">
                    <div class="glt-avatar-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="https://i.pravatar.cc/600?u=<?php the_ID(); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="glt-avatar-frame"></div>
                    </div>
                    <div class="glt-team-info-trad">
                        <h5><?php the_title(); ?></h5>
                        <?php if ($designation) : ?>
                            <span class="glt-team-role-trad"><?php echo esc_html($designation); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No team members found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>