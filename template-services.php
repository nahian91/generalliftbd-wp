<?php 

/*
Template Name: Services
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
                <li class="glt-bc-item active">Services</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">Services</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
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
            
            <div class="glt-service-card">
                <div class="glt-card-number">01</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </div>
                <h3>Precision Maintenance</h3>
                <p>Rigorous 50-point safety inspections and scheduled lubrication protocols to maximize mechanical longevity.</p>
                <a href="#" class="glt-card-link">Service Protocols <i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="glt-service-card">
                <div class="glt-card-number">02</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                </div>
                <h3>Modernization</h3>
                <p>Upgrading controllers and hoisting machines with high-efficiency hardware without the need for full rebuilds.</p>
                <a href="#" class="glt-card-link">Upgrade Path <i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="glt-service-card">
                <div class="glt-card-number">03</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                </div>
                <h3>Remote Monitoring</h3>
                <p>Cloud-based telemetry and real-time error reporting tied directly to our global 24/7 dispatch network.</p>
                <a href="#" class="glt-card-link">IoT Dashboard <i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="glt-service-card">
                <div class="glt-card-number">04</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <h3>24/7 Rapid Response</h3>
                <p>Guaranteed on-site technician arrival for entrapments and critical system failures within 60 minutes.</p>
                <a href="#" class="glt-card-link">Emergency Support <i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="glt-service-card">
                <div class="glt-card-number">05</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </div>
                <h3>Project Installation</h3>
                <p>Turnkey vertical transportation solutions for new constructions, from machine-room-less (MRL) to high-speed lifts.</p>
                <a href="#" class="glt-card-link">Planning Docs <i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="glt-service-card">
                <div class="glt-card-number">06</div>
                <div class="glt-card-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3>Safety Certification</h3>
                <p>Full regulatory compliance testing including load testing and annual ASME/EN81 safety certifications.</p>
                <a href="#" class="glt-card-link">Audit History <i class="fa-solid fa-chevron-right"></i></a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>