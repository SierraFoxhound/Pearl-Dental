<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Pearl Dental | Modern Family Dentistry</title>-->
    <!-- Load Bootstrap, Font Awesome, Stylesheet    -->
    <?php wp_head(); ?>
</head>

<body>
    <!--Nav Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/"><i class="fa-solid fa-tooth me-2"></i>Pearl Dental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => 'false',
                        'items_wrap' => '<ul class="pearl-nav navbar-nav ms-auto fw-semibold">%3$s</ul>',
                    )

                );
                ?>
                <a href="#contact" class="btn btn-primary ms-lg-3 rounded-pill px-4">Book Appointment</a>
            </div>
        </div>
    </nav>