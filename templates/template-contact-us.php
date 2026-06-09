<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<!-- CONTACT HEADER -->
<!-- HEADER / HERO -->
<header class="bg-light py-5 text-center border-bottom">
    <div class="container">
        <h1 class="display-5 fw-bold text-dark">Get in Touch</h1>
        <p class="lead text-muted max-width-md mx-auto mb-0">Have a question about treatments, billing, or
            scheduling?
            Drop us a line or visit our practice location.</p>
    </div>
</header>

<!-- NEW: BIG ZIP CODE ROUTER SECTION -->
<section class="py-5 bg-light border-bottom location-router-bg">
    <div class="container">
        <div class="card border-0 shadow-sm p-4 p-md-5 rounded-3 max-width-lg mx-auto bg-white text-center">
            <div class="icon-box bg-primary-light text-primary mx-auto mb-3"
                style="width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-map-location-dot fa-xl"></i>
            </div>
            <h3 class="fw-bold text-dark mb-2">Find a Pearl Dental Near You</h3>
            <p class="text-muted small max-width-md mx-auto mb-4">Enter your ZIP code below to route your request
                directly to the nearest regional clinic and check local provider availability.</p>

            <!-- Large Zip Code Router Form Element -->
            <form id="globalZipRouterForm" class="needs-validation mx-auto" style="max-width: 500px;" novalidate>
                <div class="input-group input-group-lg shadow-sm rounded-pill overflow-hidden border p-1 bg-white">
                    <span class="input-group-text border-0 bg-transparent text-muted ps-3"><i
                            class="fa-solid fa-location-crosshairs"></i></span>
                    <input type="text"
                        class="form-control border-0 px-2 fw-semibold tracking-wider font-monospace text-dark"
                        id="routerZipCode" required pattern="[0-9]{5}" maxlength="5" inputmode="numeric"
                        placeholder="Enter 5-digit ZIP" style="font-size: 1.1rem; box-shadow: none;">
                    <button class="btn btn-primary rounded-pill px-4 fw-bold small" type="submit"
                        style="font-size: 0.95rem;">
                        <i class="fa-solid fa-magnifying-glass me-2"></i>Find Clinic
                    </button>
                </div>
                <div class="invalid-feedback text-center mt-2 small">Please enter a valid 5-digit numeric ZIP code.
                </div>
            </form>
        </div>
    </div>
</section>

