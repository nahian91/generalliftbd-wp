<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
    // ACF Field Variables
    $product_badge = get_field('product_badge');
    $short_description = get_field('product_short_description');
    $main_title = get_field('product_main_title');
    $full_description = get_field('product_description');
    $video_url = get_field('product_video');
    $features = get_field('product_features'); // Repeater
    $specs = get_field('product_technical_specs'); // Repeater
    $infos = get_field('product_infos'); // Repeater
    $gallery = get_field('product_gallery'); // Gallery Array
?>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="glt-bc-item"><a href="<?php echo get_post_type_archive_link('product'); ?>">Products</a></li>
                <li class="glt-bc-item active"><?php the_title(); ?></li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php the_title(); ?></h1>
        <p class="glt-page-subtitle"><?php echo esc_html($short_description); ?></p>
    </div>
</section>

<section class="glt-single-product glt-section">
    <div class="glt-container">
        <div class="glt-grid-sidebar">
            
            <div class="glt-product-main">
                <div class="glt-main-display">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'glt-featured-img']); ?>
                    <?php endif; ?>
                    
                    <?php if ($product_badge) : ?>
                        <div class="glt-img-badge"><?php echo esc_html($product_badge); ?></div>
                    <?php endif; ?>
                </div>

                <div class="glt-content-block">
                    <h2 class="glt-sub-heading"><?php echo $main_title;?></h2>
                    <div class="glt-lead-text">
                        <?php echo wpautop($full_description); ?>
                    </div>
                    
                    <?php if ($features) : ?>
                    <div class="glt-feature-grid">
                        <?php foreach ($features as $feature) : 
                            $icon = $feature['product_feature_icon'];
                            $f_title = $feature['product_feature_title'];
                            $f_desc = $feature['product_feature_description'];
                        ?>
                        <div class="glt-feature-box">
                            <div class="glt-svg-icon">
                                <?php if (strpos($icon, '.svg') !== false || filter_var($icon, FILTER_VALIDATE_URL)) : ?>
                                    <img src="<?php echo esc_url($icon); ?>" alt="icon" width="32">
                                <?php elseif (strpos($icon, 'dashicons-') !== false) : ?>
                                    <span class="dashicons <?php echo esc_attr($icon); ?>"></span>
                                <?php else : ?>
                                    <i class="<?php echo esc_attr($icon); ?>"></i>
                                <?php endif; ?>
                            </div>
                            <h4><?php echo esc_html($f_title); ?></h4>
                            <p><?php echo esc_html($f_desc); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>


                    <?php if ($gallery) : ?>
                    <div class="glt-gallery-container glt-section-inside">
                        <h4>Gallery</h4>  
                        <div class="product-gallery-grid">
                            <?php foreach($gallery as $gal) {
                                ?>
                                    <img src="<?php echo $gal['url'];?>" alt="">
                                <?php 
                            }
                            ?>
                        </div>                      
                    </div>
                    <?php endif; ?>

                    <?php if ($video_url) : ?>
                    <div class="glt-video-container glt-section-inside">
                        <h4>Video</h4>
                        <iframe width="100%" height="450" src="<?php echo str_replace('watch?v=', 'embed/', $video_url); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <aside class="glt-product-sidebar product-features">
                <?php if ($infos) : ?>
                <div class="glt-glass-card glt-spec-card">
                    <div class="glt-card-header">
                        <h3>Main Features</h3>
                    </div>
                    <ul class="glt-spec-list">
                        <?php foreach ($infos as $info) : ?>
                            <li>
                                <?php echo esc_html($info['product_info_title']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if ($specs) : ?>
                <div class="glt-glass-card glt-spec-card">
                    <div class="glt-card-header">
                        <h3>Basic Info</h3>
                    </div>
                    <ul class="glt-spec-list">
                        <?php foreach ($specs as $spec) : ?>
                            <li>
                                <span><?php echo esc_html($spec['product_technical_specs_title']); ?></span>
                                <strong><?php echo esc_html($spec['product_technical_specs_value']); ?></strong>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="glt-glass-card glt-inquiry-box">
                    <h3>Direct Inquiry</h3>
                    <p>Contact our engineering desk for custom shaft specifications.</p>
                    <form class="glt-form-minimal">
                        <div class="glt-input-group">
                            <input type="text" placeholder="Project Name" required>
                        </div>
                        <div class="glt-input-group">
                            <input type="email" placeholder="Professional Email" required>
                        </div>
                        <button type="submit" class="glt-btn-submit">Request Design Data</button>
                    </form>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>