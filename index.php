<?php get_header(); ?>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="glt-bc-item active"><?php echo single_post_title(); ?></li>
            </ul>
        </nav>

        <h1 class="glt-page-title"><?php echo single_post_title(); ?></h1>
        <p class="glt-page-subtitle"><?php echo get_the_archive_description() ?: 'Global headquarters and technical support infrastructure.'; ?></p>
    </div>
</section>

<section id="blog" class="glt-blog glt-section glt-bg-alt">
    <div class="glt-container">
        <div class="glt-grid-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('glt-blog-card-pro'); ?>>
                    <div class="glt-blog-image-pro">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-blog.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        
                        <span class="glt-category-tag-pro">
                            <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name );
                            }
                            ?>
                        </span>
                    </div>

                    <div class="glt-blog-body-pro">
                        <div class="glt-blog-meta-pro">
                            <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
                            <?php 
                            // Simple reading time calculation based on content length
                            $content = get_post_field( 'post_content', get_the_ID() );
                            $word_count = str_word_count( strip_tags( $content ) );
                            $reading_time = ceil( $word_count / 200 ); 
                            ?>
                            <span><i class="fa-solid fa-hourglass-half"></i> <?php echo $reading_time; ?> MIN READ</span>
                        </div>
                        
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
                        
                        <a href="<?php the_permalink(); ?>" class="glt-link-action">
                            Read Full Article <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>

        <div class="glt-pagination">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>