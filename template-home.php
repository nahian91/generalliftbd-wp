<?php 

/*
Template Name: Home
*/

get_header(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dashicons/2.0.0/css/dashicons.min.css">

    <style>
        :root {
            --glt-primary: #007bff;
            --glt-bg: #0a0a0a;
            --glt-text: #ffffff;
            --glt-font: 'Inter', sans-serif;
        }

        body { margin: 0; padding: 0; background: var(--glt-bg); font-family: var(--glt-font); }

        /* --- Hero Section Styling --- */
        .glt-hero-trad-pro {
            position: relative;
            height: 100vh;
            min-height: 700px;
            background: #050505;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .glt-overlay-matte {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 50%, rgba(0, 123, 255, 0.15) 0%, transparent 50%);
            z-index: 1;
        }

        .glt-blueprint-grid {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), 
                              linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 0;
        }

        .glt-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }

        /* --- Slider Content --- */
        .glt-hero-inner {
            max-width: 700px;
        }

        .glt-hero-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .glt-trad-badge {
            background: var(--glt-primary);
            padding: 5px 12px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            color: white;
        }

        .glt-trad-meta {
            color: rgba(255,255,255,0.6);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .glt-trad-meta i { vertical-align: middle; margin-right: 5px; color: var(--glt-primary); }

        .glt-hero-h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 20px;
            color: white;
            font-weight: 800;
        }

        .glt-hero-p {
            font-size: 18px;
            color: rgba(255,255,255,0.7);
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* --- Buttons --- */
        .glt-hero-cta-group { display: flex; gap: 15px; }
        .glt-btn-trad-primary, .glt-btn-trad-outline {
            padding: 16px 32px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }
        .glt-btn-trad-primary { background: var(--glt-primary); color: white; }
        .glt-btn-trad-outline { border: 1px solid rgba(255,255,255,0.2); color: white; }
        .glt-btn-trad-outline:hover { background: white; color: black; }

        /* --- Owl Carousel Customization --- */
        .owl-dots {
            position: absolute;
            bottom: -60px;
            left: 0;
        }
        .owl-dot span {
            width: 30px !important;
            height: 3px !important;
            border-radius: 0 !important;
            background: rgba(255,255,255,0.2) !important;
        }
        .owl-dot.active span {
            background: var(--glt-primary) !important;
            width: 60px !important;
        }

        /* --- Lift Shaft Indicators --- */
        .glt-lift-shaft-line {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 40px;
            z-index: 20;
        }
        .glt-lift-shaft-line::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 1px;
            background: rgba(255,255,255,0.1);
            z-index: -1;
        }
        .glt-lift-car-indicator {
            width: 50px;
            height: 50px;
            background: #111;
            border: 1px solid var(--glt-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .glt-lift-car-indicator.inactive {
            opacity: 0.3;
            border-color: rgba(255,255,255,0.1);
            transform: translateX(10px);
        }

        /* Animations */
        .owl-item.active .glt-hero-h1 { animation: fadeInUp 0.8s both; }
        .owl-item.active .glt-hero-p { animation: fadeInUp 0.8s both 0.2s; }
    </style>


<section id="hero" class="glt-hero-trad-pro">
    <div class="glt-overlay-matte"></div>
    <div class="glt-blueprint-grid"></div>
    
    <div class="glt-container">
        <div id="glt-hero-slider" class="owl-carousel owl-theme">
            
            <div class="glt-hero-slide">
                <div class="glt-hero-inner">
                    <div class="glt-hero-top">
                        <span class="glt-trad-badge">ESTABLISHED 1986</span>
                        <span class="glt-trad-meta"><i class="dashicons dashicons-clock"></i> 24/7 Active Service</span>
                    </div>
                    <h1 class="glt-hero-h1">Continuous Mobility Systems</h1>
                    <p class="glt-hero-p">Experience total peace of mind with our round-the-clock emergency assistance. Our dedicated rapid-response team ensures your elevators remain safe and reliable every single hour.</p>
                    <div class="glt-hero-cta-group">
                        <a href="#" class="glt-btn-trad-primary">Our Services</a>
                        <a href="#" class="glt-btn-trad-outline">Technical Specs</a>
                    </div>
                </div>
            </div>

            <div class="glt-hero-slide">
                <div class="glt-hero-inner">
                    <div class="glt-hero-top">
                        <span class="glt-trad-badge">ESTABLISHED 1986</span>
                        <span class="glt-trad-meta"><i class="dashicons dashicons-shield-alt"></i> 2 Years Free Service</span>
                    </div>
                    <h1 class="glt-hero-h1">Guaranteed Performance</h1>
                    <p class="glt-hero-p">We protect your investment with a comprehensive two-year complimentary maintenance package. This includes regular safety check-ups and preventative tuning for peak performance.</p>
                    <div class="glt-hero-cta-group">
                        <a href="#" class="glt-btn-trad-primary">View Warranty</a>
                        <a href="#" class="glt-btn-trad-outline">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="glt-hero-slide">
                <div class="glt-hero-inner">
                    <div class="glt-hero-top">
                        <span class="glt-trad-badge">ESTABLISHED 1986</span>
                        <span class="glt-trad-meta"><i class="dashicons dashicons-art"></i> Custom Design</span>
                    </div>
                    <h1 class="glt-hero-h1">Bespoke Engineering</h1>
                    <p class="glt-hero-p">Elevate your building’s identity with bespoke cabin interiors and premium finishes. From panoramic glass to luxury lighting, we tailor every detail to your architectural vision.</p>
                    <div class="glt-hero-cta-group">
                        <a href="#" class="glt-btn-trad-primary">Design Studio</a>
                        <a href="#" class="glt-btn-trad-outline">Portfolio</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="glt-lift-shaft-line">
        <div class="glt-lift-car-indicator" data-slide="0"><span>01</span></div>
        <div class="glt-lift-car-indicator inactive" data-slide="1"><span>02</span></div>
        <div class="glt-lift-car-indicator inactive" data-slide="2"><span>03</span></div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    var owl = $('#glt-hero-slider');
    
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 1000,
        animateOut: 'fadeOut',
        onChanged: function(event) {
            // Logic to sync indicators
            var index = event.item.index - event.relatedTarget._clones.length / 2;
            var total = event.item.count;
            if (index >= total) index = 0;
            if (index < 0) index = total - 1;

            $('.glt-lift-car-indicator').addClass('inactive');
            $('.glt-lift-car-indicator').eq(index).removeClass('inactive');
        }
    });

    // Click indicator to go to slide
    $('.glt-lift-car-indicator').click(function() {
        var slideIndex = $(this).data('slide');
        owl.trigger('to.owl.carousel', [slideIndex, 500]);
    });
});
</script>

