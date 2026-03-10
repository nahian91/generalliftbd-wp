<?php 
/*
Template Name: Gallery
*/
get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<style>
    /* --- Filter Menu --- */
    .glt-filter-container {
        text-align: center;
        margin: 40px 0;
    }
    .glt-filter-menu {
        list-style: none;
        padding: 0;
        display: inline-flex;
        gap: 15px;
    }
    .glt-filter-menu li {
        cursor: pointer;
        padding: 8px 25px;
        background: #f4f4f4;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        border: 1px solid #eee;
        transition: background 0.2s;
    }
    .glt-filter-menu li.active {
        background: #000;
        color: #fff;
        border-color: #000;
    }

    /* --- Isotope Grid Setup --- */
    .glt-gallery-grid-pro {
        margin: 0 -10px;
    }
    /* Clearfix */
    .glt-gallery-grid-pro:after {
        content: '';
        display: block;
        clear: both;
    }
    .glt-gallery-card {
        width: 33.333%;
        float: left;
        padding: 10px;
        box-sizing: border-box;
    }
    .glt-card-media {
        position: relative;
        overflow: hidden;
        background: #000;
    }
    .glt-card-media img {
        width: 100%;
        display: block;
        transition: opacity 0.3s;
    }
    .glt-gallery-card:hover img {
        opacity: 0.5;
    }

    /* --- Overlay --- */
    .glt-card-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .glt-gallery-card:hover .glt-card-overlay {
        opacity: 1;
    }
    .glt-card-content { text-align: center; color: #fff; }
    .glt-view-btn { font-size: 24px; color: #fff; }

    /* --- Popup Close Icon --- */
    .mfp-close {
        color: #fff !important;
        font-size: 40px !important;
        opacity: 1 !important;
        top: 10px !important;
        right: 10px !important;
    }

    @media (max-width: 991px) { .glt-gallery-card { width: 50%; } }
    @media (max-width: 575px) { .glt-gallery-card { width: 100%; } }
</style>

<section class="glt-page-header" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
    <div class="glt-bg-image"></div>
    <div class="glt-bg-grid"></div>

    <div class="glt-container glt-header-content">
        <nav class="glt-breadcrumb-vertical">
            <ul class="glt-bc-list">
                <li class="glt-bc-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="glt-bc-item active">Gallery</li>
            </ul>
        </nav>
        <h1 class="glt-page-title">Gallery</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="gallery" class="glt-gallery glt-section glt-bg-alt">
    <div class="glt-container">
        
        <div class="glt-filter-container">
            <ul class="glt-filter-menu">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".glt-cat-image">Images</li>
                <li data-filter=".glt-cat-video">Videos</li>
            </ul>
        </div>

        <div class="glt-gallery-grid-pro">
            <div class="glt-gallery-card glt-cat-image">
                <div class="glt-card-media">
                    <img src="https://images.unsplash.com/photo-1517502474097-f9b30659dadb?q=80&w=800" alt="Tower">
                    <div class="glt-card-overlay">
                        <div class="glt-card-content">
                            <h5>The Platinum Tower</h5>
                            <a href="https://images.unsplash.com/photo-1517502474097-f9b30659dadb?q=80&w=1200" class="glt-view-btn popup-img">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glt-gallery-card glt-cat-video">
                <div class="glt-card-media">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800" alt="Video">
                    <div class="glt-card-overlay">
                        <div class="glt-card-content">
                            <h5>Corporate Infrastructure</h5>
                            <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="glt-view-btn popup-video">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glt-gallery-card glt-cat-image">
                <div class="glt-card-media">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800" alt="Residential">
                    <div class="glt-card-overlay">
                        <div class="glt-card-content">
                            <h5>Skyline Residences</h5>
                            <a href="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200" class="glt-view-btn popup-img">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
jQuery(document).ready(function($) {
    // 1. Initialize Isotope
    var $grid = $('.glt-gallery-grid-pro').isotope({
        itemSelector: '.glt-gallery-card',
        layoutMode: 'fitRows',
        transitionDuration: 0 // No animation on filter
    });

    // 2. Filter Click Logic
    $('.glt-filter-menu').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        $('.glt-filter-menu li').removeClass('active');
        $(this).addClass('active');
    });

    // 3. Magnific Popup for Images
    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: { enabled: true },
        mainClass: 'mfp-fade',
        removalDelay: 160
    });

    // 4. Magnific Popup for Videos
    $('.popup-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>

<?php get_footer(); ?>