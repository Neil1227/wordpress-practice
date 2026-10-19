<?php
/**
 * Vault Component: Tech Blog / Developer Hero Banner
 *
 * $args options:
 * - badge (string)
 * - title (string)
 * - subtitle (string)
 */

$badge    = $args['badge'] ?? 'WordPress Development & Tutorials';
$title    = $args['title'] ?? get_bloginfo( 'name' );
$subtitle = $args['subtitle'] ?? get_bloginfo( 'description' );
?>

<section class="vault-hero-blog">
    <?php if ( $badge ) : ?>
        <span class="vault-hero-pill-dark"><?php echo esc_html( $badge ); ?></span>
    <?php endif; ?>

    <h1 class="vault-hero-title-dark"><?php echo esc_html( $title ); ?></h1>

    <?php if ( $subtitle ) : ?>
        <p class="vault-hero-subtitle-dark"><?php echo esc_html( $subtitle ); ?></p>
    <?php endif; ?>
</section>
