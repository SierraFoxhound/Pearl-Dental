<?php

// 1. Theme Support Configuration
function ds_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ds_theme_support');


// 2. Master Enqueue Function (Combines Bootstrap, Parent, and Child styles)
function pearl_dental_enqueue_assets()
{
    $version = wp_get_theme()->get('Version');

    // ===========================================
    // ENQUEUE STYLES (CSS)
    // ==========================================
    // Load External Frameworks First
    wp_enqueue_style('ds-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style('ds-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css", array(), '6.6.0', 'all');

    // Load Kadence Parent Stylesheet
    wp_enqueue_style('kadence-parent-style', get_template_directory_uri() . '/style.css', array('ds-bootstrap'));

    // Load Pearl Dental Child Stylesheet LAST
    wp_enqueue_style(
        'pearl-dental-child-style',
        get_stylesheet_uri(),
        array('kadence-parent-style'),
        $version,
        'all'
    );

    // ==========================================
    // ENQUEUE SCRIPTS (JS) 
    // ===========================================
    // Bootstrap JS Bundle (Includes Popper.js)
    wp_enqueue_script('ds-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);

    // Custom Child Theme Javascript File 
    wp_enqueue_script(
        'ds-main-js',
        get_stylesheet_directory_uri() . '/assets/js/script.js',
        array('ds-bootstrap-js'),
        $version,
        true
    );

    // Add bridge configuration immediately below script hook
    wp_localize_script('ds-main-js', 'wp_ajax_objects', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'pearl_dental_enqueue_assets', 20);


/**
 * =========================================================================
 * PEARL DENTAL - ADVANCED GEOLOCATION CLINIC ROUTER
 * =======================================================================
 */

/**
 * 1. Master Repository of Clinic Locations
 */
function get_all_pearl_dental_clinics()
{
    return array(
        array(
            'name'     => 'Beverly Hills Suite',
            'address'  => '90210 Beverly Hills Dental Suite, Los Angeles CA',
            'phone'    => '(310) 555-9021',
            'timezone' => 'America/Los_Angeles',
            'lat'      => 34.0736,
            'lng'      => -118.4004
        ),
        array(
            'name'     => 'Downey Community Clinic',
            'address'  => '8043 2nd St, Downey, CA 90241',
            'phone'    => '(562) 555-1234',
            'timezone' => 'America/Los_Angeles',
            'lat'      => 33.9401,
            'lng'      => -118.1332
        ),
        array(
            'name'     => 'Chicago Millennium Park',
            'address'  => '456 Michigan Ave, Chicago IL',
            'phone'    => '(312) 555-7832',
            'timezone' => 'America/Chicago',
            'lat'      => 41.8827,
            'lng'      => -87.6227
        ),
    );
}

/**
 * 2. Mathematical Distance Calculator (Haversine Formula)
 */
function calculate_distance_haversine($lat1, $lng1, $lat2, $lng2)
{
    $earth_radius = 3959; // Calculates output radius in miles

    $dLat = deg2rad($lat2 - $lat1);
    $dLng = deg2rad($lng2 - $lng1);

    $a = sin($dLat / 2) * sin($dLat / 2) +
        cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
        sin($dLng / 2) * sin($dLng / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    return $earth_radius * $c;
}

/**
 * 3. Core AJAX Callback Endpoint Router
 */
function route_closest_clinic_by_zip_callback()
{
    if (! isset($_POST['zip']) || empty($_POST['zip'])) {
        wp_send_json_error('ZIP data field completely empty.');
    }

    $user_zip = sanitize_text_field($_POST['zip']);

    // Request coordinate translation from free US Geocoding API
    $geocode_url = "https://api.zippopotam.us/us/" . $user_zip;
    $response    = wp_remote_get($geocode_url);

    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
        wp_send_json_error('Invalid ZIP code or geolocation network offline.');
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);

    // Extract base coordinates of the entered ZIP code
    $user_lat = (float) $data['places'][0]['latitude'];
    $user_lng = (float) $data['places'][0]['longitude'];

    $clinics = get_all_pearl_dental_clinics();

    $closest_clinic    = null;
    $shortest_distance = 999999;

    // Loop through the registry to find the absolute physical mathematical match
    foreach ($clinics as $clinic) {
        $distance = calculate_distance_haversine($user_lat, $user_lng, $clinic['lat'], $clinic['lng']);

        if ($distance < $shortest_distance) {
            $shortest_distance = $distance;
            $closest_clinic    = $clinic;
        }
    }

    if ($closest_clinic) {
        if ($shortest_distance > 200) {
            wp_send_json_error('The closest Pearl Dental provider is currently further than 200 miles from your area.');
        }

        wp_send_json_success(array(
            'name'           => $closest_clinic['name'],
            'address'        => $closest_clinic['address'],
            'phone'          => $closest_clinic['phone'],
            'timezone'       => $closest_clinic['timezone'],
            'map_iframe_url' => 'https://maps.google.com/maps?q=' . urlencode($closest_clinic['address']) . '&t=&z=14&ie=UTF8&iwloc=&output=embed'
        ));
    } else {
        // Fallback returns dynamic West Coast default values matching your script configuration layout
        wp_send_json_success(array(
            'address'        => '8043 2nd St, Downey, CA 90241',
            'phone'          => '(562) 555-1234',
            'timezone'       => 'America/Los_Angeles',
            'map_iframe_url' => 'https://maps.google.com/maps?q=8043+2nd+St+Downey+CA&t=&z=14&ie=UTF8&iwloc=&output=embed'
        ));
    }

    wp_die();
}

// Hook bindings
add_action('wp_ajax_route_closest_clinic_by_zip', 'route_closest_clinic_by_zip_callback');
add_action('wp_ajax_nopriv_route_closest_clinic_by_zip', 'route_closest_clinic_by_zip_callback');
