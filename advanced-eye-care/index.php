<?php
/**
 * Main Fallback Index Template
 *
 * @package AdvancedEyeCare
 */

get_header();
?>

<main id="primary" class="site-main" style="padding: 4rem 1.5rem; min-height: 60vh;">
	<div style="max-width: 1100px; margin: 0 auto;">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title" style="font-size: 2.5rem; font-weight: 800; color: #0f172a; margin-bottom: 1.5rem;">
						<?php the_title(); ?>
					</h1>
					<div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #475569;">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p>No content found.</p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
