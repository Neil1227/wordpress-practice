<?php
/**
 * Advanced Eye Care Theme Functions & Shortcode Registry
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function advanced_eye_care_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'advanced_eye_care_setup' );

/**
 * Enqueue Styles
 */
function advanced_eye_care_scripts() {
	wp_enqueue_style( 'advanced-eye-care-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'advanced_eye_care_scripts' );

/* ==========================================================================
   SHORTCODE REGISTRY (With Output Buffering)
   ========================================================================== */

/**
 * 1. Shortcode: [eye_reviews] or [reviews]
 * Usage: [eye_reviews title="Patient Testimonials" subtitle="Real Results"]
 */
function advanced_eye_reviews_shortcode( $atts ) {
	$parsed_atts = shortcode_atts(
		array(
			'title'    => 'What Our Patients Are Saying',
			'subtitle' => 'Real Stories & 5-Star Outcomes',
			'rating'   => '4.9 / 5.0 Rating Across 500+ Google Reviews',
		),
		$atts,
		'eye_reviews'
	);

	ob_start();
	get_template_part( 'template-parts/patient-reviews', null, $parsed_atts );
	return ob_get_clean();
}
add_shortcode( 'eye_reviews', 'advanced_eye_reviews_shortcode' );
add_shortcode( 'reviews', 'advanced_eye_reviews_shortcode' );

/**
 * 2. Shortcode: [eye_doctors] or [doctors]
 * Usage: [eye_doctors title="Our Eye Care Team"]
 */
function advanced_eye_doctors_shortcode( $atts ) {
	$parsed_atts = shortcode_atts(
		array(
			'title'    => 'Meet Our Board-Certified Eye Surgeons',
			'subtitle' => 'World-Class Specialists',
		),
		$atts,
		'eye_doctors'
	);

	ob_start();
	get_template_part( 'template-parts/our-doctors', null, $parsed_atts );
	return ob_get_clean();
}
add_shortcode( 'eye_doctors', 'advanced_eye_doctors_shortcode' );
add_shortcode( 'doctors', 'advanced_eye_doctors_shortcode' );

/**
 * 3. Shortcode: [eye_locations] or [locations]
 * Usage: [eye_locations title="Visit Our Clinic Offices"]
 */
function advanced_eye_locations_shortcode( $atts ) {
	$parsed_atts = shortcode_atts(
		array(
			'title'    => 'Our New Jersey Clinic & Surgery Centers',
			'subtitle' => 'Convenient Regional Locations',
		),
		$atts,
		'eye_locations'
	);

	ob_start();
	get_template_part( 'template-parts/locations-grid', null, $parsed_atts );
	return ob_get_clean();
}
add_shortcode( 'eye_locations', 'advanced_eye_locations_shortcode' );
add_shortcode( 'locations', 'advanced_eye_locations_shortcode' );

/**
 * 4. Shortcode: [eye_services_tabs]
 */
function advanced_eye_services_tabs_shortcode() {
	ob_start();
	get_template_part( 'template-parts/services-vertical-tabs' );
	return ob_get_clean();
}
add_shortcode( 'eye_services_tabs', 'advanced_eye_services_tabs_shortcode' );

/**
 * 5. Shortcode: [eye_appointment_cta]
 * Usage: [eye_appointment_cta title="..." description="..." phone="..."]
 */
function advanced_eye_cta_shortcode( $atts ) {
	$parsed_atts = shortcode_atts(
		array(
			'title'       => 'Ready to Experience Clear, Crisp Vision?',
			'description' => 'Schedule your comprehensive eye exam or surgical consultation with our specialists in New Jersey.',
			'phone'       => '(800) 555-EYES',
		),
		$atts,
		'eye_appointment_cta'
	);

	ob_start();
	get_template_part( 'template-parts/appointment-cta', null, $parsed_atts );
	return ob_get_clean();
}
add_shortcode( 'eye_appointment_cta', 'advanced_eye_cta_shortcode' );
