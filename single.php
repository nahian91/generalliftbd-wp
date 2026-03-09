<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main id="primary" class="site-main glt-section">
    <div class="glt-container">
        <div class="glt-row">
            
            <div class="glt-grid-9">
                <?php
                while ( have_posts() ) :
                    the_post();

                    // This pulls from template-parts/content.php
                    get_template_part( 'template-parts/content', get_post_type() );

                    echo '<hr class="glt-separator">';

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'generallift' ) . '</span> <br><span class="nav-title"><strong>%title</strong></span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'generallift' ) . '</span> <br><span class="nav-title"><strong>%title</strong></span>',
                        )
                    );

                    if ( comments_open() || get_comments_number() ) :
                        echo '<div class="glt-comments-wrapper">';
                        comments_template();
                        echo '</div>';
                    endif;

                endwhile;
                ?>
            </div>

            <aside class="glt-grid-3">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>
</main>

<?php
get_footer();