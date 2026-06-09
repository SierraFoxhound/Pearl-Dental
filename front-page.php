<?php get_header(); ?>

<section id="home" class="py-5 bg-light position-relative overflow-hidden"
    style="min-height: 80vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-primary-light text-primary mb-2 px-3 py-2 fw-semibold text-uppercase">Welcome
                    to
                    Pearl Dental</span>
                <h1 class="display-4 fw-bold text-dark mb-3">We Create Beautiful, Healthy Smiles</h1>
                <p class="lead text-muted mb-4">Experience world-class dental care with a gentle touch. Enter your
                    ZIP
                    code below to instantly find your closest neighborhood clinic and view real-time appointment
                    availability.</p>

                <small class="text-muted"><i class=" fa-location-dot me-1 text-primary"></i> Now displaying <span class="clinic-display-name">Health Ave Suite</span></small>

                <form id="heroZipRouterForm" class="needs-validation mb-3" style="max-width: 480px;" novalidate>
                    <div
                        class="input-group input-group-lg shadow-sm rounded-pill overflow-hidden border p-1 bg-white">
                        <span class="input-group-text border-0 bg-transparent text-muted ps-3"><i
                                class="fa-solid fa-map-pin"></i></span>
                        <input type="text"
                            class="form-control border-0 px-2 fw-semibold tracking-wider font-monospace text-dark"
                            id="heroZipInput" required pattern="[0-9]{5}" maxlength="5" inputmode="numeric"
                            placeholder="Enter your ZIP code (e.g., 90210)"
                            style="font-size: 1rem; box-shadow: none;">
                        <button class="btn btn-primary rounded-pill px-4 fw-bold" type="submit"
                            style="font-size: 0.9rem;">
                            Find Clinic
                        </button>
                    </div>
                </form>
                <small class="text-muted"><i class="fa-solid fa-shield-halved me-1 text-primary"></i> Over 15,000
                    localized family treatment records securely managed.</small>
            </div>

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&q=80&w=800"
                    alt="Pearl Dental modern clinical operatory suite" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&q=80&w=800" alt="Our Team" class="img-fluid rounded-3 shadow-sm">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="fw-bold mb-3">About Pearl Dental</h2>
                <p class="text-muted">Founded in 2015, Pearl Dental has been at the forefront of dental excellence. We believe that a visit to the dentist should be relaxing, empowering, and completely tailored to your lifestyle.</p>
                <p class="text-muted">Our state-of-the-art facility utilizes advanced digital imaging and minimally invasive techniques to ensure your absolute comfort and precision results.</p>
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <h5 class="fw-bold text-primary"><i class="fa-solid fa-user-doctor me-2"></i>Expert Doctors</h5>
                        <p class="small text-muted">Board-certified specialists with years of clinical experience.</p>
                    </div>
                    <div class="col-6">
                        <h5 class="fw-bold text-primary"><i class="fa-solid fa-microscope me-2"></i>Modern Tech</h5>
                        <p class="small text-muted">Advanced 3D imaging, laser dentistry, and digital scans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center max-width-md mx-auto mb-5">
            <h2 class="fw-bold">Our Dental Services</h2>
            <p class="text-muted">From routine cleanings to complete cosmetic transformations, we provide end-to-end care.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center service-card">
                    <div class="icon-box bg-primary-light text-primary mx-auto mb-4">
                        <i class="fa-solid fa-tooth fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">General Dentistry</h4>
                    <p class="text-muted small">Cleanings, fillings, checkups, and root canals designed to keep your natural teeth healthy for life.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center service-card">
                    <div class="icon-box bg-primary-light text-primary mx-auto mb-4">
                        <i class="fa-solid fa-wand-magic-sparkles fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Cosmetic Veneers</h4>
                    <p class="text-muted small">Transform your smile with custom porcelain veneers designed for a flawless, natural aesthetic.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center service-card">
                    <div class="icon-box bg-primary-light text-primary mx-auto mb-4">
                        <i class="fa-solid fa-align-center fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Orthodontics</h4>
                    <p class="text-muted small">Straighten your teeth discreetly with Invisalign clear aligners or traditional modern braces.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOG PAGE/SECTION -->
<section id="blog" class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Dental Health Blog</h2>
            <p class="text-muted">Tips and insights from our clinical experts to keep your smile bright at home.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="blog-card-img-wrap">
                        <img src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcQn0Q3Pnkhp9LqbPDWYBL_GO9-OXEjQVYhtxHwwfH6fRYik3ACvgwGs00P_wnr3q-E2bjVFyWRnGlGc4nI" class="card-img-top" alt="Dental Care and Cleanings">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary-light text-primary mb-2">Oral Hygiene</span>
                        <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">5 Simple Habits to Avoid Cavities Safely</a></h5>
                        <p class="text-muted small">Discover how minor changes to your morning routine can significantly cut down plaque build-up...</p>
                        <hr class="text-muted opacity-25">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">May 15, 2026</small>
                            <a href="#" class="btn btn-link btn-sm p-0 text-primary fw-bold text-decoration-none ms-auto">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="blog-card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&q=80&w=600" class="card-img-top" alt="Teeth Whitening">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary-light text-primary mb-2">Cosmetic Dentistry</span>
                        <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">The Truth About Professional Teeth Whitening</a></h5>
                        <p class="text-muted small">Are over-the-counter kits ruining your enamel? Here is what science says about professional bleaching...</p>
                        <hr class="text-muted opacity-25">
                        <div class="d-flex justify-between align-items-center">
                            <small class="text-muted">May 10, 2026</small>
                            <a href="#" class="btn btn-link btn-sm p-0 text-primary fw-bold text-decoration-none ms-auto">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="blog-card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1471864190281-a93a3070b6de?auto=format&fit=crop&q=80&w=600" class="card-img-top" alt="Pediatric Dentistry">
                    </div>
                    <div class="card-body p-4">
                        <span class="badge bg-primary-light text-primary mb-2">Pediatrics</span>
                        <h5 class="fw-bold mb-3"><a href="#" class="text-dark text-decoration-none">When Should Your Child First Visit the Dentist?</a></h5>
                        <p class="text-muted small">Early preventative care shapes a child’s lifelong outlook on dental health. Learn how to prepare them...</p>
                        <hr class="text-muted opacity-25">
                        <div class="d-flex justify-between align-items-center">
                            <small class="text-muted">April 28, 2026</small>
                            <a href="#" class="btn btn-link btn-sm p-0 text-primary fw-bold text-decoration-none ms-auto">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Review Section -->
