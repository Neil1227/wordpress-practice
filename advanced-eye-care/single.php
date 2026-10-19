<?php
/**
 * Single Blog Post Template (Fully Responsive)
 *
 * @package AdvancedEyeCare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'eye-blog-post' ); ?>>

	<?php while ( have_posts() ) : the_post(); ?>

		<!-- 1. Responsive Blog Header -->
		<header class="eye-blog-header">
			<div class="eye-blog-header__container">
				
				<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) :
					?>
					<span class="eye-blog-header__category">
						<?php echo esc_html( $categories[0]->name ); ?>
					</span>
				<?php endif; ?>

				<h1 class="eye-blog-header__title"><?php the_title(); ?></h1>

				<div class="eye-blog-header__meta">
					<span>📅 <?php echo esc_html( get_the_date() ); ?></span>
					<span>•</span>
					<span>👨‍⚕️ Medical Review: <strong>Dr. Jing Jing Feng, M.D.</strong></span>
					<span>•</span>
					<span>⏱️ 4 Min Read</span>
				</div>

			</div>
		</header>

		<!-- 2. Responsive Article Content -->
		<div class="eye-blog-content">
			
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<!-- 3. Surgeon Author Box with Link to Doctors Page -->
			<div class="eye-author-card">
				<div class="eye-author-card__avatar">👨‍⚕️</div>
				<div class="eye-author-card__info">
					<h4>Written & Medically Reviewed by Dr. Jing Jing Feng, M.D.</h4>
					<p>
						Board-certified ophthalmic surgeon and fellow specializing in laser cataract and glaucoma surgery across New Jersey. 
						<a href="<?php echo esc_url( home_url( '/our-surgeons/' ) ); ?>" style="font-weight: 700;">View Surgeon Profile &rarr;</a>
					</p>
				</div>
			</div>

		</div>

	<?php endwhile; ?>

</article>

<!-- Global Consultation CTA Partial -->
<?php get_template_part( 'template-parts/appointment-cta' ); ?>

<?php
get_footer();
