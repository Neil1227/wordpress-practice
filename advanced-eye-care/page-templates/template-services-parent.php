<?php
/**
 * Template Name: Ophthalmology - Services Hub (Parent & Homepage)
 * Template Post Type: page
 *
 * Description: Comprehensive Homepage & Parent Services Hub template assembling the
 * Hero, Vertical Tabs, Doctors, Patient Reviews, FAQ Accordion, Locations, and CTA.
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. Parent Hero Section with Clinical Metrics -->
	<section class="eye-parent-hero" style="background: linear-gradient(180deg, #f0f9ff 0%, #ffffff 100%); padding: 4.5rem 1.5rem 3.5rem 1.5rem; text-align: center; border-bottom: 1px solid #e2e8f0;">
		<div style="max-width: 850px; margin: 0 auto;">
			<span style="display: inline-block; background: #e0f2fe; color: #0369a1; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; padding: 0.35rem 1rem; border-radius: 50px; margin-bottom: 1rem;">
				<i class="bi bi-patch-check-fill"></i> Surgical & Clinical Excellence
			</span>
			
			<h1 style="font-size: clamp(2.25rem, 4.5vw, 3.25rem); font-weight: 800; color: #0f172a; line-height: 1.15; margin: 0 0 1.25rem 0; letter-spacing: -0.02em;">
				<?php the_title(); ?>
			</h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="lead-content" style="font-size: 1.15rem; color: #475569; line-height: 1.7; margin: 0 auto 2rem auto;">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>

			<div style="display: flex; justify-content: center; gap: 2.5rem; flex-wrap: wrap; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e2e8f0;">
				<div>
					<div style="font-size: 1.75rem; font-weight: 800; color: #0284c7;">25,000+</div>
					<div style="font-size: 0.85rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Successful Surgeries</div>
				</div>
				<div>
					<div style="font-size: 1.75rem; font-weight: 800; color: #0284c7;">30+ Years</div>
					<div style="font-size: 0.85rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Clinical Experience</div>
				</div>
				<div>
					<div style="font-size: 1.75rem; font-weight: 800; color: #0284c7;">100%</div>
					<div style="font-size: 0.85rem; color: #64748b; font-weight: 600; text-transform: uppercase;">Board-Certified MDs</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. Vertical Tabs Services Master-Detail Partial -->
	<?php get_template_part( 'template-parts/services-vertical-tabs' ); ?>

	<!-- 3. Our Doctors Partial -->
	<?php get_template_part( 'template-parts/our-doctors' ); ?>

	<!-- 4. Patient Reviews & Verified Testimonials (Stuck directly into Homepage) -->
	<?php get_template_part( 'template-parts/patient-reviews' ); ?>

	<!-- 5. Interactive FAQ Accordion -->
	<?php get_template_part( 'template-parts/home-faq-accordion' ); ?>

	<!-- 6. Clinic Locations Grid -->
	<?php get_template_part( 'template-parts/locations-grid' ); ?>

	<!-- 7. Consultation CTA Partial -->
	<?php get_template_part( 'template-parts/appointment-cta' ); ?>

</main>

<?php
get_footer();
