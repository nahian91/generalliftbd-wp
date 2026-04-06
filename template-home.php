<?php 

/*
Template Name: Home
*/

get_header(); ?>


<section id="hero" class="glt-hero-trad-pro">
    <div id="glt-hero-slider" class="owl-carousel owl-theme">
        
        <?php 
        $banners = get_field('banners', 'option');

        if ( $banners ) :
            foreach ( $banners as $banner ) : 
                // Data Mapping from your print_r output
                $bg_img   = esc_url( $banner['banner_image'] );
                $badge1   = esc_html( $banner['banner_badge_1'] );
                $badge2   = esc_html( $banner['banner_badge_2'] );
                $title    = esc_html( $banner['banner_title'] );
                $desc     = esc_html( $banner['banner_description'] );
                
                $btn1_txt = esc_html( $banner['banner_button_1_text'] );
                $btn1_url = esc_url( $banner['banner_button_1_url'] );
                
                $btn2_txt = esc_html( $banner['banner_button_2_text'] );
                $btn2_url = esc_url( $banner['banner_button_2_url'] );
        ?>
            <div class="glt-hero-slide" style="background-image: url('<?php echo $bg_img; ?>');">
                <div class="glt-container">
                    <div class="glt-hero-inner">
                        <div class="glt-hero-top">
                            <?php if ( $badge1 ) : ?>
                                <span class="glt-trad-badge"><?php echo $badge1; ?></span>
                            <?php endif; ?>

                            <?php if ( $badge2 ) : ?>
                                <span class="glt-trad-meta">
                                    <i class="dashicons dashicons-clock"></i> <?php echo $badge2; ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h1 class="glt-hero-h1"><?php echo $title; ?></h1>
                        <p class="glt-hero-p"><?php echo $desc; ?></p>

                        <div class="glt-hero-cta-group">
                            <?php if ( $btn1_url ) : ?>
                                <a href="<?php echo $btn1_url; ?>" class="glt-btn-trad-primary">
                                    <?php echo $btn1_txt ?: 'Our Services'; ?>
                                </a>
                            <?php endif; ?>

                            <?php if ( $btn2_url ) : ?>
                                <a href="<?php echo $btn2_url; ?>" class="glt-btn-trad-outline">
                                    <?php echo $btn2_txt ?: 'Technical Specs'; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            endforeach; 
        else : 
            // Fallback if no banners are added in ACF
            echo '<p style="text-align:center; padding:50px;">Please add banners in the Lift Settings options page.</p>';
        endif; 
        ?>

    </div>
</section>


<style>
    :root {
        --glt-blue: #007aff;
        --glt-dark-text: #2c3e50;
        --glt-light-text: #5d6d7e;
        --glt-border-color: #eef2f7;
    }
.glt-leader-grid {
	display: flex;
	gap: 30px;
}
    .glt-leadership-module {
        padding: 80px 0;
        background: #ffffff;
    }

    /* Grid Container */
    .glt-leader-card {
        border: 1px solid var(--glt-border-color);
        margin-bottom: 40px;
        background: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .glt-leader-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }

    /* Column 1: Identity Profile */
    .glt-profile-side {
        padding: 30px 20px;
        text-align: center;
        background: #fcfdfe;
        border-right: 1px solid var(--glt-border-color);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .glt-leader-avatar {
        width: 200px;
        height: 300px;
        margin-bottom: 25px;
        padding: 8px;
        border: 1px solid var(--glt-border-color);
        background: #fff;
    }

    .glt-leader-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(20%);
    }

    .glt-leader-name {
        font-size: 22px;
        font-weight: 800;
        color: var(--glt-dark-text);
        margin: 0 0 8px 0;
        line-height: 1.2;
    }

    .glt-leader-desig {
        font-size: 13px;
        color: var(--glt-blue);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 700;
    }

    /* Column 2: Message Content */
    .glt-message-side {
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-top: 0;
    }

    .glt-msg-header {
        font-size: 28px;
        font-weight: 700;
        color: var(--glt-dark-text);
        margin-bottom: 25px;
        position: relative;
    }

    .glt-msg-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 40px;
        height: 2px;
        background: var(--glt-blue);
    }

    .glt-msg-body {
        font-size: 16px;
        line-height: 1.8;
        color: var(--glt-light-text);
        text-align: justify;
        margin-bottom: 20px;
    }

    .glt-read-link {
        color: var(--glt-dark-text);
        font-weight: 700;
        text-decoration: none;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .glt-read-link:hover { color: var(--glt-blue); }

    /* Responsive */
    @media (max-width: 991px) {
        .glt-leader-card { grid-template-columns: 1fr; }
        .glt-profile-side { border-right: none; border-bottom: 1px solid var(--glt-border-color); }
        .glt-message-side { padding: 40px; }
    }
</style>

<section class="glt-leadership-module">
    <div class="glt-container">
        <div class="glt-leader-grid">
            
            <div class="glt-leader-card glt-reveal" data-anim="fade-left">
                <div class="glt-profile-side">
                    <div class="glt-leader-avatar">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/ceo.png" alt="Chairman">
                    </div>
                    <h3 class="glt-leader-name">MD LIMON</h3>
                    <span class="glt-leader-desig">CEO</span>
                </div>
                
                <div class="glt-message-side">
                    <p class="glt-msg-body">
                        It is my privilege to welcome you to General Lift Technology. Since our inception, we have endeavored to impart internationally standard engineering solutions at an affordable cost. Our mission is attributed to the production of competent technical manpower so as to expedite the collective development of our infrastructure. We prioritize safety and precision above all else.
                    </p>
                </div>
            </div>

            <div class="glt-leader-card glt-reveal" data-anim="fade-right">
                <div class="glt-profile-side">
                    <div class="glt-leader-avatar">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/director.png" alt="MD">
                    </div>
                    <h3 class="glt-leader-name">SYED MUNJURE KHUDA</h3>
                    <span class="glt-leader-desig">DIRECTOR</span>
                </div>
                
                <div class="glt-message-side">
                    <p class="glt-msg-body">
                        Our vision is to produce professionally competent and accomplished systems that encounter any challenge in the architectural field. We focus on inspired intellect, high morals, and social responsibility. GLT addresses the multidimensional requirements of the modern job market through smooth innovation and rigorous safety standards.
                    </p>
                </div>
            </div>                    
        </div>
    </div>
</section>

<style>
/* Initial hidden state */
.glt-reveal {
    opacity: 0;
    visibility: hidden;
    transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); /* Smoother "Power" ease */
    will-change: transform, opacity;
}

