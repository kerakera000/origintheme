<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout max-content">
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title">The Tokyo Toilet Running Tour</h1>
            <p class="hero__subtitle">Explore Japanese Hospitality Culture through Toilets Designed by Famous Architects</p>
            <div class="hero__cta">
                <a href="#contact" class="btn btn--primary">Book Now</a>
            </div>
        </div>
    </section>

    <section class="announcements">
        <div class="container">
            <div class="announcements__grid">
                <div class="announcement-card announcement-card--event">
                    <div class="announcement-card__header">
                        <div class="announcement-card__icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="announcement-card__title">
                            <h3>Event Information</h3>
                            <span class="announcement-card__badge">NEW</span>
                        </div>
                    </div>
                    <div class="announcement-card__content">
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">15</span>
                                <span class="date-month">DEC</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>Year-End Running Event Confirmed!</h4>
                                <p>On December 28th (Saturday) only, we will hold a special running event to enjoy the Christmas illuminations.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--limited">Limited</span>
                                    <span class="tag tag--special">Special Price</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">20</span>
                                <span class="date-month">DEC</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>New Year Running Tour Reservations Open</h4>
                                <p>Reservations for the New Year Running Tour starting January 3rd are now open. Enjoy a special running experience starting with the first sunrise of the year.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--new">New Plan</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">25</span>
                                <span class="date-month">DEC</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>Christmas Running Special Plan</h4>
                                <p>A special running event limited to Christmas Day. Enjoy running with the night illuminations and the beautiful night view of Tokyo.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--limited">Limited</span>
                                    <span class="tag tag--special">Night View</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">30</span>
                                <span class="date-month">DEC</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>New Year's Eve Countdown Run</h4>
                                <p>A special running event starting with the countdown on New Year's Eve. Experience the moment of welcoming the New Year at a special place.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--limited">Limited</span>
                                    <span class="tag tag--new">Countdown</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">05</span>
                                <span class="date-month">JAN</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>New Year Shrine Visit Running Tour</h4>
                                <p>A special running tour to enjoy with the New Year's shrine visit. Enjoy running while feeling the fresh air of the New Year and praying at the shrine.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--new">Shrine Visit</span>
                                    <span class="tag tag--special">New Year</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">10</span>
                                <span class="date-month">JAN</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>Coming of Age Day Special Running Tour</h4>
                                <p>A special running tour to commemorate Coming of Age Day. Run while feeling the traditional culture of Japan with new adults in kimono.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--limited">Limited</span>
                                    <span class="tag tag--new">Tradition</span>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-item">
                            <div class="announcement-item__date">
                                <span class="date-day">15</span>
                                <span class="date-month">JAN</span>
                            </div>
                            <div class="announcement-item__details">
                                <h4>Little New Year Special Running Plan</h4>
                                <p>A special running plan tailored to Little New Year. Enjoy running while experiencing mochi pounding and traditional events.</p>
                                <div class="announcement-item__tags">
                                    <span class="tag tag--new">Experience</span>
                                    <span class="tag tag--special">Tradition</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="announcement-card announcement-card--emergency">
                    <div class="announcement-card__header">
                        <div class="announcement-card__icon">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div class="announcement-card__title">
                            <h3>Emergency Contact</h3>
                            <span class="announcement-card__badge announcement-card__badge--urgent">URGENT</span>
                        </div>
                    </div>
                    <div class="announcement-card__content">
                        <!-- <div class="emergency-notice">
                            <div class="emergency-notice__status">
                                <span class="status-indicator status-indicator--normal"></span>
                                <span class="status-text">Operating Normally</span>
                            </div>
                            <div class="emergency-notice__message">
                                <p>Currently, all tours are operating as usual. If there are any changes due to weather or traffic conditions, we will notify you on this page.</p>
                            </div>
                        </div> -->

                        <!-- Example in case of emergency (commented out) -->
                        
                        <div class="emergency-notice emergency-notice--warning">
                            <div class="emergency-notice__status">
                                <span class="status-indicator status-indicator--warning"></span>
                                <span class="status-text">Warning Issued</span>
                            </div>
                            <div class="emergency-notice__message">
                                <p><strong>Warning Due to Approaching Typhoon</strong><br>
                                Today's tour on December 15th will be conducted with some course changes due to the approaching typhoon. Please contact us at least one hour before the start if you plan to participate.</p>
                            </div>
                        </div>
                       

                        <!-- Example in case of emergency (commented out) -->
                        
                        <div class="emergency-notice emergency-notice--danger">
                            <div class="emergency-notice__status">
                                <span class="status-indicator status-indicator--danger"></span>
                                <span class="status-text">Emergency</span>
                            </div>
                            <div class="emergency-notice__message">
                                <p><strong>Today's tour on December 15th is canceled</strong><br>
                                Due to the heavy rain warning, today's tour is canceled for safety reasons. We will contact those who planned to participate individually.</p>
                            </div>
                        </div>
                       

                        <div class="emergency-contact">
                            <h4>Emergency Contact</h4>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>emergency@tokyotoilet.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tour-overview">
        <div class="container">
            <h2 class="section-title">Tour Overview</h2>
            <div class="tour-stats">
                <div class="tour-stat tour-stat--toilet">
                    <div class="tour-stat__row">
                        <div class="tour-stat__icon">
                            <i class="fa-solid fa-restroom"></i>
                        </div>
                        <span class="tour-stat__number">17</span>
                    </div>
                    <span class="tour-stat__label">Designer Toilets</span>
                </div>
                <div class="tour-stat tour-stat--distance">
                    <div class="tour-stat__row">
                        <div class="tour-stat__icon">
                            <i class="fa-solid fa-route"></i>
                        </div>
                        <span class="tour-stat__number">20km</span>
                    </div>
                    <span class="tour-stat__label">Total Distance</span>
                </div>
                <div class="tour-stat tour-stat--duration">
                    <div class="tour-stat__row">
                        <div class="tour-stat__icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <span class="tour-stat__number">5h</span>
                    </div>
                    <span class="tour-stat__label">Duration</span>
                </div>
            </div>
        </div>
    </section>

    <section class="course-map">
        <div class="container">
            <h2 class="section-title">Course Map</h2>
            <div class="course-map__container">
                <div class="course-timeline">
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-train"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Shibuya Station</h3>
                            <p>Start Point</p>
                        </div>
                    </div>
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-restroom"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Harajuku</h3>
                            <p>Designer Toilet Visit</p>
                        </div>
                    </div>
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-restroom"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Sasazuka</h3>
                            <p>Designer Toilet Visit</p>
                        </div>
                    </div>
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-torii-gate"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Yoyogi Hachimangu Shrine</h3>
                            <p>Pray & Lunch Break</p>
                            <div class="course-timeline__details">
                                <span class="course-timeline__tag">⛩️ Shrine Visit</span>
                                <span class="course-timeline__tag">🍽️ Lunch</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-restroom"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Ebisu</h3>
                            <p>Designer Toilet Visit</p>
                        </div>
                    </div>
                    <div class="course-timeline__item">
                        <div class="course-timeline__icon">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </div>
                        <div class="course-timeline__content">
                            <h3>Shibuya Station</h3>
                            <p>Goal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-details">
                <div class="course-details__card">
                    <h3>Course Highlights</h3>
                    <ul class="course-list">
                        <li class="course-list__item">
                            <i class="fa-solid fa-route"></i>
                            <span>Total Distance: 20km</span>
                        </li>
                        <li class="course-list__item">
                            <i class="fa-solid fa-clock"></i>
                            <span>Duration: 5 hours</span>
                        </li>
                        <li class="course-list__item">
                            <i class="fa-solid fa-restroom"></i>
                            <span>Designer Toilets: 17</span>
                        </li>
                        <li class="course-list__item">
                            <i class="fa-solid fa-torii-gate"></i>
                            <span>Yoyogi Hachimangu Shrine Visit</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="course-gallery">
        <div class="container">
            <h2 class="section-title">Gallery</h2>
            
            <div class="gallery-grid">
                <div class="gallery-item" data-category="start">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="Shibuya Station Start" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Nishi-Sando Public Toilet</h3>
                    </div>
                </div>

                <div class="gallery-item" data-category="toilet">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt="Designer Toilet" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Sasazuka Greenway Public Toilet</h3>
                    </div>
                </div>

                <div class="gallery-item" data-category="shrine">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" alt="Yoyogi Hachimangu Shrine" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Hatagaya Public Toilet</h3>
                    </div>
                </div>

                <div class="gallery-item" data-category="group">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg" alt="Group Photo" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Ura-Sando Public Toilet</h3>
                    </div>
                </div>

                <div class="gallery-item" data-category="toilet">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg" alt="Ebisu Toilet" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Hiroo East Park Toilet</h3>
                    </div>
                </div>

                <div class="gallery-item" data-category="lunch">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6.jpg" alt="Lunch Time" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <h3>Nanago Street Park Toilet</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-stats">
                <div class="gallery-stat">
                    <span class="gallery-stat__number">6</span>
                    <span class="gallery-stat__label">Trial Runs</span>
                </div>
                <div class="gallery-stat">
                    <span class="gallery-stat__number">50+</span>
                    <span class="gallery-stat__label">Participants</span>
                </div>
                <div class="gallery-stat">
                    <span class="gallery-stat__number">100%</span>
                    <span class="gallery-stat__label">Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <section class="booking-platforms">
        <div class="container">
            <h2 class="section-title">
                <i class="fa-solid fa-globe"></i>
                Book Your Experience
            </h2>
            <p class="booking-description">Choose your preferred booking platform to reserve your Tokyo Toilet Running Tour</p>
            
            <div class="booking-buttons">
                <a href="https://www.airbnb.com/experiences/your-experience-id" target="_blank" rel="noopener noreferrer" class="booking-btn booking-btn--airbnb">
                    <div class="booking-btn__icon">
                        <i class="fa-brands fa-airbnb"></i>
                    </div>
                    <div class="booking-btn__content">
                        <span class="booking-btn__platform">Airbnb</span>
                        <span class="booking-btn__text">Book on Airbnb Experiences</span>
                    </div>
                    <div class="booking-btn__arrow">
                        <i class="fa-solid fa-external-link-alt"></i>
                    </div>
                </a>
                
                <div class="booking-divider">
                    <span>or</span>
                </div>
                
                <a href="#contact" class="booking-btn booking-btn--direct">
                    <div class="booking-btn__icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="booking-btn__content">
                        <span class="booking-btn__platform">Direct</span>
                        <span class="booking-btn__text">Contact Us Directly</span>
                    </div>
                    <div class="booking-btn__arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            </div>
            
            <div class="booking-features">
                <div class="booking-feature">
                    <i class="fa-solid fa-shield-alt"></i>
                    <span>Secure Booking</span>
                </div>
                <div class="booking-feature">
                    <i class="fa-solid fa-clock"></i>
                    <span>Instant Confirmation</span>
                </div>
                <div class="booking-feature">
                    <i class="fa-solid fa-heart"></i>
                    <span>Best Price Guarantee</span>
                </div>
            </div>
        </div>
    </section>

    <section class="movie-connection">
        <div class="container">
            <h2 class="section-title">Movie Connection</h2>
            <div class="movie-content">
                <p>These designer toilets were featured in the hit movie "PERFECT DAYS" starring Koji Yakusho. Experience the real locations from the film for a deeper connection.</p>
                <div class="movie-trailer">
                    <iframe width="560" height="450" src="https://www.youtube.com/embed/JSiP_1LjF9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="movie-highlights">
                    <div class="movie-highlight">
                        <div class="movie-highlight__icon">
                            <i class="fa-solid fa-film"></i>
                        </div>
                        <div class="movie-highlight__text">Movie Location</div>
                    </div>
                    <div class="movie-highlight">
                        <div class="movie-highlight__icon">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                        <div class="movie-highlight__text">Photo Spot</div>
                    </div>
                    <div class="movie-highlight">
                        <div class="movie-highlight__icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="movie-highlight__text">Special Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title"><i class="fa-solid fa-envelope"></i> Contact Us</h2>
            <p class="contact-description">For questions, requests, media inquiries, or collaboration offers, feel free to contact us.<br>Our team will respond promptly.</p>
            <form class="contact-form" action="/submit-contact" method="post" autocomplete="on" novalidate>
                <div class="form-group">
                    <label><span class="required">*</span> Title</label>
                    <div class="form-radio-group">
                        <label><input type="radio" name="title" value="Mr." required> Mr.</label>
                        <label><input type="radio" name="title" value="Miss."> Miss.</label>
                        <label><input type="radio" name="title" value="Mrs."> Mrs.</label>
                        <label><input type="radio" name="title" value="Ms."> Ms.</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guest-name"><span class="required">*</span> Guest's Name</label>
                    <input type="text" id="guest-name" name="guest_name" required placeholder="e.g. John Smith" autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="nationality"><span class="required">*</span> Nationality</label>
                    <select id="nationality" name="nationality" required>
                        <option value="">--choose your nationality--</option>
                        <option value="Japan">Japan</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Australia">Australia</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email"><span class="required">*</span> E-mail address</label>
                    <input type="email" id="email" name="email" required placeholder="e.g. sample@example.com" autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="email2"><span class="required">*</span> E-mail address (re-entry)</label>
                    <input type="email" id="email2" name="email2" required placeholder="Please re-enter your email" autocomplete="email">
                </div>
                <div class="form-group form-group--phone">
                    <label for="phone"><span class="required">*</span> Phone Number</label>
                    <div class="phone-fields">
                        <input type="text" id="phone-country" name="phone_country" value="+81 | Japan" readonly style="max-width:120px;">
                        <input type="tel" id="phone" name="phone" required placeholder="e.g. 09012345678">
                    </div>
                </div>
                <div class="form-group">
                    <label><span class="required">*</span> Accommodation</label>
                    <div class="form-radio-group">
                        <label><input type="radio" name="accommodation" value="To be determined" required> To be determined</label>
                        <label><input type="radio" name="accommodation" value="Booked"> Booked</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hotel-name">Hotel Name (if fixed)</label>
                    <input type="text" id="hotel-name" name="hotel_name" placeholder="e.g. Shibuya Excel Hotel Tokyu">
                </div>
                <div class="form-group">
                    <label for="requests">Any requests<br><span class="form-note">(e.g. I'd like to book a tour A-xxx in a same day. or I'd like to travel by taxi.)</span></label>
                    <textarea id="requests" name="requests" rows="5" placeholder="Please enter any requests or questions"></textarea>
                </div>
                <div class="form-group form-group--checkbox">
                    <label class="checkbox-label">
                        <input type="checkbox" name="privacy" required>
                        <span class="checkmark"></span>
                        <span>I agree to the privacy policy</span>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-contact-submit"><i class="fa-solid fa-paper-plane"></i> Send</button>
                </div>
                <div class="form-message" aria-live="polite"></div>
            </form>
        </div>
    </section>
</main>

<?php
get_template_part('./template/footer');
?>
