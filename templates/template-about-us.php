<?php
/*
Template Name: About Page
*/

get_header();
?>

<!-- HEADER / BREADCRUMB -->
<header class="bg-light py-5 text-center border-bottom">
    <div class="container">
        <h1 class="display-5 fw-bold text-dark">About Our Practice</h1>
        <p class="lead text-muted max-width-md mx-auto mb-0">Learn about our mission, our state-of-the-art facility, and the expert clinical team behind your smile.</p>
    </div>
</header>

<!-- CORE MISSION & METRICS -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="text-primary fw-bold text-uppercase tracking-wider">Our Core Vision</span>
                <h2 class="fw-bold text-dark mt-2 mb-4">Patient-First Dental Care That Feels Different</h2>
                <p class="text-muted">At Pearl Dental, we recognize that dental care is rarely something people look forward to. That is why we intentionally designed our clinic to break the old mold. We combine a comforting, spa-like atmosphere with the highest standards of modern clinical precision.</p>
                <p class="text-muted mb-4">We focus heavily on preventative education and conservative, minimally invasive treatments. Your long-term systemic health is our ultimate goal.</p>

                <!-- Stats Grid -->
                <div class="row g-4 border-top pt-4">
                    <div class="col-sm-4 text-center text-sm-start">
                        <h3 class="fw-bold text-primary mb-1">11+</h3>
                        <small class="text-muted text-uppercase fw-semibold tracking-wider">Years Active</small>
                    </div>
                    <div class="col-sm-4 text-center text-sm-start">
                        <h3 class="fw-bold text-primary mb-1">15k+</h3>
                        <small class="text-muted text-uppercase fw-semibold tracking-wider">Happy Patients</small>
                    </div>
                    <div class="col-sm-4 text-center text-sm-start">
                        <h3 class="fw-bold text-primary mb-1">99.4%</h3>
                        <small class="text-muted text-uppercase fw-semibold tracking-wider">Satisfaction Rate</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&q=80&w=800" alt="Modern Treatment Room" class="img-fluid rounded-3 shadow">
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 m-3 rounded-3 shadow-sm d-none d-sm-block max-width-xs">
                        <p class="small mb-0 fw-semibold"><i class="fa-solid fa-quote-left me-2"></i>We utilize 100% digital workflows to cut patient radiation by up to 80%.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MEET THE TEAM SECTION -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-3">
        <div class="text-center max-width-md mx-auto mb-5">
            <h2 class="fw-bold">Our Clinical Leadership</h2>
            <p class="text-muted">Our board-certified dentists bring decades of specialized hospital and private practice experience to your care.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Doctor 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm overflow-hidden h-100 team-card">
                    <div class="team-img-wrap">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=600" class="card-img-top" alt="Dr. Aris Vance">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Aris Vance, DDS</h5>
                        <span class="text-primary small fw-semibold d-block mb-3">Lead Prosthodontist & Founder</span>
                        <p class="text-muted small">Specializes in full-mouth reconstructive restorations, porcelain veneers, and absolute bite alignment precision.</p>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm overflow-hidden h-100 team-card">
                    <div class="team-img-wrap">
                        <img src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcTKBLvHH8z2c9xR2jpDcsMYilXmMCpy7dTLD2h4tlk1mMoAE87W7JsT_VQC5yLimwlVrmdImv0gjuxwd3Y" class="card-img-top" alt="Dr. Sarah Jenkins">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Sarah Jenkins, DMD</h5>
                        <span class="text-primary small fw-semibold d-block mb-3">Pediatric Care Specialist</span>
                        <p class="text-muted small">Passionate about child preventative psychology, early growth monitoring, and trauma-free dental experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRACTICE HISTORY TIMELINE -->
<section class="py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Journey Over Time</h2>
            <p class="text-muted">How we grew from a small solo practice into a top-rated multi-specialty health clinic.</p>
        </div>

        <div class="timeline-container mx-auto max-width-lg">

            <div class="timeline-item">
                <div class="timeline-badge bg-primary text-white"><i class="fa-solid fa-flag"></i></div>
                <div class="timeline-panel shadow-sm border rounded p-4">
                    <span class="text-primary fw-bold small">2015</span>
                    <h5 class="fw-bold mt-1 text-dark">Pearl Dental Founded</h5>
                    <p class="text-muted small mb-0">Dr. Aris Vance opened the practice with a single operatory chair and a vision for fully digital, patient-centered diagnostics.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge bg-primary text-white"><i class="fa-solid fa-arrow-up-right-dots"></i></div>
                <div class="timeline-panel shadow-sm border rounded p-4">
                    <span class="text-primary fw-bold small">2019</span>
                    <h5 class="fw-bold mt-1 text-dark">Facility Expansion & Tech Upgrade</h5>
                    <p class="text-muted small mb-0">Expanded our footprint to 5 state-of-the-art treatment suites and added advanced 3D Cone Beam computed tomography scans for advanced imaging.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-badge bg-primary text-white"><i class="fa-solid fa-medal"></i></div>
                <div class="timeline-panel shadow-sm border rounded p-4">
                    <span class="text-primary fw-bold small">2026</span>
                    <h5 class="fw-bold mt-1 text-dark">Recognized for Excellence</h5>
                    <p class="text-muted small mb-0">Celebrated reaching over 15,000 active unique families and named a top-tier modern clinic for aesthetic composite integration.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>