<!-- REVIEWS SECTION (Trustindex style) -->
<section id="reviews" class="py-5 bg-white">
    <div class="container py-4">
        <!-- Trustindex Style Header Summary -->
        <div class="row align-items-center mb-5 g-4">
            <div class="col-md-6 text-center text-md-start">
                <span class="badge bg-success-light text-success fw-bold px-3 py-2 mb-2 rounded-pill">
                    <i class="fa-solid fa-shield-checkmark me-1"></i> Verified Platform Reviews
                </span>
                <h2 class="fw-bold text-dark">What Our Patients Say</h2>
                <p class="text-muted mb-0">Real patient experiences collected directly via independent healthcare networks.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                <!-- Global Trust Score Box -->
                <div class="d-flex align-items-center border rounded-3 p-3 shadow-sm bg-light">
                    <div class="text-center me-3 border-end pe-3">
                        <h3 class="fw-bold text-dark mb-0">4.9</h3>
                        <small class="text-muted text-uppercase fw-semibold tracking-wider" style="font-size: 0.7rem;">Excellent</small>
                    </div>
                    <div>
                        <div class="text-warning mb-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <small class="text-muted d-block">Based on <strong>318 patient reviews</strong></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Grid Grid -->
        <div class="row g-4">
            <!-- Review 1 -->
            <div class="col-md-4">
                <div class="card h-100 border rounded-3 p-4 shadow-sm position-relative">
                    <!-- Top Info row -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100" alt="Sarah M." class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;">
                        <div>
                            <h6 class="fw-bold mb-0">Sarah Jenkins</h6>
                            <small class="text-muted d-flex align-items-center">
                                <span class="text-success me-1"><i class="fa-solid fa-circle-check"></i></span> Verified Patient
                            </small>
                        </div>
                        <!-- Source Brand Icon Top Right -->
                        <div class="ms-auto text-primary opacity-70">
                            <i class="fa-brands fa-google fa-lg"></i>
                        </div>
                    </div>
                    <!-- Rating Stars -->
                    <div class="text-warning mb-2 small">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <!-- Review text -->
                    <p class="card-text text-muted small flex-grow-1">"I have always been terrified of the dentist, but Pearl Dental changed everything. The staff was incredibly gentle, explained every step, and the clinic feels more like a spa than a dentist's office."</p>
                    <small class="text-muted mt-3 block" style="font-size: 0.75rem;">Posted 2 days ago</small>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-4">
                <div class="card h-100 border rounded-3 p-4 shadow-sm position-relative">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100" alt="Michael T." class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;">
                        <div>
                            <h6 class="fw-bold mb-0">Dr. Michael Torres</h6>
                            <small class="text-muted d-flex align-items-center">
                                <span class="text-success me-1"><i class="fa-solid fa-circle-check"></i></span> Verified Patient
                            </small>
                        </div>
                        <div class="ms-auto text-info opacity-70">
                            <i class="fa-solid fa-comment-medical fa-lg"></i>
                        </div>
                    </div>
                    <div class="text-warning mb-2 small">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="card-text text-muted small flex-grow-1">"State-of-the-art equipment and zero wait times. They handled my composite veneers perfectly. Exceptional attention to clinical detail and dental symmetry. Strongly recommend."</p>
                    <small class="text-muted mt-3 block" style="font-size: 0.75rem;">Posted 1 week ago</small>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-md-4">
                <div class="card h-100 border rounded-3 p-4 shadow-sm position-relative">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=100" alt="Emily R." class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;">
                        <div>
                            <h6 class="fw-bold mb-0">Emily Richardson</h6>
                            <small class="text-muted d-flex align-items-center">
                                <span class="text-success me-1"><i class="fa-solid fa-circle-check"></i></span> Verified Patient
                            </small>
                        </div>
                        <div class="ms-auto text-primary opacity-70">
                            <i class="fa-brands fa-google fa-lg"></i>
                        </div>
                    </div>
                    <div class="text-warning mb-2 small">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="card-text text-muted small flex-grow-1">"Brought my 6-year-old here for a filling. The pediatric care team was remarkable. They kept her completely calm and happy throughout. Five stars all day long."</p>
                    <small class="text-muted mt-3 block" style="font-size: 0.75rem;">Posted 3 weeks ago</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<?php get_template_part('template-parts/section', 'contact'); ?>

<?php get_footer(); ?>