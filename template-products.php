<?php 

/*
Template Name: Products
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
                <li class="glt-bc-item active">Products</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">Products</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="products" class="glt-products-section glt-section">
    <div class="glt-container">
        <div class="glt-grid-3">
            
            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-1.jpg" alt="Passenger Lift">
                    <div class="glt-prod-status">HIGH-SPEED</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Traction Technology</span>
                    <h3>Passenger Lift</h3>
                    <p>Gearless traction systems designed for ultra-smooth travel in luxury residential and commercial hubs.</p>
                    <div class="glt-spec-row"><span>Load Limit</span><strong>1600 KG</strong></div>
                    <div class="glt-spec-row"><span>Max Speed</span><strong>4.0 M/S</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>

            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-2.jpg" alt="Hospital Lift">
                    <div class="glt-prod-status">EN-81 COMPLIANT</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Healthcare Sector</span>
                    <h3>Hospital Lift</h3>
                    <p>Deep-cabin stretcher elevators with micro-leveling precision and antibacterial interior finishes.</p>
                    <div class="glt-spec-row"><span>Cabin Depth</span><strong>2400 MM</strong></div>
                    <div class="glt-spec-row"><span>Power Mode</span><strong>Emergency Bypass</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>

            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-3.jpg" alt="Hydraulic Lift">
                    <div class="glt-prod-status">LOW-RISE PRO</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Hydraulic Drive</span>
                    <h3>Hydraulic Lift</h3>
                    <p>Robust low-rise solutions for restricted overhead spaces, utilizing energy-efficient oil pressure systems.</p>
                    <div class="glt-spec-row"><span>Drive System</span><strong>Direct / Indirect</strong></div>
                    <div class="glt-spec-row"><span>Floors</span><strong>Up to 6 Stops</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>

            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-4.jpg" alt="Car Lift">
                    <div class="glt-prod-status">INDUSTRIAL</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Automotive Logistics</span>
                    <h3>Car Lift</h3>
                    <p>Heavy-duty automotive elevators for parking showrooms and luxury multi-level residential garages.</p>
                    <div class="glt-spec-row"><span>Capacity</span><strong>Up to 5,000 KG</strong></div>
                    <div class="glt-spec-row"><span>Platform</span><strong>Reinforced Steel</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>

            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-5.jpg" alt="Escalator">
                    <div class="glt-prod-status">PUBLIC TRANSIT</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Continuous Flow</span>
                    <h3>Escalator</h3>
                    <p>Heavy-duty systems for malls and airports featuring energy-saving "Auto-Walk" sensor technology.</p>
                    <div class="glt-spec-row"><span>Inclination</span><strong>30° / 35°</strong></div>
                    <div class="glt-spec-row"><span>Step Width</span><strong>1000 MM</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>

            <div class="glt-prod-card">
                <div class="glt-prod-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog-6.jpg" alt="Special Purpose Lift">
                    <div class="glt-prod-status">CUSTOM</div>
                </div>
                <div class="glt-prod-info">
                    <span class="glt-cat-tag">Architectural Art</span>
                    <h3>Special Solutions</h3>
                    <p>Custom panoramic glass lifts and freight platforms engineered for unique architectural footprints.</p>
                    <div class="glt-spec-row"><span>Visuals</span><strong>360° Glass</strong></div>
                    <div class="glt-spec-row"><span>Control</span><strong>IoT Integrated</strong></div>
                    <a href="#" class="glt-btn-full">Technical Specifications</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="glt-technical-table glt-section glt-bg-dark">
    <div class="glt-container">
        <div class="glt-section-header light">
            <h2 class="glt-section-title">Technical <span class="glt-text-blue">Performance Matrix</span></h2>
            <p>Direct performance comparison of core hoisting technologies and structural limits.</p>
        </div>
        
        <div class="glt-table-responsive">
            <table class="glt-pro-table">
                <thead>
                    <tr>
                        <th>Specifications</th>
                        <th>Gearless Traction</th>
                        <th>Hydraulic System</th>
                        <th>Machine Room-Less (MRL)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Maximum Travel</strong></td>
                        <td>120 Meters</td>
                        <td>25 Meters</td>
                        <td>75 Meters</td>
                    </tr>
                    <tr>
                        <td><strong>Energy Efficiency</strong></td>
                        <td>Class A+++</td>
                        <td>Class B</td>
                        <td>Class A++</td>
                    </tr>
                    <tr>
                        <td><strong>Maintenance Frequency</strong></td>
                        <td>Bi-Annual</td>
                        <td>Quarterly</td>
                        <td>Bi-Annual</td>
                    </tr>
                    <tr>
                        <td><strong>Machine Room Req.</strong></td>
                        <td>Optional</td>
                        <td>Mandatory</td>
                        <td>None (Integrated)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="glt-quality glt-section">
    <div class="glt-container">
        <div class="glt-grid-4">
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>ISO 9001:2026</h4>
                <p>Global standards for manufacturing and safety excellence.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-microchip"></i></div>
                <h4>Smart Monitoring</h4>
                <p>IoT-enabled telemetry for predictive maintenance.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-leaf"></i></div>
                <h4>Eco-Engineered</h4>
                <p>Regenerative drives return power to the grid.</p>
            </div>
            <div class="glt-quality-item">
                <div class="glt-q-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <h4>Lifetime Support</h4>
                <p>Engineered for 25+ years of operational service.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>