/* Animation Classes */
.glt-active.fade-left {
    animation: gltFadeInLeft 1.2s forwards;
}

.glt-active.fade-right {
    animation: gltFadeInRight 1.2s forwards;
}

/* Increased travel distance (200px) */
@keyframes gltFadeInLeft {
    0% {
        opacity: 0;
        transform: translateX(-200px);
        visibility: hidden;
    }
    100% {
        opacity: 1;
        transform: translateX(0);
        visibility: visible;
    }
}

@keyframes gltFadeInRight {
    0% {
        opacity: 0;
        transform: translateX(200px);
        visibility: hidden;
    }
    100% {
        opacity: 1;
        transform: translateX(0);
        visibility: visible;
    }
}

/* Important: Prevents horizontal scrollbar during animation */
.glt-leadership-module {
    overflow-x: hidden;
    padding: 100px 0; /* Extra padding so they don't feel cramped */
}
</style>

<script>
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        const revealItems = document.querySelectorAll('.glt-reveal');
        
        if (revealItems.length === 0) return;

        const observerOptions = {
            // 0.3 = 30% of the element must be in view before triggering
            threshold: 0.3,
            // rootMargin adds a "buffer". 
            // "0px 0px -50px 0px" means it triggers 50px after entering the bottom
            rootMargin: "0px 0px -50px 0px" 
        };

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animationType = entry.target.getAttribute('data-anim');
                    
                    entry.target.classList.add('glt-active');
                    if (animationType) {
                        entry.target.classList.add(animationType);
                    }
                    
                    // Unobserve so it only happens once
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealItems.forEach(item => {
            revealObserver.observe(item);
        });
    });
})();
</script>

