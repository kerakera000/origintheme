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
            <h2 class="section-title">Trial Run Gallery</h2>
            <p class="gallery-subtitle">Introducing scenes from our previous trial runs</p>
            
            <div class="gallery-grid">
                <div class="gallery-item" data-category="start">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/start.jpg" alt="Shibuya Station Start" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Start</span>
                        <h3>Gathering at Shibuya Station</h3>
                        <p>Members gathered in the fresh morning air</p>
                    </div>
                </div>

                <div class="gallery-item" data-category="toilet">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/toilet1.jpg" alt="Designer Toilet" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Toilet</span>
                        <h3>Harajuku Toilet</h3>
                        <p>Beautiful toilet designed by an architect</p>
                    </div>
                </div>

                <div class="gallery-item" data-category="shrine">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/shrine.jpg" alt="Yoyogi Hachimangu Shrine" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Shrine</span>
                        <h3>Yoyogi Hachimangu Shrine</h3>
                        <p>Praying and lunch break</p>
                    </div>
                </div>

                <div class="gallery-item" data-category="group">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/group.jpg" alt="Group Photo" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Members</span>
                        <h3>Goal Celebration</h3>
                        <p>Celebrating the finish together</p>
                    </div>
                </div>

                <div class="gallery-item" data-category="toilet">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/toilet2.jpg" alt="Ebisu Toilet" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Toilet</span>
                        <h3>Ebisu Toilet</h3>
                        <p>Modern design toilet</p>
                    </div>
                </div>

                <div class="gallery-item" data-category="lunch">
                    <div class="gallery-item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/lunch.jpg" alt="Lunch Time" loading="lazy">
                    </div>
                    <div class="gallery-item__content">
                        <span class="gallery-item__tag">Lunch</span>
                        <h3>Lunch at the Shrine</h3>
                        <p>A wonderful break like in the movie</p>
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
