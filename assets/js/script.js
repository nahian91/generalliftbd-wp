/**
 * Owl Carousel Hero Slider - WordPress Implementation
 * Author: Infinity Digital
 */
jQuery(document).ready(function($) {
    var $heroSlider = $('#glt-hero-slider');

    // Check if slider exists to prevent console errors
    if ($heroSlider.length > 0) {
        
        $heroSlider.owlCarousel({
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
                if (!event.namespace || event.property.name !== 'position') return;

                // Sync custom lift car indicators
                var total = event.item.count;
                var index = event.item.index - event.relatedTarget._clones.length / 2;

                if (index >= total) index = 0;
                if (index < 0) index = total - 1;

                $('.glt-lift-car-indicator')
                    .addClass('inactive')
                    .eq(index)
                    .removeClass('inactive');
            }
        });

        // Click indicator to go to specific slide
        $(document).on('click', '.glt-lift-car-indicator', function() {
            var slideIndex = $(this).data('slide');
            $heroSlider.trigger('to.owl.carousel', [slideIndex, 500]);
        });
    }
});

