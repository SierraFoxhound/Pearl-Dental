<?php
/*
    Template Name: Blogs Page
*/

get_header();
?>

<!-- BLOG HEADER -->
<header class="bg-light py-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start">
                <h1 class="display-5 fw-bold text-dark">Dental Health & Education Blog</h1>
                <p class="lead text-muted mb-0">Clinical advice, health tips, and breakdowns of modern treatments directly from our medical staff.</p>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <!-- Search Widget -->
                <div class="input-group shadow-sm rounded-pill overflow-hidden bg-white border p-1">
                    <input type="text" class="form-control border-0 px-3 py-2 small" placeholder="Search articles...">
                    <button class="btn btn-primary rounded-pill px-4" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MAIN ARTICLES HUB -->
<main class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT COLUMN: ARTICLES GRID -->
            <div class="col-lg-9">
                <div class="row g-4">

                    <!-- Post 1 -->
                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100 overflow-hidden blog-page-card">
                            <div class="blog-img-wrap position-relative">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 z-3 text-uppercase">Hygiene</span>
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=600" alt="Toothbrush and dental floss close-up">
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                    <time datetime="2026-05-18">May 18, 2026</time>
                                    <span>•</span>
                                    <span>4 min read</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-3"><a href="#" class="text-dark text-decoration-none card-title-link">The Truth About Electric vs. Manual Toothbrushes</a></h4>
                                <p class="text-muted small flex-grow-1">Clinical trials verify that oscillating head structures drop plaque accumulations significantly faster than basic hand brushes. Here is how to select the proper option...</p>
                                <hr class="my-3 opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-avatar bg-secondary text-white rounded-circle me-2 fw-bold d-flex align-items-center justify-content-center small">AV</div>
                                    <small class="fw-semibold text-dark">Dr. Aris Vance, DDS</small>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Post 2 -->
                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100 overflow-hidden blog-page-card">
                            <div class="blog-img-wrap position-relative">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 z-3 text-uppercase">Orthodontics</span>
                                <img src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?auto=format&fit=crop&q=80&w=600" alt="Clear orthodontic aligner trays">
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                    <time datetime="2026-04-29">April 29, 2026</time>
                                    <span>•</span>
                                    <span>6 min read</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-3"><a href="service-single.html" class="text-dark text-decoration-none card-title-link">What to Expect During Your First Week with Invisalign</a></h4>
                                <p class="text-muted small flex-grow-1">Transitioning to aligner therapy involves unique tissue shifts. Learn straightforward tips to handle minor structural pressure and perfect your clean rotation workflow safely...</p>
                                <hr class="my-3 opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-avatar bg-secondary text-white rounded-circle me-2 fw-bold d-flex align-items-center justify-content-center small">SJ</div>
                                    <small class="fw-semibold text-dark">Dr. Sarah Jenkins, DMD</small>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Post 3 (Fixed Broken Image Link) -->
                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100 overflow-hidden blog-page-card">
                            <div class="blog-img-wrap position-relative">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 z-3 text-uppercase">Dietary Health</span>
                                <img src="https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?auto=format&fit=crop&q=80&w=600" alt="Glass of sparkling soda beverage with lemon bubble rings background">
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                    <time datetime="2026-03-12">March 12, 2026</time>
                                    <span>•</span>
                                    <span>5 min read</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-3"><a href="#" class="text-dark text-decoration-none card-title-link">5 Surprising Foods That Quietly Interfere with Enamel</a></h4>
                                <p class="text-muted small flex-grow-1">Dark acidic juices, sparkling water carbonation, and hidden complex starches stick to structural surfaces, dropping your mouth's baseline pH level into erosion zones...</p>
                                <hr class="my-3 opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-avatar bg-secondary text-white rounded-circle me-2 fw-bold d-flex align-items-center justify-content-center small">AV</div>
                                    <small class="fw-semibold text-dark">Dr. Aris Vance, DDS</small>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Post 4 -->

                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100 overflow-hidden blog-page-card">
                            <div class="blog-img-wrap position-relative">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 z-3 text-uppercase">Pediatrics</span>
                                <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&q=80&w=600" alt="Happy young toddler brushing teeth while laughing in bathroom mirror">
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                    <time datetime="2026-02-05">February 5, 2026</time>
                                    <span>•</span>
                                    <span>7 min read</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-3"><a href="#" class="text-dark text-decoration-none card-title-link">Preventing Early Childhood Decay: A Parent's Practical Guide</a></h4>
                                <p class="text-muted small flex-grow-1">Tips on handling baby bottle structural scaling, tracking primary teeth eruption patterns, and setting positive oral development routines before age 3...</p>
                                <hr class="my-3 opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-avatar bg-secondary text-white rounded-circle me-2 fw-bold d-flex align-items-center justify-content-center small">SJ</div>
                                    <small class="fw-semibold text-dark">Dr. Sarah Jenkins, DMD</small>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>

                <!-- PAGINATION ROW -->
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link rounded-start-pill small" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item active"><a class="page-link small" href="#">1</a></li>
                        <li class="page-item"><a class="page-link small" href="#">2</a></li>
                        <li class="page-item"><a class="page-link rounded-end-pill small" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

            <!-- RIGHT COLUMN: FILTER SIDEBAR -->
            <div class="col-lg-3">
                <aside class="position-sticky" style="top: 100px;">

                    <!-- Categories Card -->
                    <div class="card border rounded-3 p-4 bg-light mb-4 shadow-sm">
                        <h5 class="fw-bold text-dark mb-3">Filter Categories</h5>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li><a href="#" class="text-decoration-none text-dark d-flex justify-content-between align-items-center category-link py-1 small fw-semibold"><span>All Topics</span><span class="badge bg-secondary rounded-pill opacity-75">14</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center category-link py-1 small"><span>Hygiene & Cleanings</span><span class="badge bg-secondary-light text-muted rounded-pill">4</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center category-link py-1 small"><span>Orthodontics</span><span class="badge bg-secondary-light text-muted rounded-pill">3</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center category-link py-1 small"><span>Dietary Habits</span><span class="badge bg-secondary-light text-muted rounded-pill">2</span></a></li>
                            <li><a href="#" class="text-decoration-none text-muted d-flex justify-content-between align-items-center category-link py-1 small"><span>Pediatric Dentistry</span><span class="badge bg-secondary-light text-muted rounded-pill">5</span></a></li>
                        </ul>
                    </div>

                    <!-- Emergency CTA Card -->
                    <div class="card border-0 bg-primary text-white rounded-3 p-4 shadow-sm text-center">
                        <i class="fa-solid fa-tooth fa-2xl mb-3 text-white-50"></i>
                        <h5 class="fw-bold mb-2">Need Direct Care?</h5>
                        <p class="small text-white-50 mb-4">We reserve dedicated emergency slots every single day for acute pain or fractures.</p>
                        <a href="index.html#contact" class="btn btn-light w-100 rounded-pill py-2 fw-semibold btn-sm">Contact Clinic</a>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>