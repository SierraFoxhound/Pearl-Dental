<!--Footer Section-->
<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4 mb-4">

            <!-- Left Column: Company Details & Social Media -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3 text-primary"><i class="fa-solid fa-tooth me-2"></i>Pearl Dental</h5>
                <p class="small mb-3 text-white">Providing modern, stress-free family dentistry with a gentle, expert touch. Your healthy, bright smile is our clinical mission.</p>

                <div class="text-muted small mb-4">
                    <p class="mb-1 text-white">
                        <i class="fa-solid fa-location-dot text-primary me-2"></i>
                        <span class="clinic-display-address">123 Health Ave, Suite 400, Medical District</span>
                    </p>
                    <p class="mb-1 text-white">
                        <i class="fa-solid fa-phone text-primary me-2"></i>
                        <span class="clinic-display-phone">(555) 019-2834</span>
                    </p>
                    <p class="mb-0 text-white">
                        <i class="fa-solid fa-envelope text-primary me-2"></i>
                        <span class="clinic-display-email">info@pearldental.com</span>
                    </p>
                </div>

                <!-- Social Media Buttons Layout -->
                <div class="d-flex gap-2">
                    <a href="#" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>

                <form id="footerZipRouterForm" class="needs-validation" novalidate>
                    <label for="footerZipInput" class="d-block text-white-50 mb-1" style="font-size: 0.75rem;">
                        <i class="fa-solid fa-circle-info text-primary me-1"></i> Enter ZIP to switch closest
                        practice details:
                    </label>
                    <div
                        class="input-group input-group-sm max-width-xs shadow-sm rounded border border-secondary border-opacity-50 overflow-hidden">
                        <span class="input-group-text bg-dark border-0 text-white-50 ps-2 pe-1"><i
                                class="fa-solid fa-map-pin" style="font-size: 0.8rem;"></i></span>
                        <input type="text"
                            class="form-control bg-dark border-0 text-white small px-1 font-monospace"
                            id="footerZipInput" required pattern="[0-9]{5}" maxlength="5" inputmode="numeric"
                            placeholder="90210" style="box-shadow: none;">
                        <button class="btn btn-primary px-3 fw-bold btn-sm py-1" type="submit"
                            style="font-size: 0.75rem;">Update</button>
                    </div>
                    <div class="invalid-feedback text-danger mt-1" style="font-size: 0.7rem;">Enter a 5-digit ZIP.
                    </div>
                </form>
            </div>

            <!-- Middle Column: Hours & Dynamic Status Badge -->
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3 border-bottom border-secondary pb-2">
                    <h5 class="fw-bold mb-0">Business Hours</h5>
                    <!-- Green Live Status Dot Component -->
                    <span id="clinic-status-badge" class="status-badge d-inline-flex align-items-center">
                        <!-- JavaScript will dynamically insert the pulsing dot and 'Open' or 'Closed' text here -->
                    </span>
                </div>

                <ul class="list-unstyled text-muted small lh-lg">
                    <li class="d-flex justify-content-between text-white"><span>Monday</span> <span class="text-white fw-semibold">8:00 AM - 5:00 PM</span></li>
                    <li class="d-flex justify-content-between text-white"><span>Tuesday</span> <span class="text-white fw-semibold">8:00 AM - 5:00 PM</span></li>
                    <li class="d-flex justify-content-between text-white"><span>Wednesday</span> <span class="text-white fw-semibold">8:00 AM - 5:00 PM</span></li>
                    <li class="d-flex justify-content-between text-white"><span>Thursday</span> <span class="text-white fw-semibold">8:00 AM - 5:00 PM</span></li>
                    <li class="d-flex justify-content-between text-white"><span>Friday</span> <span class="text-white fw-semibold">8:00 AM - 2:00 PM</span></li>
                    <li class="d-flex justify-content-between text-white"><span>Saturday</span> <span class="text-white fw-semibold">By Appointment Only</span></li>
                    <li class="d-flex justify-content-between border-top border-secondary pt-1 mt-1 text-white"><span>Sunday</span> <span class="text-danger fw-semibold">Closed</span></li>
                </ul>

                <div class="alert alert-secondary bg-opacity-10 border-0 text-muted small mt-3 p-2 rounded">
                    <i class="fa-solid fa-circle-info text-primary me-2"></i>Emergency dental call routes are available 24/7 via our main office line.
                </div>
            </div>

            <!-- Right Column: Interactive Embedded Map Container -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Our Location Map</h5>
                <div class="map-container rounded-3 overflow-hidden shadow-sm border border-secondary border-opacity-20">
                    <!-- Standard clean embedded maps layout -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.013289945107!2d-122.41941548468195!3d37.77492947975924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
                        width="100%"
                        height="180"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <a href="https://maps.google.com" target="_blank" class="btn btn-outline-light btn-sm w-100 mt-2 rounded-2 small opacity-75">
                    <i class="fa-solid fa-map-location-dot me-2"></i>Get Driving Directions
                </a>
            </div>

        </div>

        <hr class="text-secondary opacity-25">

        <!-- Copyright Row -->
        <div class="row">
            <div class="col-12 text-center">
                <p class="small text-white mb-0">&copy; 2026 Pearl Dental Clinic. All clinical configurations protected by copyright laws.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Load Bootstrap and JavaScript links -->
<?php wp_footer(); ?>
</body>

</html>