<?php 

/*
Template Name: Contact
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
                <li class="glt-bc-item active">Contact Us</li>
            </ul>
        </nav>

        <h1 class="glt-page-title">Connect Us</h1>
        <p class="glt-page-subtitle">Global headquarters and technical support infrastructure.</p>
    </div>
</section>

<section id="contact" class="glt-contact-trad">
    <div class="glt-container">
        
        <div class="glt-contact-grid-2">
            
            <div class="glt-contact-info-column">
                <div class="glt-info-header">
                    <span class="glt-upper-title">Contact Us</span>
                    <h4 class="glt-section-title">Contact Information</h4>
                </div>

                <div class="glt-contact-methods">
                    <div class="glt-method-card">
                        <div class="glt-method-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="glt-method-text">
                            <label>Dhaka Head-office</label>
                            <p>NS Tower, House No-21, Block-J, Gate-4, EXT. Pallabi, Mirpur, Dhaka.</p>
                        </div>
                    </div>

                    <div class="glt-method-card">
                        <div class="glt-method-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="glt-method-text">
                            <label>Sylhet Office</label>
                            <p>House No-03, Road No-42, Block-C, ABC Point, Shahjalal Upashahar, Sylhet.</p>
                        </div>
                    </div>

                    <div class="glt-method-card">
                        <div class="glt-method-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="glt-method-text">
                            <label>Phone</label>
                            <p>01726-218583 [CEO Number] <br/> 01712-256270 [Director Number] <br/> 01621-222255 [Hotline Number] </p>
                        </div>
                    </div>

                    <div class="glt-method-card">
                        <div class="glt-method-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="glt-method-text">
                            <label>Hotline</label>
                            <p> 01621-222255</p>
                        </div>
                    </div>

                    <div class="glt-method-card">
                        <div class="glt-method-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                        <div class="glt-method-text">
                            <label>Email</label>
                            <p>generallifttechnology@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glt-form-column">
                <div class="glt-form-terminal-frame">
                    <form class="glt-pro-form">
                        <div class="glt-pro-row">
                            <div class="glt-pro-field">
                                <input type="text" required placeholder=" ">
                                <label>Full Name</label>
                            </div>
                            <div class="glt-pro-field">
                                <input type="email" required placeholder=" ">
                                <label>Corporate Email</label>
                            </div>
                        </div>

                        <div class="glt-pro-field">
                            <textarea rows="4" required placeholder=" "></textarea>
                            <label>Project Scope / Coordinates</label>
                        </div>

                        <button type="submit" class="glt-btn-submit-pro">
                            <span>TRANSMIT DATA</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="glt-map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d467137.37106409!2d90.369393!3d23.835992!3m2!1i1024!2i768!4f13.1!2m1!1s2%20Road%20No.%206%20Dhaka%201216!5e0!3m2!1sen!2sus!4v1771388802623!5m2!1sen!2sus" ></iframe>
            <div class="glt-map-overlay-tag">HQ_LOCATION_SYNCED</div>
        </div>

    </div>
</section>

<?php get_footer(); ?>