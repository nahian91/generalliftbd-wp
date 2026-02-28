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
                <li class="glt-bc-item"><a href="#">Home</a></li>
                <li class="glt-bc-item active">Testimonials</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">Testimonials</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
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
            
            <div class="glt-testi-card-trad">
                <div class="glt-testi-data">
                    <span class="glt-data-val">-22%</span>
                    <span class="glt-data-label">Energy Overhead</span>
                </div>
                <div class="glt-testi-content">
                    <svg class="glt-quote-svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2"><path d="M3 21c3 0 7-1 7-8V5H3v8h4c0 5-4 6-4 6zM14 21c3 0 7-1 7-8V5h-7v8h4c0 5-4 6-4 6z"/></svg>
                    <blockquote>"The Series-X installation at Grand Plaza reduced our energy overhead significantly. Their technical precision is unmatched."</blockquote>
                </div>
                <div class="glt-testi-footer">
                    <img src="https://i.pravatar.cc/100?u=12" alt="Marcus Vane" class="glt-testi-avatar">
                    <div class="glt-testi-meta">
                        <strong>Marcus Vane</strong>
                        <span>Director, Grand Plaza REIT</span>
                    </div>
                </div>
            </div>

            <div class="glt-testi-card-trad">
                <div class="glt-testi-data">
                    <span class="glt-data-val">99.9%</span>
                    <span class="glt-data-label">System Uptime</span>
                </div>
                <div class="glt-testi-content">
                    <svg class="glt-quote-svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2"><path d="M3 21c3 0 7-1 7-8V5H3v8h4c0 5-4 6-4 6zM14 21c3 0 7-1 7-8V5h-7v8h4c0 5-4 6-4 6z"/></svg>
                    <blockquote>"Uptime is critical for our hospital infrastructure. GLT's predictive maintenance has kept us at peak operational capacity."</blockquote>
                </div>
                <div class="glt-testi-footer">
                    <img src="https://i.pravatar.cc/100?u=22" alt="Sarah Jenkins" class="glt-testi-avatar">
                    <div class="glt-testi-meta">
                        <strong>Sarah Jenkins</strong>
                        <span>Chief Engineer, St. Jude Med</span>
                    </div>
                </div>
            </div>

            <div class="glt-testi-card-trad">
                <div class="glt-testi-data">
                    <span class="glt-data-val">+35%</span>
                    <span class="glt-data-label">Traffic Flow</span>
                </div>
                <div class="glt-testi-content">
                    <svg class="glt-quote-svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2"><path d="M3 21c3 0 7-1 7-8V5H3v8h4c0 5-4 6-4 6zM14 21c3 0 7-1 7-8V5h-7v8h4c0 5-4 6-4 6z"/></svg>
                    <blockquote>"Smart dispatching logic improved our morning rush hour flow by 35%. A remarkable upgrade to our tenant experience."</blockquote>
                </div>
                <div class="glt-testi-footer">
                    <img src="https://i.pravatar.cc/100?u=32" alt="David Thorne" class="glt-testi-avatar">
                    <div class="glt-testi-meta">
                        <strong>David Thorne</strong>
                        <span>Manager, Apex Towers</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>