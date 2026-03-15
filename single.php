<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>


<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <div class="glt-bc-line-top"></div>
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="#">Home</a></li>
                <li class="glt-bc-item active">Single Post</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">Single Post</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>
<main id="primary" class="site-main glt-section">
    <div class="glt-container">
        <div class="glt-row-blog">
            
            <div class="glt-grid-8">
                <?php
                while ( have_posts() ) :
                    the_post();

                    // This pulls from template-parts/content.php
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;
                ?>
            </div>

            <aside class="glt-grid-4">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>
</main>

<?php
get_footer();