<!-- MAIN CONTACT SECTION -->
<main class="py-5 bg-white">
    <div class="container py-3">
        <div class="row g-5">

            <!-- LEFT COLUMN: PRACTICE INFO & HOURS -->
            <!-- LEFT COLUMN: CLINIC INFO & EMULATED OPERATING HOURS -->
            <div class="col-lg-5">
                <h3 class="fw-bold text-dark mb-4">Clinic Information</h3>
                <p class="text-muted small mb-4">We are located in the heart of downtown with validated parking
                    directly underground
                    for all active dental patients.</p>

                <!-- Direct Contact Links Card -->
                <div class="card border rounded-3 p-4 bg-light mb-4 shadow-sm">
                    <div class="d-flex align-items-start mb-3">
                        <div class="text-primary me-3 mt-1"><i class="fa-solid fa-location-dot fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Our Location</h6>
                            <address class="small text-muted mb-0 lh-base clinic-display-address">
                                452 Pearl Parkway, Suite 100<br>
                                Downtown Medical District
                            </address>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="text-primary me-3 mt-1"><i class="fa-solid fa-phone fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Phone Lines</h6>
                            <p class="small text-muted mb-0"><a href="tel:5551234567"
                                    class="text-decoration-none text-muted contact-hover-link clinic-display-phone">(555) 123-4567</a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="text-primary me-3 mt-1"><i class="fa-solid fa-envelope fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Email Support</h6>
                            <p class="small text-muted mb-0"><a href="mailto:care@pearldental.com"
                                    class="text-decoration-none text-muted contact-hover-link clinic-display-email">care@pearldental.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Operating Hours Card (Emulating Footer Table Layout Exactly) -->
                <div class="card border rounded-3 p-4 bg-white shadow-sm">
                    <h5 class="fw-bold text-dark mb-3"><i
                            class="fa-solid fa-clock text-primary me-2 small"></i>Operating Hours</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0 text-muted small">
                            <tbody>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Monday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 5:00 PM</td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Tuesday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 5:00 PM</td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Wednesday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 5:00 PM</td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Thursday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 5:00 PM</td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Friday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 2:00 PM</td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td class="py-2 fw-semibold text-dark">Saturday:</td>
                                    <td class="py-2 text-end text-muted">8:00 AM — 2:00 PM (Alternating)</td>
                                </tr>
                                <tr>
                                    <td class="py-2 fw-semibold text-dark">Sunday:</td>
                                    <td class="py-2 text-end text-danger fw-semibold">Closed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-light rounded p-2 text-center mt-3 border">
                        <span class="text-muted d-block" style="font-size: 0.75rem;"><i
                                class="fa-solid fa-circle-exclamation text-primary me-1"></i><strong>Emergency
                                Note:</strong> Call
                            directly for same-day acute dental slots.</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: INTERACTIVE FORM CONTAINER WITH ZIP CODE ROUTER -->
            <div class="col-lg-7">
                <div class="card border-0 shadow p-4 p-md-5 rounded-3 bg-white border">
                    <h3 class="fw-bold text-dark mb-2">Send Us a Message</h3>
                    <p class="text-muted small mb-4">Complete this secure configuration form and a clinical
                        specialist will follow
                        up with you within 24 business hours.</p>

                    <form id="contactPracticeForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <!-- First & Last Name row -->
                            <div class="col-sm-6">
                                <label for="formFirstName" class="form-label small fw-bold text-dark">First
                                    Name</label>
                                <input type="text" class="form-control rounded-2 py-2 small" id="formFirstName"
                                    required placeholder="John">
                            </div>
                            <div class="col-sm-6">
                                <label for="formLastName" class="form-label small fw-bold text-dark">Last
                                    Name</label>
                                <input type="text" class="form-control rounded-2 py-2 small" id="formLastName"
                                    required placeholder="Doe">
                            </div>

                            <!-- Email & Phone row -->
                            <div class="col-sm-6">
                                <label for="formEmail" class="form-label small fw-bold text-dark">Email
                                    Address</label>
                                <input type="email" class="form-control rounded-2 py-2 small" id="formEmail"
                                    required placeholder="johndoe@example.com">
                            </div>
                            <div class="col-sm-6">
                                <label for="formPhone" class="form-label small fw-bold text-dark">Phone
                                    Number</label>
                                <input type="tel" class="form-control rounded-2 py-2 small" id="formPhone"
                                    placeholder="(555) 000-0000">
                            </div>

                            <!-- Zip Code Router Intake Field -->
                            <div class="col-12">
                                <label for="formZipCode" class="form-label small fw-bold text-dark">ZIP / Postal
                                    Code <span class="text-muted fw-normal font-monospace"
                                        style="font-size: 0.75rem;">(Used to check local
                                        regional providers)</span></label>
                                <div class="input-group">
                                    <span
                                        class="input-group-text bg-light text-muted border-end-0 rounded-start-2"><i
                                            class="fa-solid fa-map-pin"></i></span>
                                    <input type="text" class="form-control rounded-end-2 py-2 small border-start-0"
                                        id="formZipCode" required pattern="[0-9]{5}" maxlength="5"
                                        inputmode="numeric" placeholder="90210">
                                </div>
                            </div>

                            <!-- Inquiry Type Dropdown Selection -->
                            <div class="col-12">
                                <label for="formSubject" class="form-label small fw-bold text-dark">Reason for
                                    Inquiry</label>
                                <select class="form-select rounded-2 py-2 small" id="formSubject" required>
                                    <option value="" selected disabled>Select an option...</option>
                                    <option value="appointment">Schedule a New Appointment</option>
                                    <option value="insurance">Insurance & Billing Questions</option>
                                    <option value="records">Request Medical/X-Ray Records</option>
                                    <option value="general">General Treatment Inquiry</option>
                                </select>
                            </div>

                            <!-- Text Message Box -->
                            <div class="col-12">
                                <label for="formMessage" class="form-label small fw-bold text-dark">Your
                                    Message</label>
                                <textarea class="form-control rounded-2 py-2 small" id="formMessage" rows="4"
                                    required
                                    placeholder="Please provide details regarding your request..."></textarea>
                            </div>

                            <!-- Action Submit Trigger Button -->
                            <div class="col-12 pt-2">
                                <button type="submit"
                                    class="btn btn-primary rounded-pill px-5 py-2 fw-semibold w-100 w-sm-auto shadow-sm">Send
                                    Secure
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>