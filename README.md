# Pearl Dental WordPress Child Theme

A custom WordPress child theme built on the Kadence Theme framework using a traditional PHP template architecture. The homepage, landing pages, and custom layouts are rendered through PHP template files, while single blog posts leverage Kadence's native post templates and editor experience.

## Features

* Custom PHP-based page templates
* Bootstrap 5 integration
* Font Awesome integration
* Responsive dental practice website design
* AJAX-powered ZIP code clinic locator
* Dynamic clinic information updates without page reloads
* Timezone-aware clinic open/closed status badge
* Google Maps embed generation for selected locations
* WordPress AJAX endpoint integration
* Child theme architecture built on Kadence

## ZIP Code Clinic Locator

The primary feature of this project is a custom ZIP code routing system that allows visitors to enter a U.S. ZIP code and automatically locate the nearest clinic location.

The locator:

* Converts ZIP codes into geographic coordinates using a geolocation service
* Calculates distance using the Haversine formula
* Returns the nearest clinic from a predefined location registry
* Dynamically updates:

  * Clinic name
  * Address
  * Phone number
  * Map location
  * Timezone data
  * Clinic open/closed status

The current implementation uses a locally managed clinic dataset stored within the theme's PHP code and demonstrates the routing architecture that can later be extended to external APIs, custom post types, or business location databases.

## Tech Stack

* WordPress
* PHP
* JavaScript (ES6)
* Bootstrap 5
* Kadence Theme
* AJAX
* Font Awesome

## Project Status

Current functionality includes the homepage experience, location routing system, dynamic clinic information rendering, and custom front-end interactions. Blog page layouts have been designed and integrated into the theme structure, with additional content management functionality planned for future development.