<section id="services" class="glt-services glt-section glt-bg-slate">
    <div class="glt-container">
        <div class="glt-center-header">
            <span class="glt-upper-title">Full Lifecycle Support</span>
            <h2 class="glt-section-title">Our <span class="glt-text-blue">Services</span></h2>
            <p class="glt-section-subtitle">Comprehensive infrastructure support for high-traffic environments and complex vertical systems.</p>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <?php
            $args = array(
                'post_type'      => 'service',
                'posts_per_page' => 6,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $services_query = new WP_Query($args);
            $count = 1;

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post(); 
                    
                    // ACF Fields
                    $icon_value = get_field('service_icon'); // Your Icon Picker field
                    $description = get_field('service_description');
                    ?>

                    <div class="glt-service-card">
                        <div class="glt-card-number"><?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?></div>
                        
                        <div class="glt-card-icon">
                            <?php 
                            if ($icon_value) :
                                // Check if it's a URL (like test.svg) or an image path
                                if (filter_var($icon_value, FILTER_VALIDATE_URL) || strpos($icon_value, '.svg') !== false) : ?>
                                    <img src="<?php echo esc_url($icon_value); ?>" alt="<?php the_title(); ?>" width="32" height="32">
                                <?php 
                                // Check if it's a Dashicon
                                elseif (strpos($icon_value, 'dashicons-') !== false) : ?>
                                    <span class="dashicons <?php echo esc_attr($icon_value); ?>"></span>
                                <?php 
                                // Otherwise, output raw (for font-awesome classes or similar)
                                else : ?>
                                    <i class="<?php echo esc_attr($icon_value); ?>"></i>
                                <?php endif;
                            endif; ?>
                        </div>

                        <h3><?php the_title(); ?></h3>
                        
                        <p>
                            <?php 
                            echo $description ? esc_html($description) : wp_trim_words(get_the_excerpt(), 18); 
                            ?>
                        </p>
                    </div>

                <?php 
                $count++;
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<section class="glt-cta-industrial">
    <div class="glt-cta-overlay"></div>
    <div class="glt-blueprint-grid"></div>
    
    <div class="glt-container">
        <div class="glt-cta-flex">
            
            <div class="glt-cta-content">
                <span class="glt-cta-tag">Ready for Deployment</span>
                <h2 class="glt-cta-title">Upgrade Your Building’s <br><span class="glt-text-blue">Vertical Intelligence</span></h2>
                <p class="glt-cta-p">
                    From architectural planning to final load testing, our engineering team is ready to support your project’s vertical transportation needs.
                </p>
                
                <div class="glt-cta-features">
                    <div class="glt-cta-feat">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Compliant with EN 81-20/50</span>
                    </div>
                    <div class="glt-cta-feat">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>24/7 Remote Monitoring</span>
                    </div>
                </div>
            </div>

            <div class="glt-cta-actions">
                <a href="contact.php" class="glt-btn-trad-primary">Consult an Engineer</a>
                
                <a href="tel:+1234567890" class="glt-cta-phone">
                    <span class="glt-phone-label">Direct Technical Support</span>
                    <span class="glt-phone-num">+88 01621 222 255</span>
                </a>
            </div>

        </div>
    </div>
</section>

    <section id="products" class="glt-products glt-section">
    <div class="glt-container">
        <div class="glt-center-header">
            <span class="glt-upper-title">Engineered Series</span>
            <h2 class="glt-section-title">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam pariatur, dolor magnam nobis rem quod dolores adipisci tenetur perferendis ducimus.</p>
            <div class="glt-header-line"></div>
        </div>

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

<section class="glt-counters glt-section">
    <div class="glt-container">
        <div class="glt-counter-grid">
            
            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 2v20M20 2v20M8 6h8M8 12h8M8 18h8"></path>
                    </svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number" data-target="5400">5,400+</h2>
                    <span class="glt-counter-label">Global Installations</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6l4 2"></path>
                        <path d="M16 21.1L12 12"></path>
                    </svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">24/7</h2>
                    <span class="glt-counter-label">Expert Support</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 12c0-1.66 4-3 9-3s9 1.34 9 3"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">38+</h2>
                    <span class="glt-counter-label">Service Centers</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">100%</h2>
                    <span class="glt-counter-label">Compliance Rating</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

        </div>
    </div>
</section>

<section id="video-showcase" class="glt-video-section glt-section glt-bg-alt">
    <div class="glt-container">

        <div class="glt-center-header">
            <span class="glt-upper-title">Video Gallery</span>
            <h2 class="glt-section-title">Latest <span class="glt-text-blue">Featured</span> Videos</h2>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <?php
            $videos = [
                ['id' => 'ScMzIvxBSi4', 'title' => 'Mastering Modern UI/UX Trends'],
                ['id' => 'dQw4w9WgXcQ', 'title' => 'The Future of WordPress Development'],
                ['id' => 'ScMzIvxBSi4', 'title' => 'Optimizing SaaS Admin Dashboards'],
            ];

            foreach ($videos as $video) : ?>
                <div class="glt-video-item">
                    <div class="glt-video-iframe-wrap">
                        <iframe 
                            src="https://www.youtube.com/embed/<?php echo esc_attr($video['id']); ?>" 
                            title="<?php echo esc_attr($video['title']); ?>" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <h3 class="glt-video-title"><?php echo esc_html($video['title']); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .glt-video-item {
        margin-bottom: 30px;
    }
    
    .glt-video-iframe-wrap {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        border-radius: 12px;
        background: #000;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 15px;
    }

    .glt-video-iframe-wrap iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .glt-video-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.4;
        margin: 0;
        transition: color 0.3s ease;
    }

    .glt-video-item:hover .glt-video-title {
        color: #4f46e5;
    }
</style>

<?php get_footer(); ?>