<style>
    :root {
        --glt-blue: #007aff;
        --glt-dark-text: #2c3e50;
        --glt-light-text: #5d6d7e;
        --glt-border-color: #eef2f7;
    }

    .glt-leadership-module {
        padding: 80px 0;
        background: #ffffff;
    }

    /* Grid Container */
    .glt-leader-card {
        display: grid;
        grid-template-columns: 350px 1fr;
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
        padding: 60px 40px;
        text-align: center;
        background: #fcfdfe;
        border-right: 1px solid var(--glt-border-color);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .glt-leader-avatar {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        margin-bottom: 25px;
        padding: 8px;
        border: 1px solid var(--glt-border-color);
        background: #fff;
    }

    .glt-leader-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
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
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
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
        
        <div class="glt-leader-card">
            <div class="glt-profile-side">
                <div class="glt-leader-avatar">
                    <img src="https://via.placeholder.com/200" alt="Chairman">
                </div>
                <h3 class="glt-leader-name">Danobir Dr. Syed Ragib Ali</h3>
                <span class="glt-leader-desig">Founder & Chairman</span>
            </div>
            
            <div class="glt-message-side">
                <h2 class="glt-msg-header">Message from the Chairman</h2>
                <p class="glt-msg-body">
                    It is my privilege to welcome you to General Lift Technology. Since our inception, we have endeavored to impart internationally standard engineering solutions at an affordable cost. Our mission is attributed to the production of competent technical manpower so as to expedite the collective development of our infrastructure. We prioritize safety and precision above all else.
                </p>
                <a href="#" class="glt-read-link">Read Full Message &rarr;</a>
            </div>
        </div>

        <div class="glt-leader-card">
            <div class="glt-profile-side">
                <div class="glt-leader-avatar">
                    <img src="https://via.placeholder.com/200" alt="MD">
                </div>
                <h3 class="glt-leader-name">Prof. Dr. Mohammed Taj Uddin</h3>
                <span class="glt-leader-desig">Managing Director</span>
            </div>
            
            <div class="glt-message-side">
                <h2 class="glt-msg-header">Message from the MD</h2>
                <p class="glt-msg-body">
                    Our vision is to produce professionally competent and accomplished systems that encounter any challenge in the architectural field. We focus on inspired intellect, high morals, and social responsibility. GLT addresses the multidimensional requirements of the modern job market through smooth innovation and rigorous safety standards.
                </p>
                <a href="#" class="glt-read-link">Read Full Message &rarr;</a>
            </div>
        </div>

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
                <div class="glt-label-group">
                    <span class="glt-upper-title">Engineering Authority</span>
                    <div class="glt-title-line"></div>
                </div>
                
                <h2 class="glt-section-title">The Standard in <br><span class="glt-text-blue">Vertical Mobility</span></h2>
                
                <p class="glt-lead">
                    GLT Elevate operates at the intersection of structural integrity and digital innovation. We engineer seamless transitions for high-density environments, prioritizing <strong>Safety Redundancy</strong> and <strong>Operational Uptime</strong>.
                </p>

                <div class="glt-about-features">
                    
                    <div class="glt-feat-item">
                        <div class="glt-feat-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="glt-feat-content">
                            <h4>Safety Protocol 5.0</h4>
                            <p>Advanced dual-redundancy braking systems and real-time cabin telemetry.</p>
                        </div>
                    </div>

                    <div class="glt-feat-item">
                        <div class="glt-feat-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <div class="glt-feat-content">
                            <h4>Regen Drive Tech</h4>
                            <p>Integrated energy recovery systems harvesting power from descending loads.</p>
                        </div>
                    </div>

                    <div class="glt-feat-item">
                        <div class="glt-feat-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <div class="glt-feat-content">
                            <h4>Safety Protocol 5.0</h4>
                            <p>Advanced dual-redundancy braking systems and real-time cabin telemetry.</p>
                        </div>
                    </div>

                </div>
                
                <div class="glt-about-cta">
                    <a href="#contact" class="glt-btn-trad-primary">View Technical Portfolio</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="services" class="glt-services glt-section glt-bg-slate">
    <div class="glt-container">
        <div class="glt-center-header">
            <span class="glt-upper-title">Full Lifecycle Support</span>
            <h2 class="glt-section-title">Maintenance & <span class="glt-text-blue">Engineering</span></h2>
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

                        <a href="<?php the_permalink(); ?>" class="glt-card-link">
                            <?php 
                            // Check for a custom label or default to 'View Details'
                            $link_label = get_field('service_link_label'); 
                            echo $link_label ? esc_html($link_label) : 'View Details';
                            ?> 
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
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
            <h2 class="glt-section-title">Elevating the Cabin Experience</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam pariatur, dolor magnam nobis rem quod dolores adipisci tenetur perferendis ducimus.</p>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <div class="glt-product-card">
                <div class="glt-product-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1554110397-9bac083977c6?auto=format&fit=crop&q=80&w=800" alt="Apex Commercial" class="glt-p-img">
                    <div class="glt-product-badge">TRACTION</div>
                    <div class="glt-spec-overlay">
                        <span><i class="fa-solid fa-gauge-high"></i> 8.0 m/s</span>
                        <span><i class="fa-solid fa-users"></i> 21 PAX</span>
                    </div>
                </div>
                <div class="glt-product-info">
                    <span class="glt-category">Commercial</span>
                    <h4>Apex Commercial</h4>
                    <p>High-speed traction systems optimized for heavy-traffic office skyscrapers.</p>
                </div>
            </div>

            <div class="glt-product-card">
                <div class="glt-product-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=800" alt="Eco-Lite" class="glt-p-img">
                    <div class="glt-product-badge">MRL</div>
                    <div class="glt-spec-overlay">
                        <span><i class="fa-solid fa-gauge-high"></i> 1.6 m/s</span>
                        <span><i class="fa-solid fa-leaf"></i> ECO+ GRADE</span>
                    </div>
                </div>
                <div class="glt-product-info">
                    <span class="glt-category">Residential</span>
                    <h4>Eco-Lite Home</h4>
                    <p>Space-saving, Machine-Room-Less (MRL) solutions for modern living.</p>
                </div>
            </div>

            <div class="glt-product-card">
                <div class="glt-product-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=800" alt="Vista Panoramic" class="glt-p-img">
                    <div class="glt-product-badge">GLASS</div>
                    <div class="glt-spec-overlay">
                        <span><i class="fa-solid fa-gauge-high"></i> 2.5 m/s</span>
                        <span><i class="fa-solid fa-eye"></i> 360° VIEW</span>
                    </div>
                </div>
                <div class="glt-product-info">
                    <span class="glt-category">Architectural</span>
                    <h4>Vista Panoramic</h4>
                    <p>Custom glass cabin designs for luxury hotels and flagship retail centers.</p>
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

<section class="glt-counters glt-section">
    <div class="glt-container">
        <div class="glt-counter-grid">
            
            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">5,400+</h2>
                    <span class="glt-counter-label">Units Installed</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">24/7</h2>
                    <span class="glt-counter-label">Rapid Response</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">42</h2>
                    <span class="glt-counter-label">Countries Served</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

            <div class="glt-counter-item">
                <div class="glt-counter-icon">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <div class="glt-counter-body">
                    <h2 class="glt-counter-number">100%</h2>
                    <span class="glt-counter-label">Safety Rating</span>
                </div>
                <div class="glt-counter-deco"></div>
            </div>

        </div>
    </div>
</section>

<section id="blog" class="glt-blog glt-section glt-bg-alt">
    <div class="glt-container">

        <div class="glt-center-header">
            <span class="glt-upper-title">Executive Blogs</span>
            <h2 class="glt-section-title">The <span class="glt-text-blue">Exclusive</span> Blogs</h2>
            <div class="glt-header-line"></div>
        </div>

        <div class="glt-grid-3">
            <?php
            // WP_Query to fetch latest 3 blog posts
            $blog_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => true,
            );

            $blog_query = new WP_Query($blog_args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post(); 
                    
                    // Logic for Category Tag
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
                    $category_slug = !empty($categories) ? $categories[0]->slug : 'general';
                    
                    // Logic for Read Time (Simple estimation: 200 words per minute)
                    $content = get_post_field('post_content', get_the_ID());
                    $word_count = str_word_count(strip_tags($content));
                    $reading_time = ceil($word_count / 200);
                    $reading_time = ($reading_time < 1) ? 1 : $reading_time;
                ?>

                <article class="glt-blog-card-pro">
                    <div class="glt-blog-image-pro">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-blog.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        
                        <span class="glt-category-tag-pro glt-tag-<?php echo esc_attr($category_slug); ?>">
                            <?php echo esc_html($category_name); ?>
                        </span>
                    </div>

                    <div class="glt-blog-body-pro">
                        <div class="glt-blog-meta-pro">
                            <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
                            <span><i class="fa-solid fa-hourglass-half"></i> <?php echo $reading_time; ?> MIN READ</span>
                        </div>
                        
                        <h3><?php the_title(); ?></h3>
                        
                        <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                        
                        <a href="<?php the_permalink(); ?>" class="glt-link-action">
                            Read Full Article <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No blog posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>